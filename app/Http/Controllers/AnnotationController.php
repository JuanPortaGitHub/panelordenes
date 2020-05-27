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


        // CAMBIOS EN TABLA ORDENES

        //Obtengo de la view la ot
        $otabuscar = $request->input('orden');

        //Busco la ot en la base de datos
        $ordenacambiar=Ot::where('ot_id', '=', $otabuscar)->firstOrFail();

        $ordenacambiar->presupuesto = $request->input('presupuestoenviado');
        $ordenacambiar->fechaentrega = $request->input('fechaentregaenviada');
        $ordenacambiar->estado_id = $request->input('cambioorden');
        $ordenacambiar->save();




        // CAMBIOS EN TABLA ANOTACIONES

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
                    $nuevaanotacion->visiblecliente = 1;

        $nuevaanotacion->save(); //guardo anotacion

        }

        return back();

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


    public function confirmapresupuesto(Request $request){

        //CONFIRMACION/RECHAZO ORDEN
        //Obtengo de la view la ot a confirmar/rechazar
        $otabuscar = $request->input('ot_id');

        //Busco la ot en la base de datos
        $otconfirmadaorechazada=Ot::where('ot_id', '=', $otabuscar)->firstOrFail();


        //Si se presiona el boton submit con valor confirma cambia a estado 5 (confirmado)
        if($request->get('submit') == 'Confirma') {

            $otconfirmadaorechazada->estado_id=5;

            //CARGA REGISTRO DE ANOTACION
            $nuevaanotacion = new Annotation();

            $nuevaanotacion->ot_id = $otconfirmadaorechazada->ot_id;
            $nuevaanotacion->anotacion = 'Presupuesto confirmado por cliente';
            $nuevaanotacion->cliente_id = $otconfirmadaorechazada->cliente_id;
            $nuevaanotacion->visiblecliente = 1;
            $nuevaanotacion->save();


        //Si se presiona el boton submit con valor Rechaza cambia a estado 6 (rechazado)
        } else if($request->get('submit') == 'Rechaza') {

            $otconfirmadaorechazada->estado_id=6;

            //CARGA REGISTRO DE ANOTACION
            $nuevaanotacion = new Annotation();

            $nuevaanotacion->ot_id = $otconfirmadaorechazada->ot_id;
            $nuevaanotacion->anotacion = 'Presupuesto rechazado por cliente';
            $nuevaanotacion->cliente_id = $otconfirmadaorechazada->cliente_id;
            $nuevaanotacion->visiblecliente = 1;
            $nuevaanotacion->save();
        }

        //Guardo la confirmacion
        $otconfirmadaorechazada->save();



        return back();
    }





}
