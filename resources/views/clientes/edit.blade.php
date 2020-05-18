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



            <div class="col-lg-4 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4><b>Editar Cliente</b> </h4>
                        <h4><b></b></h4>

                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>

                </div>
            </div>





        <!-- FORMULARIO DE CARGA CLIENTE -->

        <section class="content">

            <form METHOD="post" action="{{ route('clientes.update',$cliente->id) }}" class="form-horizontal" autocomplete="off">
            {{csrf_field()}}
            <!-- ESTO ES PARA EL UPDATE NOMAS -->
            @method('PUT')

            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Cliente</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->












                    <div class="card-body">

                        <i class="fas fa-edit"></i>

                        <div class="form-group row">
                            <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-10">
                                <input name="apellido" id="apellido" type="text" class="form-control" value="{{$cliente->apellido}}" >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input name="nombre" id="nombre" type="text" class="form-control" value="{{$cliente->nombre}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input name="celular" id="celular" type="text" class="form-control" value="{{$cliente->celular}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input name="telefono" id="telefono" type="text" class="form-control" value="{{$cliente->telefono}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mailcliente" class="col-sm-2 col-form-label">Mail</label>
                            <div class="col-sm-10">
                                <input name="mail" id="mail" type="email" class="form-control" value="{{$cliente->mail}}" >
                            </div>
                        </div>
                        <!-- Botones de Formulario -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Editar</button>
                            <button type="reset" class="btn btn-default float-right">Limpiar</button>
                        </div>
                    </div>
                </div>

            </form>

            <!-- CIERRE DE FORMULARIO CARGA OT -->

    </div>




    <!-- /.content-wrapper -->







@endsection


@section("scriptextra")

    <!-- DataTables -->
    <script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- page script -->

@endsection


