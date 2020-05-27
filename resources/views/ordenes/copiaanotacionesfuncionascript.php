@extends('layouts.layoutsecciones')

@section('content')








    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->







        <div class="container-fluid">


        <div class="row">



            <!-- Informacion de Orden -->

            <div class="col-md-6">

                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Orden Nº <b>{{$anotacionOt->ot_id}}</b></h3>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse" ><i class="fas fa-plus"></i>
                            </button>

                        </div>
                    </div>
                    <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <label for="estadoot">ESTADO</label>
                                                <input type="text" id="estadoot" class="form-control" value="{{$anotacionOt->estado->estadoot}}" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Categoria">Categoria</label>
                                            <input type="text" id="Categoria" class="form-control" value="{{$anotacionOt->area->areas}}" readonly>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Sucursal">Sucursal</label>
                                                <input type="text" id="Sucursal" class="form-control" value="{{$anotacionOt->sucursal->sucursal}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="passwordot">Pasword Orden</label>
                                            <input type="text" id="passwordot" class="form-control" value="{{$anotacionOt->passwordot}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="reparadoconexito">Reparado</label>
                                                <input type="text" id="reparadoconexito" class="form-control" value="{{$anotacionOt->reparaexito->reparadoconexito}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="categoriareparacion">Categoria Reparacion</label>
                                                <input type="text" id="categoriareparacion" class="form-control" value="{{$anotacionOt->categoria->categoriareparacion}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputName">Tecnico a Cargo</label>
                                                <input type="text" id="Tecnico" class="form-control" value="{{$anotacionOt->user->name}}" readonly>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Detalles">Detalles / Marcas / Roturas</label>
                                            <textarea id="Detalles" class="form-control" rows="4" readonly>{{$anotacionOt->detalles}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Sintoma">Sintomas / Reparaciones</label>
                                            <textarea id="Sintoma" class="form-control" rows="4" readonly>{{$anotacionOt->sintoma}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Presupuesto">Presupuesto</label>
                                            <input type="number" id="Presupuesto" class="form-control" value="{{$anotacionOt->presupuesto}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaingreso">Fecha de Ingreso</label>
                                            <input type="date" id="fechaingreso" class="form-control" value="{{$anotacionOt->fechaingreso}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaentrega">Fecha de Entrega</label>
                                            <input type="date" id="fechaentrega" class="form-control" value="{{$anotacionOt->fechaentrega}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="encargadorecepcion">Encargado Recepcion</label>
                                            <input type="text" id="encargadorecepcion" class="form-control" value="{{$anotacionOt->recibidopor_id}}" readonly>
                                        </div>
                                    </div>
                                </div>


                        <!-- Boton modal para edicion de orden -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".editaorden"><b>Editar</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>




           @include('modalformularios.modalupdateorden')







            <!-- Informacion de cliente -->

            <div class="col-md-6">

                <div class="card card-info  collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Cliente</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Apellido">Apellido</label>
                                        <input type="text" id="Apellido" class="form-control" value="{{$anotacionOt->cliente->apellido}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" id="Nombre" class="form-control" value="{{$anotacionOt->cliente->nombre}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="number" id="Celular" class="form-control" value="{{$anotacionOt->cliente->telefono}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Telefono">Telefono</label>
                                        <input type="number" id="Telefono" class="form-control" value="{{$anotacionOt->cliente->celular}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Mail">Mail</label>
                                        <input type="email" id="Mail" class="form-control" value="{{$anotacionOt->cliente->mail}}" readonly>
                                    </div>
                            </div>
                        </div>


                        <!-- Boton modal para edicion de cliente -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".editacliente"><b>Editar</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            @include('modalformularios.modalupdatecliente')













            <!-- Informacion de equipo -->

                <div class="card card-info  collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Equipo</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Categoria">Categoria</label>
                                        <input type="text" id="Categoria" class="form-control" value="{{$anotacionOt->equipo->tipodeequipo->tipodeequipo}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Modelo">Modelo</label>
                                        <input type="text" id="Modelo" class="form-control" value="{{$anotacionOt->equipo->modelo}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="text" id="Password" class="form-control" value="{{$anotacionOt->equipo->password}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Cargador">Cargador</label>
                                        <input type="text" id="Cargador" class="form-control"

                                        @if($anotacionOt->equipo->cargador == 0)
                                        value= 'Sin cargador'
                                        @else
                                        value= 'Con cargador'
                                        @endif readonly>

                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Bateria">Bateria</label>
                                        <input type="text" id="Bateria" class="form-control readonly"

                                        @if($anotacionOt->equipo->bateria == 0)
                                       value= 'Sin bateria'
                                        @else
                                       value= 'Con bateria'
                                        @endif readonly>


                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bolsofunda">Bolso o Funda</label>
                                        <input type="text" id="bolsofunda" class="form-control"

                                                @if($anotacionOt->equipo->bolsofunda == 0)
                                                    value= 'Sin bolso/funda'
                                                @else
                                                    value='Con bolso/funda'
                                                @endif readonly>

                                    </div>
                            </div>
                        </div>



                        <!-- Boton modal para edicion de equipo -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".editaequipo"><b>Editar</b>
                                </button>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>


        @include('modalformularios.modalupdateequipo')





            <!-- SECCION ANOTACIONES -->




            <!-- /.Boton carga anotacion nueva (acciona modal) -->
            <div class="col-md-3">



                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".anotacionot" id="open">
                    <b>Cargar Anotacion</b>
                </button>
            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-3">

            </div>

            <div class="col-md-3">

            </div>


        </div>






    <!-- /.Modal que se acciona para carga de anotaciones -->

    <div class="modal fade anotacionot" tabindex="-1" role="document" aria-labelledby="anotacionot" aria-hidden="true" id="anotacionot">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="alert alert-danger" style="display:none"></div>
                <div class="card card-warning">
                    <form METHOD="post" action="{{ route('annotations.store') }}" class="form-horizontal" autocomplete="off">
                    {{csrf_field()}}

                    <!-- Seccion Titular -->




                        <div class="card-header">
                            <h3 class="card-title"><b>Ingresar a Orden de Trabajo</b></h3>
                        </div>



                        <!-- Seccion contenido Anotacion> -->

                        <div class="card-body">

                            <div class="form-group" style="display: none">
                                <label for="orden">Orden de Trabajo</label>

                                <input name="orden" id="orden" type="text" class="form-control" value="{{$anotacionOt->ot_id}}">


                            </div>

                            <div class="form-group">
                                <label for="visiblecliente">Aviso a cliente</label>


                                <select name="visiblecliente" id="visiblecliente" class="form-control" placeholder="" required>
                                    <option value="No visible" selected>No visible a cliente</option>
                                    <option value="Visible">Visible a cliente</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="cambioorden">Cambiar estado</label>

                                <select name="cambioorden" id="cambioorden" class="form-control" required>
                                    <option selected value="{{$anotacionOt->estado['id']}}">{{ $anotacionOt->estado['estadoot']}}</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado['id'] }}">{{ $estado['estadoot'] }}</option>
                                    @endforeach

                                </select>


                            </div>




                            <div class="form-group" style="display: none" id="opcionescliente" name="opcionescliente">
                                <label for="opcionesavisocliente">Tipo de aviso</label>


                                <select name="opcionesavisocliente" id="opcionesavisocliente" class="form-control" placeholder="" required>
                                    <option value="En blanco">Personalizado</option>
                                    <option value="Presupuesto listo">Presupuesto listo</option>
                                    <option value="Listo para entregar">Listo para entregar</option>
                                </select>

                            </div>

                            <div class="form-group" id="infopresupuesto" name="infopresupuesto">
                                <div class="form-group">
                                    <label for="presupuestoenviado">Presupuesto</label>
                                    <input name="presupuestoenviado" id="presupuestoenviado" type="text" class="form-control" value="{{$anotacionOt->presupuesto}}">
                                </div>

                                <div class="form-group">
                                    <label for="fechaentregaenviada">Fecha reparación aproximada</label>
                                    <input name="fechaentregaenviada" id="fechaentregaenviada" type="date" class="form-control" value="{{$anotacionOt->fechaentrega}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="anotacion">Anotacion</label>

                                <textarea class="form-control" rows="4" placeholder="Anotacion ..." name="anotacion" id="anotacion"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="tecnico_id">Pincode</label>

                                <input name="pincode" id="pincode" type="password" class="form-control" placeholder="Pin ...">


                            </div>






                            <!-- Botones de Formulario -->
                            <div class="card-footer">

                                <button  class="btn btn-info" id="ajaxSubmit">Ingresar</button>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /.FIN de modal que se acciona de carga de anotaicones -->




                    <!-- /.Tabla listado de anotaciones -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                        <div class="col-md-12">

                                <div class="card-body table-responsive p-0" style="height:600px">
                                    <table class="table table-head-fixed text-nowrap">



                                        <thead>
                                        <tr>
                                            <th style="width: 15.00%">Fecha</th>
                                            <th style="width: 70.00%">Anotacion</th>
                                            <th style="width: 15.00%">Usuario</th>



                                        </tr>
                                        </thead>
                                        <tbody>


                                                @foreach($anotaciones as $anotacion)
                                        <tr
                                                    @if(isset($anotacion->cliente_id) && $anotacion->visiblecliente == 1) bgcolor="#ffb6c1"
                                                    @elseif(isset($anotacion->user_id) && ($anotacion->visiblecliente == 1)) bgcolor="#8fbc8f"
                                                    @elseif(isset($anotacion->user_id) && ($anotacion->visiblecliente == 0)) bgcolor="#d3d3d3"

                                                    @endif>
                                            <td style="width: 15.00%">{{$anotacion->created_at}}</td>
                                            <td style="white-space: normal;width: 70.00%;word-wrap: break-word">{{$anotacion->anotacion}}</td>

                                            <!-- /.COMBINA la columna user_id (de tecnicos) y cliente_id (de cliente) en una sola columna -->

                                            <td style="width: 15.00%">@if(!isset($anotacion->user_id))
                                                            {{$anotacion->cliente->nombre}}
                                                            @else
                                                            {{$anotacion->user->name}}
                                                            @endif</td>

                                        </tr>
                                                @endforeach


                                        </tbody>

                                    </table>
                                </div>
                        </div>
                    </div>


                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->


        </div><!-- /.container-fluid -->

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




@endsection


@section("scriptextra")
    <script>

        $(function() {
            $('#opcionescliente').hide();
            $('#visiblecliente').change(function(){
                if($('#visiblecliente').val() == 'Visible') {
                    $('#opcionescliente').show();
                } else {
                    $('#opcionescliente').hide();
                }
            });
        });


    </script>

    <script>

        $(function() {
            $('#infopresupuesto').hide();
            $('#opcionesavisocliente').change(function(){
                if($('#opcionesavisocliente').val() == 'Presupuesto listo') {
                    $('#infopresupuesto').show();
                } else {
                    $('#infopresupuesto').hide();
                }
            });
        });


    </script>

    <script>

        $(function() {
            $('#opcionesavisocliente').change(function(){
                if($('#opcionesavisocliente').val() == 'Presupuesto listo') {
                    $('#anotacion').val("--AVISO DE SISTEMA-- \n" +
                        "Diagnostico y/o presupuesto de su equipo Orden de Trabajo Nº {{$anotacionOt->ot_id}} estan listos. \n" +
                        "Fecha de reparación aproximada: {{$anotacionOt->fechaentrega}} \n" +
                        "Presupuesto de reparación: $ {{$anotacionOt->presupuesto}}  \n" );
                } if($('#opcionesavisocliente').val() == 'Listo para entregar') {
                    $('#anotacion').val("--AVISO DE SISTEMA-- \n" +
                        "Hola {{$anotacionOt->cliente->nombre}}!! \n" +
                        "Te informamos que tu equipo Orden de Trabajo Nº {{$anotacionOt->ot_id}} esta listo para ser retirado. \n" +
                        "Nuestros horarios son: Lunes a Viernes de 10 a 14 y 16 a 21hs. \n" +
                        "Te esperamos!! \n")

                } if($('#opcionesavisocliente').val() == 'En blanco') {
                $('#anotacion').val("");
            }
            });
        });

        $(function() {
            $('#presupuestoenviado').change(function () {
                $('#anotacion').val("--AVISO DE SISTEMA-- \n" +
                    "Diagnostico y/o presupuesto de su equipo Orden de Trabajo Nº {{$anotacionOt->ot_id}} estan listos. \n" +
                    "Fecha de reparación aproximada: " + $('#fechaentregaenviada').val() +"\n" +
                    "Presupuesto de reparación: $ " + $('#presupuestoenviado').val() +"\n");
            });
        });

        $(function() {
            $('#fechaentregaenviada').change(function () {
                $('#anotacion').val("--AVISO DE SISTEMA-- \n" +
                    "Diagnostico y/o presupuesto de su equipo Orden de Trabajo Nº {{$anotacionOt->ot_id}} estan listos. \n" +
                    "Fecha de reparación aproximada: " + $('#fechaentregaenviada').val() +"\n" +
                    "Presupuesto de reparación: $ " + $('#presupuestoenviado').val() +"\n");
            });
        });
    </script>

    <!-- SCRIPT PARA VALIDACION DE MODAL -->
    <script>
        jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ route('annotations.store') }}",
                    method: 'post',
                    data: {
                        orden: jQuery('#orden').val(),
                        anotacion: jQuery('#anotacion').val(),
                        pincode: jQuery('#pincode').val(),
                        visiblecliente: jQuery('#visiblecliente').val(),
                        presupuestoenviado: jQuery('#presupuestoenviado').val(),
                        fechaentregaenviada: jQuery('#fechaentregaenviada').val(),
                        cambioorden: jQuery('#cambioorden').val(),

                    },
                    success: function(result){
                        if(result.errors)
                        {
                            jQuery('.alert-danger').html('');

                            jQuery.each(result.errors, function(key, value){
                                jQuery('.alert-danger').show();
                                jQuery('.alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                        else
                        {
                            jQuery('.alert-danger').hide();
                            jQuery('.anotacionot').hide();
                            location.reload();
                        }
                    }});
            });
        });
    </script>


    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>


@endsection
