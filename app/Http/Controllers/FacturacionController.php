<?php

namespace App\Http\Controllers;

use Afip;
use App\Condiva;
use App\Detallefactura;
use App\Factura;
use App\Formapago;
use App\Ot;
use App\Recibo;
use App\Sucursal;
use App\Tarjeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Null_;
use Throwable;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index()
    {
        $facturas = Factura::orderby('fechafactura','DESC')->orderby('id','DESC')->paginate(10);
        $listasucursales = Sucursal::all();
        $orders = Ot::query();

        try{
            $afip = new Afip(array('CUIT' => 20334376045));
            $ultimaFacturaA = $afip->ElectronicBilling->GetLastVoucher(1,1);
            $ultimaFacturaB = $afip->ElectronicBilling->GetLastVoucher(1,6);
            $server_status = $afip->ElectronicBilling->GetServerStatus();
        }catch(\Exception $e){
            $ultimaFacturaA = 'No funciona Servidor Afip Factura A';
            $ultimaFacturaB = 'No funciona Servidor Afip Factura B';
            $server_status = null;
        };




        return view('facturacion.listafacturas', compact('facturas','listasucursales', 'orders','ultimaFacturaA','ultimaFacturaB', 'server_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condivas = Condiva::all();
        $locales = Sucursal::all();
        $factura = Factura::all()->last();
        $formaspagos = Formapago::all();
        $formaspagostarjetas = Tarjeta::all();
        //$formaspagostarjetas = Formapago::all()->skip(2); //salteo 2 para saltear efectivo y transferencia





        return view ('facturacion.cargafactura', compact('condivas', 'locales','factura','formaspagos','formaspagostarjetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     * @throws \Exception
     */
    public function store(Request $request)
    {

        Log::debug($request);

        $validator = \Validator::make($request->all(), [

            'pincode' => 'required|exists:users,pincode',
            'apellidocliente'=> 'required|exists:clientes,apellido',
            'saldoacancelar'=> 'required|in:0.00',
            'cantproducto1'=> '|min:1|',
        ]
        );


        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->messages()->all()]);
        }

        $newfactura = new Factura();

        $newfactura->fechafactura = $request->input('fechafactura');
        $newfactura->tipo = $request->input('tipofactura');
        $newfactura->nrolocalfactura = $request->input('nrolocalfactura');
        $newfactura->numfactura = $request->input('nrofactura');
        $newfactura->cotizacionfactura = $request->input('cotizaciondolar');
        $newfactura->idsucursalfactura = $request->input('local');
        $newfactura->idcliente = $request->input('idclient');
        $newfactura->negro = $request->input('facturar');


        //PASOS CONSULTA DE PINCODE
        $pin = $request->input('pincode'); //Obtengo pincode de formulario (puede ser formulario de ordenes/anotaciones o de consultaorden (de cliente)

        $tecnico = DB::table('users')->where('pincode', $pin)->first();
        //hago consulta a BD para saber cual es el ID usuario/tecnico al que corresponde el pin

        $newfactura->user_id = $tecnico->id; //Asocio el id del usuario/tecnico para grabar en la anotacion
        $newfactura->save();

//Fin informacion para carga factura electronica




        //CARGA DE ITEMS DE FACTURA EN DETALLEFACTURA

        $number = count($_POST["idprod"]); //Ver la cantidad de items

        for($i=0; $i<$number; $i++) //hace bucle para cargar item por item
        {
            $newdetalle = new Detallefactura();
            $newdetalle->idfactura = $newfactura->id;
            $newdetalle->idproducto = $request->input('idprod')[$i];

            $newdetalle->precio = $request->input('precioprod')[$i];
            $newdetalle->descripcion = $request->input('descripcionproducto')[$i];
            $newdetalle->descuento = $request->input('descprod')[$i];


            $newdetalle->cantidad = $request->input('cantprod')[$i];
            $newdetalle->save();

        }

        //CARGA DETALLES DE FORMA DE PAGO

        $datospagos = json_decode($_POST['datospagos']);

        for ($p=0; $p< count($datospagos); $p++){
            $recibo = new Recibo();
            $recibo->idformapago = $datospagos[$p]->tipopago;
            $recibo->monto = $datospagos[$p]->montopagado;
            $recibo->idcliente = $newfactura->idcliente;
            $recibo->user_id = $newfactura->user_id;
            $recibo->idfactura = $newfactura->id;
            $recibo->sucursal_id = $newfactura->idsucursalfactura;

            if($datospagos[$p]->idtipotarjeta == NULL){
                $recibo->idfinanciaciontarjeta = NULL;
                $recibo->lote = NULL;
                $recibo->autorizacion = NULL;
                $recibo->montofinanciado = $datospagos[$p]->montopagado;
            }else{$recibo->idfinanciaciontarjeta = $datospagos[$p]->idtipotarjeta;
                $recibo->lote = $datospagos[$p]->lote;
                $recibo->autorizacion = $datospagos[$p]->autorizacion;
                $recibo->montofinanciado = $datospagos[$p]->montofinanciado;
            }



            $recibo->save();



            //Informacion para carga factura electronica

            if($newfactura->negro == 0){

                $contador = 5;
                    for ($try = 0; $try < $contador; $try++) {
                         try{
                                $cliente = DB::table('clientes')->where('id', $newfactura->idcliente)->first();

                                switch ($cliente->condicioniva){
                                    case(2):
                                        $tipofactura = 1;
                                        $tipodni = 80;
                                        $docnro = $cliente->dnicuit;
                                        break;

                                    case(1):
                                        $tipofactura = 6;
                                        $tipodni = 99;
                                        $docnro = 0;
                                        break;

                                    default:
                                        $tipofactura = 6;
                                        $tipodni = 80;
                                        $docnro = $cliente->dnicuit;
                                }

                                $afip = new Afip(array('CUIT' => 20334376045));

                                //Pide la ultima factura y le suma 1 para pasarle los datos luego
                                $last_voucher = $afip->ElectronicBilling->GetLastVoucher(1,$tipofactura);

                                $valfac = $last_voucher + 1;

                                require_once '../vendor/afipsdk/afip.php/src/Afip.php';


                                if($request->TotNeto105 != '0.00' and $request->TotNeto21 != '0.00'){
                                    $arrayiva = array(
                                        array(
                                            'Id' 		=> 5, // Id del tipo de IVA (5 para 21%)(ver tipos disponibles)
                                            'BaseImp' 	=> $request->TotNeto21, // Base imponible
                                            'Importe' 	=> $request->sumVal21 // Importe
                                        ),
                                        array(
                                            'Id' 		=> 4, // Id del tipo de IVA (4 para 10,5%)(ver tipos disponibles)
                                            'BaseImp' 	=> $request->TotNeto105, // Base imponible
                                            'Importe' 	=> $request->sumVal105 // Importe
                                        ),
                                );
                                }elseif($request->TotNeto105 != '0.00'){
                                    $arrayiva = array(
                                        array(
                                            'Id' 		=> 4, // Id del tipo de IVA (4 para 10,5%)(ver tipos disponibles)
                                            'BaseImp' 	=> $request->TotNeto105, // Base imponible
                                            'Importe' 	=> $request->sumVal105 // Importe
                                        ),
                                    );
                                }else{
                                    $arrayiva = array(
                                        array(
                                            'Id' 		=> 5, // Id del tipo de IVA (5 para 21%)(ver tipos disponibles)
                                            'BaseImp' 	=> $request->TotNeto21, // Base imponible
                                            'Importe' 	=> $request->sumVal21 // Importe
                                        ),
                                    );
                                };

                                $data = array(
                                    'CantReg' 	=> 1,  // Cantidad de comprobantes a registrar
                                    'PtoVta' 	=> 1,  // Punto de venta
                                    'CbteTipo' 	=> $tipofactura,  // Tipo de comprobante (ver tipos disponibles)
                                    'Concepto' 	=> 1,  // Concepto del Comprobante: (1)Productos, (2)Servicios, (3)Productos y Servicios
                                    'DocTipo' 	=> $tipodni, // Tipo de documento del comprador (99 consumidor final, ver tipos disponibles)
                                    'DocNro' 	=> $docnro,  // Número de documento del comprador (0 consumidor final)
                                    'CbteDesde' 	=> $valfac,  // Número de comprobante o numero del primer comprobante en caso de ser mas de uno
                                    'CbteHasta' 	=> $valfac,  // Número de comprobante o numero del último comprobante en caso de ser mas de uno
                                    'CbteFch' 	=> intval(date('Ymd')), // (Opcional) Fecha del comprobante (yyyymmdd) o fecha actual si es nulo
                                    'ImpTotal' 	=> ($request->TotNeto21+$request->TotNeto105+$request->sumVal21+$request->sumVal105), // Importe total del comprobante
                                    'ImpTotConc' 	=> 0,   // Importe neto no gravado
                                    'ImpNeto' 	=> ($request->TotNeto21+$request->TotNeto105), // Importe neto gravado
                                    'ImpOpEx' 	=> 0,   // Importe exento de IVA
                                    'ImpIVA' 	=> ($request->sumVal21+$request->sumVal105),  //Importe total de IVA
                                    'ImpTrib' 	=> 0,   //Importe total de tributos
                                    'MonId' 	=> 'PES', //Tipo de moneda usada en el comprobante (ver tipos disponibles)('PES' para pesos argentinos)
                                    'MonCotiz' 	=> 1,     // Cotización de la moneda usada (1 para pesos argentinos)
                                    'Iva' 		=> $arrayiva,
                                );
                             Log::debug($data);
                                $res = $afip->ElectronicBilling->CreateVoucher($data);
                                Log::debug($res);


                                $facturaAgregarCAE = Factura::find($newfactura->id);
                                $facturaAgregarCAE->CAE = $res['CAE']; //CAE asignado el comprobante
                                $facturaAgregarCAE->VencimientoCAE = $res['CAEFchVto']; //CAE asignado el comprobante
                                $nroAFIPfactura=0;

                                if($tipofactura = 6){
                                    $ultimaA = DB::table('facturas')->where('tipo', 'A')->orderby('nroAFIPfactura', 'desc')->first();
                                    $facturaAgregarCAE->nroAFIPfactura = $ultimaA->nroAFIPfactura+1;
                                }
                                else{
                                    $ultimaB = DB::table('facturas')->where('tipo', 'B')->orderby('nroAFIPfactura', 'desc')->first();
                                    $facturaAgregarCAE->nroAFIPfactura = $ultimaB->nroAFIPfactura+1;
                                }

                                $facturaAgregarCAE->save();

                                 return redirect()->to('facturacion/create');
                         } catch (\Exception $e) {
                             Log::debug($e);
                             var_dump('failed ' . $try);
                             sleep(1);
                             continue;
                         }
                        break;
                    }
            }
                }
        return redirect()->to('facturacion/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura=Factura::findOrFail($id);
        $listasucursales = Sucursal::all();
        $orders = Ot::query();




        return view('facturacion.detallesfactura', compact('factura','listasucursales', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
