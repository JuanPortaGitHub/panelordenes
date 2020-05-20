@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->


        <!-- Cuadro acceso agregar cliente -->


        <div class="col-lg-3 col-6">





                <!-- small card -->
                <div class="small-box bg-warning">
                    <a href="{{ URL::route('clientes.create')}}"
                                                      onclick="window.open(this.href,'targetWindow',
                                   `toolbar=no,
                                    location=no,
                                    status=no,
                                    menubar=no,
                                    scrollbars=yes,
                                    resizable=yes,
                                    width=400,
                                    height=770`);
                                    return false;">
                    <table>
                        <tr>
                            <td>
                                <h4><b>Agregar Cliente</b> </h4>
                            </td>
                            <td>
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </td>
                        </tr>
                    </table>





                    </a>
                </div>


        </div>
        <!-- Cierra cuadro acceso agregar cliente -->



        <!-- FORMULARIO DE CARGA OT -->

        <section class="content">

            <form METHOD="post" action="{{ route('ordenes.store') }}" class="form-horizontal">
            {{csrf_field()}}

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
                        <div class="form-group row" style="display: none;">
                            <label for="idcliente" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input name="idcliente" id="idcliente" type="text" class="form-control" placeholder="ID ...">

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

                    </div>



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
                                <input name="modeloequipo" type="text" class="form-control" placeholder="Modelo Equipo ..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordequipo" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="passwordequipo" type="text" class="form-control" placeholder="Password ..." required>
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
                                <select name="sucursal" class="form-control" placeholder="Sucursal ..." required>
                                    <option value=""></option>
                                    @foreach ($sucursales as $sucursal)
                                        <option value="{{ $sucursal['id'] }}">{{ $sucursal['sucursal'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirmacion" class="col-sm-2 col-form-label">Confirmacion</label>
                            <div class="col-sm-10">
                                <select name="confirmacion" class="form-control" placeholder="Presupuestar o Confirmada ..." required>
                                    <option value=""></option>
                                    @foreach ($confirmacions as $confirmacion)
                                        <option value="{{ $confirmacion['id'] }}">{{ $confirmacion['estadoconfirmacion'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                                <select name="estado" class="form-control" placeholder="Indicar Estado de la Orden ..." required>
                                    <option value=""></option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado['id'] }}">{{ $estado['estadoot'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="area" class="col-sm-2 col-form-label">Area Reparacion</label>
                            <div class="col-sm-10">
                                <select name="area" class="form-control" placeholder="Indicar Hardware o Software ..." required>
                                    <option value=""></option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}">{{ $area['areas'] }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombretecnico" class="col-sm-2 col-form-label">Tecnico Encargado</label>
                            <div class="col-sm-10">
                                <select name="nombretecnico" class="form-control" placeholder="Indicar Tecnico a cargo ..." required>
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
                                <select name="necesitarepuesto" class="form-control" placeholder="Indicar repuesto ..." required>
                                    <option value=""></option>
                                    @foreach ($estadoderepuestos as $estadoderepuesto)
                                        <option value="{{ $estadoderepuesto['id'] }}">{{ $estadoderepuesto['estadoderepuesto'] }}</option>
                                    @endforeach
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
                                <input name="Presupuesto" type="number" class="form-control" placeholder="Presupuesto ..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fechaingreso" class="col-sm-2 col-form-label">Fecha Ingreso</label>
                            <div class="col-sm-10">
                                <input name="fechaingreso" type="datetime-local" class="form-control" value="{{now()->format('Y-m-d\TH:i')}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fechaentrega" class="col-sm-2 col-form-label">Fecha Entrega</label>
                            <div class="col-sm-10">
                                <input name="fechaentrega" type="date" class="form-control" value="{{ $fechaentrega }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordot" class="col-sm-2 col-form-label">Contraseña Orden</label>
                            <div class="col-sm-10">
                                <input name="passwordot" type="text" class="form-control" value="{{ $passwordot }}" readonly required>
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
                </div>








                <!-- Modal Carga de Pin -->
                <div class="modal fade cargaot" tabindex="-1" role="dialog" aria-labelledby="cargaot" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">



                                    <!-- Seccion contenido Anotacion> -->

                                    <div class="card-body">



                                        <div class="form-group">
                                            <label for="anotacion">Ingrese PIN</label>

                                            <input name="pincode" id="pincode" type="password" class="form-control" placeholder="Pin ...">

                                        </div>


                                        <!-- Botones de Formulario -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info">Ingresar</button>

                                        </div>
                                    </div>




                        </div>
                    </div>
                </div>





            </form>

            <!-- CIERRE DE FORMULARIO CARGA OT -->




    </section>
    </div>

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
                $('#idcliente').val(ui.item.idcliente); // save selected id to input
                $('#nombrecliente').val(ui.item.nombrecliente); // save selected id to input
                $('#celularcliente').val(ui.item.celularcliente); // save selected id to input
                $('#telefonocliente').val(ui.item.telefonocliente); // save selected id to input
                $('#mailcliente').val(ui.item.mailcliente); // save selected id to input
                return false;
            }

        });

    });
</script>

<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



@endsection








