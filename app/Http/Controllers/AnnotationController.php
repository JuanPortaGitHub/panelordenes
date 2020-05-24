<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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

        $validator = \Validator::make($request->all(), [
            'orden' => 'required',
            'anotacion' => 'required',
            'pincode' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }









        $nuevaanotacion = new Annotation();


        $nuevaanotacion->ot_id = $request->input('orden');
        $nuevaanotacion->anotacion = $request->input('anotacion');


        //PASOS CONSULTA DE PINCODE
        $pin = $request->input('pincode'); //Obtengo pincode de formulario (puede ser formulario de ordenes/anotaciones o de consultaorden (de cliente)

        if($pin<9999){ //el pincode que identifica los clientes es 9999, cualquier otro nro entra en el if para identificar que usuario/tecnico hizo la anotacion

            $tecnico = DB::table('users')->where('pincode', $pin)->first(); //hago consulta a BD para saber cual es el ID usuario/tecnico al que corresponde el pin
            $nuevaanotacion->user_id = $tecnico->id; //Asocio el id del usuario/tecnico para grabar en la anotacion



            //PASOS para verificar que el checkbox visiblecliente esta o no tildado
            if($request->input('visiblecliente')== "Visible"){
                //Checkbox checked
                $nuevaanotacion->visiblecliente = 1;
            }else{
                //Checkbox not checked
                $nuevaanotacion->visiblecliente = 0;
            }

            //Guarda anotacion
            $nuevaanotacion->save();



        }else{ //Alternativa cuando el pincode es 9999 (o sea que anota un cliente)

            $iddecliente = $request->input('iddecliente'); //obtengo el id de cliente
            $nuevaanotacion->cliente_id = $iddecliente; //asocio id de cliente a columna cliente_id de tabla anotaciones
            $nuevaanotacion->save(); //guardo anotacion

            return back();
        }
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




    /**
     * Display the specified resource.
     *
     * @param  \App\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
}
