<?php

namespace App\Http\Controllers;




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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {



        $orders=Ot::all();

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
        $fechaentrega=now()->addDays(2);
        $tipoequipos= tipodeequipo::all();






        return view('ordenes.cargaot', compact('tecnicos','estadoderepuestos', 'confirmacions', 'estados', 'sucursales', 'fechaentrega', 'areas', 'tipoequipos'));
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

            $nuevaorden->cliente_id = $request->input('idcliente');
            $nuevaorden->detalles = $request->input('detalles');
            $nuevaorden->sintoma = $request->input('sintoma');
            $nuevaorden->fechaingreso = $request->input('fechaingreso');
            $nuevaorden->fechaentrega = $request->input('fechaentrega');
            $nuevaorden->sucursal_id = $request->input('sucursal');
            $nuevaorden->estado_id = $request->input('estado');
            $nuevaorden->confirmacion_id = $request->input('confirmacion');
            $nuevaorden->area_id = $request->input('area');
            $nuevaorden->estadorepuesto_id = $request->input('necesitarepuesto');
            $nuevaorden->presupuesto = $request->input('Presupuesto');








            //Asocia el id de equipo con el correspondiente de OT
            $nuevaorden->equipo_id = $nuevoequipo->id;



            //PASOS CONSULTA DE PINCODE
            $tecnicopin = $request->input('pincode'); //Obtengo pincode de formulario
            $tecnico = DB::table('users')->where('pincode', $tecnicopin)->first(); //hago consulta a BD para saber cual es el ID usuario al que corresponde el pin
            $nuevaorden->user_id = $tecnico->id; //Asocio el id del usuario para grabar en la anotacion



            //Guarda el array
            $nuevaorden->save();


            //Arma la variable $orders para pasarla a la lista (idem que en el index) para poder abrir la lista de ordenes luego de guardar

            $orders=Ot::all();

            return view('ordenes.listaot', compact('orders'));
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

    public function anotaciones($ot_id){

        $anotacionOt=Ot::where('ot_id',$ot_id)->firstOrFail();
        $anotaciones=$anotacionOt->annotation;
        $estados = estado::all();
        $reparados = Reparaexito::all();
        $categorias = Categoria::all();
        $areas = area::all();
        return view ("ordenes.anotaciones", compact ("anotacionOt","estados", "reparados", "categorias", "anotaciones", "areas"));
    }

    /*public function cargaranotacion($ot_id){

        $anotacionOt=Ot::where('ot_id',$ot_id)->firstOrFail();
        $anotaciones=$anotacionOt->annotation;

        return view ("anotaciones.create", compact ("anotacionOt", "anotaciones"));
    }*/

}
