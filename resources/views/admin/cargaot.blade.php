@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
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




            <!-- FORMULARIO COMPLETO ORDEN DE TRABAJO A CARGAR  -->

            <form class="form-horizontal">

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
                                        <input type="text" class="form-control" placeholder="ID Cliente ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Apellido ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Nombre ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Celular ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Telefono ..." >
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
                                        <input type="text" class="form-control" placeholder="ID Equipo ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="categoriaequipo" class="col-sm-2 col-form-label">Categoria</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Nombre ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Celular ..." >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Telefono ..." >
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
                            <!-- /.card-footer -->


            </form>
        <!-- /.Fin formulario datos equipo -->






             </form>
          <!-- /. FINAL FORMULARIO COMPLETO ORDEN DE TRABAJO A CARGAR -->












                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">General Elements</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Text Disabled</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Textarea Disabled</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- input states -->
                                <div class="form-group">
                                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                                        success</label>
                                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                                        warning</label>
                                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                                        error</label>
                                    <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">Checkbox</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <label class="form-check-label">Checkbox checked</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" disabled>
                                                <label class="form-check-label">Checkbox disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radio1">
                                                <label class="form-check-label">Radio</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radio1" checked>
                                                <label class="form-check-label">Radio checked</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" disabled>
                                                <label class="form-check-label">Radio disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select Disabled</label>
                                            <select class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Select Multiple</label>
                                            <select multiple class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select Multiple Disabled</label>
                                            <select multiple class="form-control" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- general form elements disabled -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Custom Elements</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                                                <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                                                <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                                <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                                                <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio3" disabled>
                                                <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Custom Select</label>
                                            <select class="custom-select">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Custom Select Disabled</label>
                                            <select class="custom-select" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- Select multiple-->
                                        <div class="form-group">
                                            <label>Custom Select Multiple</label>
                                            <select multiple class="custom-select">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Custom Select Multiple Disabled</label>
                                            <select multiple class="custom-select" disabled>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                        <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                        <label class="custom-control-label" for="customSwitch2">Disabled custom switch element</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customRange1">Custom range</label>
                                    <input type="range" class="custom-range" id="customRange1">
                                </div>
                                <div class="form-group">
                                    <label for="customRange1">Custom range (custom-range-danger)</label>
                                    <input type="range" class="custom-range custom-range-danger" id="customRange1">
                                </div>
                                <div class="form-group">
                                    <label for="customRange1">Custom range (custom-range-teal)</label>
                                    <input type="range" class="custom-range custom-range-teal" id="customRange1">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="customFile">Custom File</label> -->

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection



@section("scriptextra")


    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>



@endsection
