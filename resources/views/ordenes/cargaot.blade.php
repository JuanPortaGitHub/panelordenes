@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->





            <div class="col-md-12">

            <!-- Boton modal carga cliente -->

    @include('modalformularios.modalcargacliente')




        <p></p>






        <!-- FORMULARIO DE CARGA OT -->

        <section class="content">

            <form METHOD="post" action="{{ route('ordenes.store') }}" class="form-horizontal">
            {{csrf_field()}}


                <div class="row">
                    <div class="col-md-6">
            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Cliente</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">


                        <div class="form-group row">
                            <label for="busquedacliente" class="col-sm-2 col-form-label">Buscar Cliente</label>
                            <div class="col-sm-10">
                                <input name="busquedacliente" id="busquedacliente" type="text" class="form-control" placeholder="Busca por apellido de cliente ...">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-10">
                                <input name="apellidocliente" id="apellidocliente" type="text" class="form-control" placeholder="Apellido ..." readonly required>

                            </div>
                        </div>
                        <div class="form-group row" style="display: none">
                            <label for="idclient" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input name="idclient" id="idclient" type="text" class="form-control" placeholder="ID ..." required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input name="nombrecliente" id="nombrecliente" type="text" class="form-control" placeholder="Nombre ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input name="celularcliente" id="celularcliente" type="text" class="form-control" placeholder="Celular ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input name="telefonocliente" id="telefonocliente" type="text" class="form-control" placeholder="Telefono ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mailcliente" class="col-sm-2 col-form-label">Mail</label>
                            <div class="col-sm-10">
                                <input name="mailcliente" id="mailcliente" type="email" class="form-control" placeholder="Mail ..." readonly required>
                            </div>
                        </div>


                        <!-- Boton modal para edicion de equipo -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargacliente"><b>Carga cliente nuevo</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- Cierra boton modal carga cliente -->

                </div>




                <div class="card card-warning">
                    <!-- Seccion Titular Equipo -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"><b>Datos Equipo</b></h3>
                        </div>
                    </div>

                    <!-- Seccion datos Equipo -->
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="tipodeequipo" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">

                                <select name="tipodeequipo" class="form-control" placeholder="Presupuestar o Confirmada ..." required>
                                    <option value=""></option>
                                    @foreach ($tipoequipos as $tipoequipo)
                                        <option value="{{ $tipoequipo['id'] }}">{{ $tipoequipo['tipodeequipo'] }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="modeloequipo" class="col-sm-2 col-form-label">Modelo Equipo</label>
                            <div class="col-sm-10">
                                <input name="modeloequipo" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordequipo" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="passwordequipo" type="text" class="form-control" placeholder="Ingresar contraseña del equipo" required>
                            </div>
                        </div>
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input name="cargador" type="checkbox" class="form-check-input" id="cargador">
                                <label class="form-check-label" for="cargador">Cargador</label>
                            </div>
                            <div class="form-check">
                                <input name="bateria" type="checkbox" class="form-check-input" id="bateria">
                                <label class="form-check-label" for="bateria">Bateria</label>
                            </div>
                            <div class="form-check">
                                <input name="bolsofunda" type="checkbox" class="form-check-input" id="bolsofunda">
                                <label class="form-check-label" for="bolsofunda">Bolso o Funda</label>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                </div>

                <div class="row">

                <div class="col-md-6">

                <div class="card card-warning">
                    <!-- Seccion Titular Orden de Trabajo -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"><b>Datos Reparacion</b></h3>
                        </div>
                    </div>

                    <!-- Seccion datos Orden de trabajo -->
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="sucursal" class="col-sm-2 col-form-label">Sucursal</label>
                            <div class="col-sm-10">
                                <select name="sucursal" id="sucursal" class="form-control" placeholder="Sucursal ..." required>
                                    <option value=""></option>
                                    @foreach ($sucursales as $sucursal)
                                        <option value="{{ $sucursal['id'] }}">{{ $sucursal['sucursal'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="area" class="col-sm-2 col-form-label">Area Reparacion</label>
                            <div class="col-sm-10">
                                <select name="area" id="area" class="form-control" placeholder="Indicar si corresponde a hardware o software ..." required>
                                    <option value=""></option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}">{{ $area['areas'] }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombretecnico1" class="col-sm-2 col-form-label">Tecnico Encargado</label>
                            <div class="col-sm-10">
                                <select name="nombretecnico" id="nombretecnico" class="form-control" placeholder="Indicar Tecnico a cargo ..." required>
                                    <option value=""></option>
                                    @foreach ($tecnicos as $tecnico)
                                        <option value="{{ $tecnico['id'] }}">{{ $tecnico['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="necesitarepuesto" class="col-sm-2 col-form-label">Repuesto</label>
                            <div class="col-sm-10">
                                <select name="necesitarepuesto" class="form-control" placeholder="Indicar si requiere de repuesto ..." required>

                                        <option value="{{ $estadoderepuestos[0]->id }}">{{ $estadoderepuestos[0]->estadoderepuesto }}</option>
                                        <option value="{{ $estadoderepuestos[1]->id }}">{{ $estadoderepuestos[1]->estadoderepuesto }}</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="detalles" class="col-sm-2 col-form-label">Detalles / Roturas / Marcas</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" placeholder="Detalles, roturas y marcas del equipo ..." name="detalles" required></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sintoma" class="col-sm-2 col-form-label">Sintomas / Diagnostico</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" placeholder="Sintoma y diagnostico de corresponder ..." name="sintoma" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="presupuesto" class="col-sm-2 col-form-label">Presupuesto</label>
                            <div class="col-sm-10">
                                <input name="Presupuesto" type="text" class="form-control" placeholder="Indicar presupuesto del trabajo ..." >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                                <select name="estado" class="form-control" placeholder="Indicar estado de la orden ..." required>

                                    <option value="{{ $estados[0]->id }}">{{ $estados[0]->estadoot }}</option>
                                    <option value="{{ $estados[1]->id }}">{{ $estados[1]->estadoot }}</option>
                                    <option value="{{ $estados[4]->id }}">{{ $estados[4]->estadoot }}</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fechaingreso" class="col-sm-2 col-form-label">Fecha Ingreso</label>
                            <div class="col-sm-10">
                                <input name="fechaingreso" type="datetime-local" class="form-control" value="{{now()->format('Y-m-d\TH:i')}}" readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fechaentrega" class="col-sm-2 col-form-label">Fecha Entrega</label>
                            <div class="col-sm-10">
                                <input name="fechaentrega" type="date" class="form-control" required value={{ $fechaentrega }} required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordot" class="col-sm-2 col-form-label">Contraseña Orden</label>
                            <div class="col-sm-10">
                                <input name="passwordot" type="text" class="form-control" value="{{ $passwordot }}" readonly required>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
                </div>


                    <!-- Boton de Carga de Orden. Llama a modal para carga de pin -->
                    <div class="card-footer">

                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargaot">
                            <b>Cargar Orden</b>
                        </button>
                        <button type="reset" class="btn btn-default float-right">Limpiar</button>
                    </div>









                <!-- Modal Carga de Pin -->
                <div class="modal fade cargaot" tabindex="-1" role="dialog" aria-labelledby="cargaot" aria-hidden="true" id="carga">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">



                                    <!-- Seccion contenido Anotacion> -->

                                    <div class="card-body" id="cargapin">



                                        <div class="form-group">
                                            <label for="anotacion">Ingrese PIN</label>

                                            <input name="pincode" id="pincode" type="password" class="form-control" required placeholder="...">

                                        </div>


                                        <!-- Botones de Formulario -->
                                        <div class="card-footer" >
                                            <button type="submit" class="btn btn-info" id="ajaxsubmit">Ingresar</button>

                                        </div>

                                    </div>
                            <div id="loading-screen" style="display: none; position: absolute; left: 50%; top: 50%;
                z-index: 1000;
                height: 80px;
                width: 80px;">
                                <img src="../adminlte/img/5-0.gif" height="40">
                                <b>Cargando...</b>
                            </div>



                        </div>
                    </div>
                </div>





            </form>
        </section>
            </div>
    </div>
            <!-- CIERRE DE FORMULARIO CARGA OT -->







    <!-- /.content-wrapper -->






@endsection


@section("scriptextra")








<!-- Script autocompletar campos cliente en base a apellido -->
<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

        $( "#busquedacliente" ).autocomplete({
            source: function( request, response ) {
                // Fetch data
                $.ajax({
                    url:"{{route('clientes.getClientes')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function( data ) {

                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                $('#busquedacliente').val(ui.item.label); // display the selected text
                $('#apellidocliente').val(ui.item.apellidocliente); // save selected id to input
                $('#idclient').val(ui.item.idclient); // save selected id to input
                $('#nombrecliente').val(ui.item.nombrecliente); // save selected id to input
                $('#celularcliente').val(ui.item.celularcliente); // save selected id to input
                $('#telefonocliente').val(ui.item.telefonocliente); // save selected id to input
                $('#mailcliente').val(ui.item.mailcliente); // save selected id to input
                return false;
            }

        });

    });
</script>
<script>

    $(document).ready(function() {

    $(function() {
        $('#area').change(function(){
            if($('#area').val() == '1'){
            $('#nombretecnico').val("7")


            }
        });
    });
    });


    $(function() {
        $('#area').change(function(){
            if($('#area').val() == '2'&&$('#sucursal').val() == '1') {
                $('#nombretecnico').val("8")
            }
                if($('#area').val() == '2'&&$('#sucursal').val() == '2'){
                    $('#nombretecnico').val("9")

            }
        });

    });

    $(function() {
        $('#sucursal').change(function(){
            if($('#area').val() == '1'){
                $('#nombretecnico').val("7")


            }
        });
    });


    $(function() {
        $('#sucursal').change(function(){
            if($('#area').val() == '2'&&$('#sucursal').val() == '1') {
                $('#nombretecnico').val("8")
            }
            if($('#area').val() == '2'&&$('#sucursal').val() == '2'){
                $('#nombretecnico').val("9")

            }
        });

    });



</script>


<script>
    jQuery(document).ready(function(){
        jQuery('#ajaxsubmit').click(function(e){
            $('#cargapin').hide();
            $('#loading-screen').show();


        });
    });
</script>


<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



@endsection








