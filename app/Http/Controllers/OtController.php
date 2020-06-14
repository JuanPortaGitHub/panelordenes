<?php

namespace App\Http\Controllers;

use App\Mail\mailingreso;
use Dompdf\Dompdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Annotation;
use App\area;
use App\Categoria;
use App\Ot;
use App\Reparaexito;
use App\tipodeequipo;
use Illuminate\Http\Request;

use App\Cliente;
use App\Equipo;
use App\User;
use App\Estadorepuesto;
use App\Confirmacion;
use App\estado;
use App\Sucursal;
use Illuminate\Support\Facades\DB;

class OtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {



        $orders=Ot::all()->sortByDesc("ot_id");

        return view('ordenes.listaot', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {






        $sucursales = Sucursal::all();
        $estados = estado::all();
        $tecnicos = User::all();
        $estadoderepuestos = Estadorepuesto::all();
        $confirmacions = Confirmacion::all();
        $areas = area::all();
        $fechaentrega=now()->addDays(5);
        $tipoequipos= tipodeequipo::all();

        //CREA VALOR RANDOM PARA EL PASSWORD DE OT
        $passwordot= strtolower(str::random(5));




        return view('ordenes.cargaot', compact('tecnicos','estadoderepuestos', 'confirmacions', 'estados', 'sucursales', 'fechaentrega', 'areas', 'tipoequipos', 'passwordot'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        // Parte que carga datos en base de datos Equipo

         $nuevoequipo = new Equipo();

            $nuevoequipo->tipodeequipo_id = $request->input('tipodeequipo');
            $nuevoequipo->modelo = $request->input('modeloequipo');
            $nuevoequipo->password = $request->input('passwordequipo');
            $nuevoequipo->cargador = (bool) $request->input('cargador');
            $nuevoequipo->bateria = (bool) $request->input('bateria');
            $nuevoequipo->bolsofunda = (bool) $request->input('bolsofunda');

            $nuevoequipo->save();






        // Parte que carga datos en base de datos OT

         $nuevaorden = new Ot();

            //Comprueba si ya hay una orden de trabajo, si no existe, pone 1 mas del determinado manualmente por $ultimaOT
            //Si ya hay un registro, se fija cual es la ultima orden y suma 1

            $compruebaultimaOT=Ot::latest()->first();

            if($compruebaultimaOT===Null){

                $ultimaOT=6100;
                $nuevaorden->ot_id = $ultimaOT+1;
            }else{

            $ultimaOT=Ot::latest()->first()->ot_id;
            $nuevaorden->ot_id = $ultimaOT+1;

            }

            //Carga en el array $nuevaorden del resto de los campos

            $nuevaorden->cliente_id = $request->input('idclient');
            $nuevaorden->detalles = $request->input('detalles');
            $nuevaorden->sintoma = $request->input('sintoma');
            $nuevaorden->fechaingreso = $request->input('fechaingreso');
            $nuevaorden->fechaentrega = $request->input('fechaentrega');
            $nuevaorden->sucursal_id = $request->input('sucursal');
            $nuevaorden->estado_id = $request->input('estado');
            $nuevaorden->confirmacion_id = $request->input('confirmacion');
            $nuevaorden->area_id = $request->input('area');
            $nuevaorden->repuesto_id = $request->input('necesitarepuesto');
            $nuevaorden->presupuesto = $request->input('Presupuesto');
            $nuevaorden->passwordot = $request->input('passwordot');
            $nuevaorden->user_id = $request->input('nombretecnico');






            //Asocia el id de equipo con el correspondiente de OT
            $nuevaorden->equipo_id = $nuevoequipo->id;



            //PASOS CONSULTA DE PINCODE
            $tecnicopin = $request->input('pincode'); //Obtengo pincode de formulario
            $tecnico = DB::table('users')->where('pincode', $tecnicopin)->first(); //hago consulta a BD para saber cual es el ID usuario al que corresponde el pin
            $nuevaorden->recibidopor_id = $tecnico->name; //Asocio el id del usuario para grabar en la orden quien la hizo






            //Guarda el array
            $nuevaorden->save();


            //Mando al view la info de ot

            Mail::to($nuevaorden->cliente->mail)->queue(new mailingreso($nuevaorden));

            $orden=$nuevaorden;


            //Descarga PDF

            $pdf = \PDF::loadView('pdf.pdfcargaot', compact('orden'));

        return $pdf->stream();

        //Arma la variable $orders para pasarla a la lista (idem que en el index) para poder abrir la lista de ordenes luego de guardar

            //$orders=Ot::all();



    }








    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {




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
        $updateorden=Ot::findOrFail($id);

        $updateorden->estado_id = $request->input('estadoorden');
        $updateorden->area_id = $request->input('categoriaorden');
        $updateorden->reparaexito_id = $request->input('reparadoorden');
        $updateorden->user_id = $request->input('tecnicoorden');
        $updateorden->fechaentrega = $request->input('fechaentregaorden');
        $updateorden->presupuesto = $request->input('presupuestoorden');

        $updateorden->save();

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

    public function anotaciones($ot_id){

        $anotacionOt=Ot::where('ot_id',$ot_id)->firstOrFail();
        $anotaciones=$anotacionOt->annotation;
        $anotaciones = $anotaciones->sortByDesc('id');
        $estados = estado::all();
        $reparados = Reparaexito::all();
        $categorias = Categoria::all();
        $areas = area::all();
        $tecnicos = User::all();
        $tipodeequipos = tipodeequipo::all();

        return view ("ordenes.anotaciones", compact ("anotacionOt","estados", "reparados", "categorias", "anotaciones", "areas", "tecnicos", "tipodeequipos"));
    }




    //ESTAS SON FUNCIONES DE CONTROLADOR PARA QUE EL CLIENTE PUEDA VER EL ESTADO DE SU ORDEN

    //Funcion para la consulta

    public function estadodeorden(){


        return view ("ordenes.estadodeorden");


    }


    //Obtiene parametros de "estadoconsulta" y va a consultaorden para que lleve a la pagina de informacion de la orden


    public function consultaorden(Request $request){


        $validator = \Validator::make($request->all(), [
            'ot_id' => 'required',
            'passwordot' => 'required|exists:ots,passwordot',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        //PARA VALIDAR QUE OT Y PASSWORD ESTAN BIEN
        //Obtenemos de campos ot_id y passwordot de view estadodeorden
        $otconsultada = $request->input('ot_id');
        $passwordconsultado = $request->input('passwordot');

        //hacemos consulta cuando se cumplan ambas condiciones
        $orden=Ot::where('ot_id',$otconsultada)
                  ->where('passwordot',$passwordconsultado)
                    ->firstOrFail();




        //PARA OBTENER LISTA DE ANOTACIONES VISIBLES CORRESPONDIENTES A LA OT
        $anotacionOt=Annotation::where('ot_id', '=', $orden->ot_id)
                                ->where('visiblecliente', '=', 1)
                                ->orderby('id', 'desc')
                                ->get();


        //Para completar informacion a mostrar
        $estados = estado::all();
        $reparados = Reparaexito::all();
        $categorias = Categoria::all();
        $areas = area::all();

        return view ("ordenes.consultaorden", compact ("orden", "anotacionOt", "estados","reparados", "categorias", "areas"));
    }
    public function showpdf($ot_id)
    {


        $orden=Ot::where('ot_id',$ot_id)->firstOrFail();
        $pdf = \PDF::loadView('pdf.pdfcargaot', compact('orden'));

        return $pdf->stream();


    }
    public function panel($user_id)
    {

        $user=User::where('id', '=',$user_id)->firstOrFail();

        $orders=Ot::where('user_id',$user_id)->get();

        $userid=$user->id;

        $annotations=DB::table('annotations')
            ->join('ots', 'ots.ot_id', '=', 'annotations.ot_id')
            ->select('annotations.anotacion', 'annotations.created_at','annotations.ot_id', 'ots.user_id')
            ->where('ots.user_id','=',$userid)
            ->get();


        /*$annotations = Annotation::wherehas(['ot' => function($query) use ($userid) {
            $query->where('user_id','=',$userid);
        }])->get();
        */



        return view ("ordenes.panelusuario", compact ('orders', 'user', 'annotations'));


    }

    public function listausuarios()
    {
        $users=User::all();

        return view('layouts.layoutsecciones', compact('users'));
    }

}
