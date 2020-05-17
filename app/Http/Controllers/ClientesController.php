<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getClientes(Request $request){

        $search = $request->search;

        if($search == ''){
            $clientes = Cliente::orderby('apellido','asc')->select('id','nombre','celular','telefono','mail','apellido')->limit(5)->get();
        }else{
            $clientes = Cliente::orderby('apellido','asc')->select('id','nombre','celular','telefono','mail','apellido')->where('apellido', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($clientes as $cliente){
            $response[] = array("apellidocliente"=>$cliente->apellido,"idcliente"=>$cliente->id,"nombrecliente"=>$cliente->nombre,"label"=>$cliente->apellido." ".$cliente->nombre,"celularcliente"=>$cliente->celular,"telefonocliente"=>$cliente->telefono,"mailcliente"=>$cliente->mail);
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

        $request->validate([

            'apellidocliente'=>'required',
            'nombrecliente'=>'required',
            'celularcliente'=>'required',
            'telefonocliente'=>'required',
            'mailcliente'=>'required'



        ]);

        $nuevocliente = new Cliente();

                    $nuevocliente->apellido = $request->input('apellidocliente');
                    $nuevocliente->nombre = $request->input('nombrecliente');
                    $nuevocliente->celular = $request->input('celularcliente');
                    $nuevocliente->telefono = $request->input('telefonocliente');
                    $nuevocliente->mail = $request->input('mailcliente');

                    $nuevocliente->save();

        // Ya luego de grabar devuelve a la lista de clientes

        //return redirect()->to('clientes');


          echo "<script type=\"text/javascript\">window.close();</script>";

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
        $cliente=Cliente::findOrFail($id);

        $cliente->update($request->all());

        return redirect()->route('clientes.index');

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
