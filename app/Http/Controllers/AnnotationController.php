<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Annotation;
use App\Categoria;
use App\estado;
use App\Ot;
use App\Reparaexito;
use App\User;
use Illuminate\Http\Request;

class AnnotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders=Ot::all();


        return view('ordenes.anotaciones', compact('orders','tecnicos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('anotaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'orden'=>'required',
            'anotacion'=>'required',
            'pincode'=>'required'

        ]);



        $nuevaanotacion = new Annotation();

        $nuevaanotacion->ot_id = $request->input('orden');
        $nuevaanotacion->anotacion = $request->input('anotacion');

        //PASOS CONSULTA DE PINCODE
        $tecnicopin = $request->input('pincode'); //Obtengo pincode de formulario
        $tecnico = DB::table('users')->where('pincode', $tecnicopin)->first(); //hago consulta a BD para saber cual es el ID usuario al que corresponde el pin
        $nuevaanotacion->user_id = $tecnico->id; //Asocio el id del usuario para grabar en la anotacion


        //PASOS Verifica que el checkbox visiblecliente esta o no tildado
        if($request->has('visiblecliente')){
            //Checkbox checked
            $nuevaanotacion->visiblecliente = 1;
        }else{
            //Checkbox not checked
            $nuevaanotacion->visiblecliente = 0;
        }

        //Guarda anotacion
        $nuevaanotacion->save();

        return redirect()->to('orden/'.$nuevaanotacion->ot_id); //Regresa a la pagina de anotacion en la cual estaba

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
    public function show($ot_id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Annotation $annotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annotation $annotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annotation $annotation)
    {
        //
    }

}
