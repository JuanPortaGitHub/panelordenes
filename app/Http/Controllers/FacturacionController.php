<?php

namespace App\Http\Controllers;

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

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::orderby('fechafactura','DESC')->orderby('id','DESC')->paginate(10);
        $listasucursales = Sucursal::all();
        $orders = Ot::query();




        return view('facturacion.listafacturas', compact('facturas','listasucursales', 'orders'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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



        //PASOS CONSULTA DE PINCODE
        $pin = $request->input('pincode'); //Obtengo pincode de formulario (puede ser formulario de ordenes/anotaciones o de consultaorden (de cliente)

        $tecnico = DB::table('users')->where('pincode', $pin)->first();
        //hago consulta a BD para saber cual es el ID usuario/tecnico al que corresponde el pin

        $newfactura->user_id = $tecnico->id; //Asocio el id del usuario/tecnico para grabar en la anotacion


        $newfactura->save();


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
