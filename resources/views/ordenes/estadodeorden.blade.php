@extends('layouts.layoutsecciones')

@section('content')






    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->







        <!-- FORMULARIO DE CONSULTA OT CLIENTE -->

        <section class="content">

            <form METHOD="get" action="{{ route('consultaorden') }}" class="form-horizontal" autocomplete="off">
            {{csrf_field()}}

            <!-- Seccion titular -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Estado Orden De trabajo</b></h3>
                    </div>


                    <!-- Seccion contenido -->

                    <div class="card-body">



                        <div class="form-group row">
                            <label for="ot_id" class="col-sm-2 col-form-label">Orden De Trabajo</label>
                            <div class="col-sm-10">
                                <input name="ot_id" id="ot_id" type="text" class="form-control" placeholder="Ingrese Nro de Orden ..." >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordot" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input name="passwordot" id="passwordot" type="text" class="form-control" placeholder="Ingrese Contraseña de Ingreso ..." >

                            </div>
                        </div>
                        <!-- Botones de Formulario -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Buscar</button>

                        </div>

                    </div>
                </div>

            </form>
        </section>
            <!-- CIERRE DE FORMULARIO CONSULTA OT -->

    </div>
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


@endsection


@section("scriptextra")


    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>


@endsection
