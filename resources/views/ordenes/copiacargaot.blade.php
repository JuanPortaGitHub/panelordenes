@extends('layouts.layoutsecciones')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Carga Orden de Trabajo</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


    <!-- Main content -->

        <section class="content">


            <!-- FORMULARIO COMPLETO ORDEN DE TRABAJO A CARGAR  -->

            <form class="form-horizontal" method="get" action="{{ url('/ordenes') }}">
            {{ csrf_field() }}
                            <!-- Columnas a la derecha para espaciado -->

               <div class="col-md-6">




                        <form class="form-horizontal">


                            <!-- Seccion Titular Cliente -->

                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Datos Cliente</b></h3>
                                </div>



                            <!-- Seccion contenido Cliente -->

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="idcliente" class="col-sm-2 col-form-label">ID</label>
                                        <div class="col-sm-10">
                                            <input name="idcliente" type="text" class="form-control" placeholder="ID Cliente ..." >

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                                        <div class="col-sm-10">
                                            <input name="apellidocliente" type="text" class="form-control" placeholder="Apellido ..."" >
                                            {{csrf_field()}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <input name="nombrecliente" type="text" class="form-control" placeholder="Nombre ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                                        <div class="col-sm-10">
                                            <input name="celularcliente" type="text" class="form-control" placeholder="Celular ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-10">
                                            <input name="telefonocliente" type="text" class="form-control" placeholder="Telefono ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mailcliente" class="col-sm-2 col-form-label">Mail</label>
                                        <div class="col-sm-10">
                                            <input name="mailcliente" type="email" class="form-control" placeholder="Mail ...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">dasd</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                                </div>
                            </div>
                            <!-- /.card-footer -->


                        </form>


                                <!-- /.Fin formulario dato cliente -->



                                </br>



                        <!-- Seccion Titular Equipos -->

                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title"><b>Datos Equipo</b></h3>
                            </div>



                            <!-- Seccion contenido Equipo -->

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="idequipo" class="col-sm-2 col-form-label">ID Equipo</label>
                                    <div class="col-sm-10">
                                        <input name="idequipo" type="text" class="form-control" placeholder="ID Equipo ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="categoriaequipo" class="col-sm-2 col-form-label">Categoria</label>
                                    <div class="col-sm-10">
                                        <input name="categoriaequipo" type="text" class="form-control" placeholder="Categoria Equipo ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="modeloequipo" class="col-sm-2 col-form-label">Marca / Modelo</label>
                                    <div class="col-sm-10">
                                        <input name="modeloequipo" type="text" class="form-control" placeholder="Modelo Equipo ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passwordequipo" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input name="passwordequipo" type="text" class="form-control" placeholder="Contraseña Sistema ...">
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



                                </br>

                                        <!-- Observaciones y detalles input -->

                                        <div class="form-group row">

                                            <label>Detalles / Roturas / Marcas</label>
                                            <textarea class="form-control" rows="3" placeholder="Detalles, roturas y marcas del equipo ..." name="detallesequipo"></textarea>

                                        </div>

                                <!-- Sintoma/Diagnostico -->
                                </br>
                                        <div class="form-group row">

                                            <label>Sintomas / Diagnostico</label>
                                            <textarea class="form-control" rows="3" placeholder="Sintoma y diagnstico de corresponder ..." name="diagnosticoequipo"></textarea>

                                        </div>


                                </br>

                                        <div class="container">
                                            <label>Fecha Recepcion</label>
                                            <div class="row">
                                                <div class='col-sm-6'>
                                                    <div class="form-group">
                                                        <div class='input-group date' id='datetimepicker1'>
                                                            <input name="fechaingreso" type='text' class="form-control" />
                                                            <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <script type="text/javascript">
                                                $(function () {
                                                    $('#datetimepicker1').datetimepicker();
                                                });
                                            </script>
                                             </div>
                                        </div>




                                        <div class="container">
                                            <label>Fecha Entrega Aproximada</label>
                                            <div class="row">
                                                <div class='col-sm-6'>
                                                    <div class="form-group">
                                                        <div class='input-group date' id='datetimepicker2'>
                                                            <input name="fechaentrega" type='text' class="form-control" />
                                                            <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $(function () {
                                                        $('#datetimepicker2').datetimepicker();
                                                    });
                                                </script>
                                            </div>
                                        </div>



                                <div class="form-group row">
                                    <label for="presupuesto" class="col-sm-2 col-form-label">Presupuesto</label>
                                    <div class="col-sm-10">
                                        <input name="presupuesto" type="text" class="form-control" placeholder="Presupuesto" >
                                    </div>

                                </div>

                                <div class="row">
                                    <table><tr>
                                    <td><div class="col-sm-10">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Encargado Reparacion</label>
                                    </td>
                                    <td>
                                                <select name="tecnico" class="custom-select">
                                                    <option>Christopher</option>
                                                    <option>Tomas</option>
                                                    <option>Pablo</option>
                                                    <option>Denis</option>
                                                    <option>Juan</option>
                                                </select>

                                 </div>
                                    </td>
                                </tr>
                            </div>
                                    </table>
                            </div>
                </div>

            </form>
        <!-- /.Fin formulario datos equipo -->

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Ingresar</button>
                <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>


        </section>
    </div>
    <!-- /.content-wrapper -->

@endsection



@section("scriptextra")


    <!-- jQuery -->
    <script src="../../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../adminlte/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../adminlte/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>



@endsection
