<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Condiva;
use App\Detallefactura;
use App\Factura;
use App\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class ClientesController extends Controller
{



    public function getClientes(Request $request){

        $search = $request->search;

        if($search == ''){
            $clientes = Cliente::orderby('apellido','asc')->get();
        }else{
            $clientes = Cliente::orderby('apellido','asc')->where('apellido', 'like', '%' .$search . '%')->orwhere('dnicuit', 'like','%' .$search . '%')->get();
        }

        $response = array();
        foreach($clientes as $cliente){
            $response[] = array(
                "apellidocliente"=>$cliente->apellido,
                "idclient"=>$cliente->id,
                "nombrecliente"=>$cliente->nombre,
                "condivacliente"=>$cliente->condiciondeiva->condicion,
                "cuitcliente"=>$cliente->dnicuit,
                "label"=>$cliente->dnicuit." || ".$cliente->apellido." ".$cliente->nombre,
                "celularcliente"=>$cliente->celular,
                "telefonocliente"=>$cliente->telefono,
                "mailcliente"=>$cliente->mail,

                );
        }

        echo json_encode($response);

        exit;
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condivas = Condiva::all();
        $clientes=Cliente::all();

        return view('clientes.listaclientes', compact('clientes', 'condivas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('clientes.cargacliente');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Valida campos requeridos del formulario



        $nuevocliente = new Cliente();

                    $nuevocliente->dnicuit = $request->input('dnicuit');
                    $nuevocliente->condicioniva = $request->input('condivacliente');
                    $nuevocliente->apellido = $request->input('apellido');
                    $nuevocliente->nombre = $request->input('nombre');
                    $nuevocliente->celular = $request->input('celular');
                    $nuevocliente->telefono = $request->input('telefono');
                    $nuevocliente->mail = $request->input('mail');

                    $nuevocliente->save();

        // Ya luego de grabar devuelve a la lista de clientes

        //return redirect()->to('clientes');

         return back();

    }








    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=Cliente::findOrFail($id);
        $facturas= Factura::all();
        $recibos= Recibo::all();
        $reciboscliente = Recibo::all()->where('idcliente', $id) ->where ('idformapago', '!=', 5);
        $recibosclientetotales= Recibo::all()->where('idcliente', $id);
        $recibossinfactura = Recibo::all()->where('idcliente', $id) ->where ('idfactura', '=', Null);

        return view ("clientes.show", compact ("cliente", "facturas","recibos", "reciboscliente", 'recibosclientetotales','recibossinfactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condivas = Condiva::all();
        $cliente=Cliente::findOrFail($id);

        return view ("clientes.edit", compact ("cliente","condivas"));
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

        $request->validate([

            'apellido'=>'required',
            'nombre'=>'required',
            'celular'=>'required',
            'telefono'=>'required',
            'mail'=>'required',
            'dnicuit'=>'required',
            'condivacliente'=>'required'



        ]);

        $updatecliente=Cliente::findOrFail($id);

        $updatecliente->dnicuit = $request->input('dnicuit');
        $updatecliente->condicioniva = $request->input('condivacliente');
        $updatecliente->apellido = $request->input('apellido');
        $updatecliente->nombre = $request->input('nombre');
        $updatecliente->celular = $request->input('celular');
        $updatecliente->telefono = $request->input('telefono');
        $updatecliente->mail = $request->input('mail');

        $updatecliente->save();

        return redirect()->to('clientes');

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
