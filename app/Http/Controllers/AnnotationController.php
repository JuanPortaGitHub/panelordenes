<?php

namespace App\Http\Controllers;


use App\Mail\notificacion;
use App\Mail\entregado;
use App\Mail\listo;
use App\Mail\presup;
use Illuminate\Support\Facades\Mail;
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


    public function listaindex()
    {
        $anotattions=Annotation::orderby('created_at','DESC')->get();


        return view('anotaciones.lista', compact('anotattions'));

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
            'pincode' => 'required|exists:users,pincode',
            'archivoadjunto' => 'required|max:2048',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }




        // CAMBIOS EN TABLA ANOTACIONES

        $nuevaanotacion = new Annotation();


        $nuevaanotacion->ot_id = $request->input('orden');
        $nuevaanotacion->anotacion = $request->input('anotacion');
        $nuevaanotacion->ruta = $request->file('archivoadjunto')->store('public');



        //PASOS CONSULTA DE PINCODE
        $pin = $request->input('pincode'); //Obtengo pincode de formulario (puede ser formulario de ordenes/anotaciones o de consultaorden (de cliente)

        $tecnico = DB::table('users')->where('pincode', $pin)->first();
        //hago consulta a BD para saber cual es el ID usuario/tecnico al que corresponde el pin

        $nuevaanotacion->user_id = $tecnico->id; //Asocio el id del usuario/tecnico para grabar en la anotacion










        // CAMBIOS EN TABLA ORDENES

        //Obtengo de la view la ot
        $otabuscar = $request->input('orden');

        //Busco la ot en la base de datos
        $ordenacambiar=Ot::where('ot_id', '=', $otabuscar)->first();

        $ordenacambiar->presupuesto = $request->input('presupuestoenviado');
        $ordenacambiar->fechaentrega = $request->input('fechaentregaenviada');
        $ordenacambiar->sintoma = $request->input('diagnosticoenviado');
        $estadonuevo=$ordenacambiar->estado_id;




        //Si la orden cambia de estado lo actualiza, sino sigue como esta guardando un parametro para el envio de mails
        if ($request->input('cambioorden')!= "Sin cambio"){

            $ordenacambiar->estado_id = $request->input('cambioorden');
            $estadonuevo=$ordenacambiar->estado_id;
        };

        if ($request->input('cambiotecnico')!= "Sin cambio"){

            $ordenacambiar->user_id = $request->input('cambioorden');
            echo $ordenacambiar->user_id;
        };

        if ($request->input('cambioarea')!= "Sin cambio"){

            $ordenacambiar->area_id = $request->input('cambioorden');

        };



        //PASOS para verificar que el checkbox visiblecliente esta o no tildado
        if($request->input('visiblecliente')== "Visible"){

            //Checkbox checked
            $nuevaanotacion->visiblecliente = 1;

            //mando mail en base a si esta presupuestada, lista o con encuesta (esta ultima si tiene tildado el checkbox)
            //si no hay cambio de estado manda el de notificacion (para no enviar 2 veces uno de presupuesto ante una consulta)

            if($request->input('cambioorden')== "Sin cambio"){

                Mail::to($ordenacambiar->cliente->mail)->queue(new notificacion($ordenacambiar));

            }elseif($estadonuevo == 8){

                Mail::to($ordenacambiar->cliente->mail)->queue(new entregado($ordenacambiar));

            }elseif($estadonuevo == 3){

                Mail::to($ordenacambiar->cliente->mail)->queue(new presup($ordenacambiar));

            }else{
                Mail::to($ordenacambiar->cliente->mail)->queue(new notificacion($ordenacambiar));
            };


        }else{
            //Checkbox not checked
            $nuevaanotacion->visiblecliente = 0;
        }


        //Verifico que pida interaccion con cliente (cuando esta presupuestado)

        if($estadonuevo != 3){

            $nuevaanotacion->interaccioncliente=0;

        }else{
            $nuevaanotacion->interaccioncliente=1;
        };







        //Guarda anotacion
        $nuevaanotacion->save();

        //Guarda OT
        $ordenacambiar->save();




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
    public function destroy($id)
    {
        Annotation::findOrFail($id)->delete();
        return back();
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

        //Cambio el estado de interaccioncliente a 0 en anotacion de presupuesto para que no aparezcan los botones de confirmar y rechazar
        $anotacionpresupuesto = Annotation::where('id','=', $request->input('anotacionid'))->first();
        $anotacionpresupuesto->interaccioncliente = 0;
        $anotacionpresupuesto->save();

        return back();
    }

    public function storecliente(Request $request){
        {

            $validator = \Validator::make($request->all(), [
                'orden' => 'required',
                'anotacion' => 'required',
            ]);

            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }




            // CAMBIOS EN TABLA ANOTACIONES

            $nuevaanotacion = new Annotation();


            $nuevaanotacion->ot_id = $request->input('orden');
            $nuevaanotacion->anotacion = $request->input('anotacion');
            $iddecliente = $request->input('iddecliente'); //obtengo el id de cliente
            $nuevaanotacion->cliente_id = $iddecliente; //asocio id de cliente a columna cliente_id de tabla anotaciones
            $nuevaanotacion->visiblecliente = 1;

            $nuevaanotacion->save(); //guardo anotacion



            return back();

        }

    }



}
