<!DOCTYPE html>

<html lang="es">
<head>


    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-ui-1.12.1/jquery-ui.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery-ui-1.12.1/jquery-3.5.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Starter</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/../adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/../adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

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




            <div class="col-lg-4 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4><b>Agregar Cliente</b> </h4>
                        <h4><b></b></h4>

                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>

                </div>
            </div>





        <!-- FORMULARIO DE CARGA CLIENTE -->

        <section class="content">

            <form METHOD="post" action="{{ route('clientes.store') }}" class="form-horizontal" autocomplete="off">
            {{csrf_field()}}

            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Cliente</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">



                        <div class="form-group row">
                            <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-10">
                                <input name="apellidocliente" id="apellidocliente" type="text" class="form-control" placeholder="Apellido ..." >

                            </div>
                        </div>
                        <div class="form-group row" style="display: none;">
                            <label for="idcliente" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input name="idcliente" id="idcliente" type="text" class="form-control" placeholder="ID ..." >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input name="nombrecliente" id="nombrecliente" type="text" class="form-control" placeholder="Nombre ..." >
                            </div>
                        </div>
                        <div class="form-group row">
                            <select name="condiva" id="condiva" class="form-control" required>
                                <option value=""></option>
                                @foreach ($condivas as $condiva)
                                    <option value="{{ $condivas['id'] }}">{{ $condivas['condicioniva'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input name="celularcliente" id="celularcliente" type="text" class="form-control" placeholder="Celular ..." >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input name="telefonocliente" id="telefonocliente" type="text" class="form-control" placeholder="Telefono ..." >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mailcliente" class="col-sm-2 col-form-label">Mail</label>
                            <div class="col-sm-10">
                                <input name="mailcliente" id="mailcliente" type="email" class="form-control" placeholder="Mail ..." >
                            </div>
                        </div>
                        <!-- Botones de Formulario -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Agregar</button>
                            <button type="reset" class="btn btn-default float-right">Limpiar</button>
                        </div>
                    </div>
                </div>

            </form>
        </section>

            <!-- CIERRE DE FORMULARIO CARGA OT -->

    </div>




    <!-- /.content-wrapper -->





</body>



    <!-- DataTables -->
    <script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- page script -->

