<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{



    public function getClientes(Request $request){

        $search = $request->search;

        if($search == ''){
            $clientes = Cliente::orderby('apellido','asc')->select('id','nombre','celular','telefono','mail','apellido')->limit(5)->get();
        }else{
            $clientes = Cliente::orderby('apellido','asc')->select('id','nombre','celular','telefono','mail','apellido')->where('apellido', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($clientes as $cliente){
            $response[] = array("apellidocliente"=>$cliente->apellido,"idclient"=>$cliente->id,"nombrecliente"=>$cliente->nombre,"label"=>$cliente->apellido." ".$cliente->nombre,"celularcliente"=>$cliente->celular,"telefonocliente"=>$cliente->telefono,"mailcliente"=>$cliente->mail);
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

        $clientes=Cliente::all();

        return view('clientes.listaclientes', compact('clientes'));


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

        return view ("clientes.show", compact ("cliente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);

        return view ("clientes.edit", compact ("cliente"));
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
            'mail'=>'required'



        ]);

        $updatecliente=Cliente::findOrFail($id);

        $updatecliente->apellido = $request->input('apellido');
        $updatecliente->nombre = $request->input('nombre');
        $updatecliente->celular = $request->input('celular');
        $updatecliente->telefono = $request->input('telefono');
        $updatecliente->mail = $request->input('mail');

        $updatecliente->save();

        return back();

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
