<?php

namespace App\Http\Controllers;

use App\Caja;
use App\Cliente;
use App\Factura;
use App\Formapago;
use App\IngresoEgresoCaja;
use App\Recibo;
use App\Sucursal;
use App\Tarjeta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecibosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function arqueo()
    {
        $dateToday = Carbon::now()->format('d-m-y');
        $dateFromFormat = Carbon::now()->format('y-m-d');
        $dateToFormat = Carbon::now()->addDay()->format('y-m-d');
        $listasucursales = Sucursal::all();
        $formaspagos = Formapago::all();
        $formaspagostarjetas = Tarjeta::all();
        $facturas = Factura::all();
        $recibosefectivofecha = Recibo::where('idformapago', '=', 1)->whereBetween('updated_at', [$dateFromFormat, $dateToFormat])->orderby('updated_at', 'desc')->get();
        $ingresosyegresosFecha = IngresoEgresoCaja::whereBetween('updated_at', [$dateFromFormat, $dateToFormat])->orderby('updated_at', 'desc')->get();

        return view ('caja.listaMovimientosCaja', compact('formaspagos','formaspagostarjetas', 'listasucursales', 'facturas', 'recibosefectivofecha', 'ingresosyegresosFecha', 'dateToday'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formaspagos = Formapago::all();
        $formaspagostarjetas = Tarjeta::all();

        return view ('recibos.cargarecibo', compact('formaspagos','formaspagostarjetas'));
    }


    public function createingresoegresocaja()
    {
        $formaspagos = Formapago::all();
        $formaspagostarjetas = Tarjeta::all();
        $listacajas = Caja::all();


        return view ('recibos.ingresoegresocaja', compact('formaspagos','formaspagostarjetas', 'listacajas'));
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

            ]
        );


        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->messages()->all()]);
        }

        $pin = $request->input('pincode'); //Obtengo pincode de formulario (puede ser formulario de ordenes/anotaciones o de consultaorden (de cliente)

        $tecnico = DB::table('users')->where('pincode', $pin)->first();
        //hago consulta a BD para saber cual es el ID usuario/tecnico al que corresponde el pin



            $recibo = new Recibo();
            $recibo->idformapago = $request->input('formadepago');
            $recibo->monto = $request->input('monto');
            $recibo->idcliente = $request->input('idclient');
            $recibo->user_id =$tecnico->id;
            $recibo->idfactura = NULL;
            $recibo->sucursal_id = NULL;
            $recibo->detalles = $request->input('detalles');

            if($recibo->idformapago != 2){
                $recibo->idfinanciaciontarjeta = NULL;
                $recibo->lote = NULL;
                $recibo->autorizacion = NULL;
                $recibo->montofinanciado = $recibo->monto;
            }else{$recibo->idfinanciaciontarjeta = $request->input('tipotarjeta');
                $recibo->lote = $request->input('lote');
                $recibo->autorizacion = $request->input('autorizacion');
                $recibo->montofinanciado = $request->input('montofinanciado');
            }



            $recibo->save();


    }



    public function storeingresoegresocaja(Request $request)
    {
        $validator = \Validator::make($request->all(), [

                'pincode' => 'required|exists:users,pincode',

            ]
        );


        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->messages()->all()]);
        }

        $pin = $request->input('pincode'); //Obtengo pincode de formulario (puede ser formulario de ordenes/anotaciones o de consultaorden (de cliente)

        $tecnico = DB::table('users')->where('pincode', $pin)->first();
        //hago consulta a BD para saber cual es el ID usuario/tecnico al que corresponde el pin


        //$compruebaultimoIngreso = IngresoEgresoCaja::latest()->first();


        $ingresoegreso = new IngresoEgresoCaja();
        $ingresoegreso->tipo = $request->input('ingresoOegreso');

        $compruebaultimoIngreso = IngresoEgresoCaja::latest('nro')->first();
           if($compruebaultimoIngreso){
                  $ingresoegreso->nro = $compruebaultimoIngreso->nro + 1;
              }else{
            $ingresoegreso->nro = 1;
        }
        $ingresoegreso->caja_id = $request->input('selectCaja');
        $ingresoegreso->monto = $request->input('monto');
        $ingresoegreso->detalle = $request->input('detalles');

        if($ingresoegreso->tipo == 'Retiro'){
            $ingresoegreso->retiroarecibir = true;
        }else{
            $ingresoegreso->retiroarecibir = false;
        }

        $ingresoegreso->user_id =$tecnico->id;


        $ingresoegreso->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
