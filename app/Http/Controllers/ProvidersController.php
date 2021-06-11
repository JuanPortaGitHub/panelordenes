<?php

namespace App\Http\Controllers;

use App\Condiva;
use App\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers=Provider::all();


        return view('proveedores.listproveedor', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condivas = Condiva::all();
        return view('proveedores.cargaproveedor', compact('condivas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newprov = new Provider();

        $newprov->cuit = $request->input('cuitprov');
        $newprov->condicioniva = $request->input('condivaprov');
        $newprov->razonsocial = $request->input('razonsocialprov');
        $newprov->vendedor = $request->input('vendedorprov');
        $newprov->celular = $request->input('celularprov');
        $newprov->telefono = $request->input('telefonorprov');
        $newprov->mail = $request->input('mailprov');

        $newprov->save();

        return redirect()->route('providers.index')->with('success', 'Proveedor agregado!');
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
        $condivas = Condiva::all();
        $provider=Provider::findOrFail($id);

        return view ("proveedores.editproveedor", compact ("provider","condivas"));



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
        $updateprov=Provider::find($id);

        $updateprov->cuit = $request->input('cuitprov');
        $updateprov->condicioniva = $request->input('condivaprov');
        $updateprov->razonsocial = $request->input('razonsocialprov');
        $updateprov->vendedor = $request->input('vendedorprov');
        $updateprov->celular = $request->input('celularprov');
        $updateprov->telefono = $request->input('telefonorprov');
        $updateprov->mail = $request->input('mailprov');

        $updateprov->save();

        return redirect()->route('providers.index')->with('success', 'Proveedor Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $updateprov = Provider::find($id);
        $updateprov->delete();
        return redirect()->route('providers.index')->with('success', 'Proveedor Eliminado!');
    }
}
