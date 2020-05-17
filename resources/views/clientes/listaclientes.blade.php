@extends('layouts.layoutsecciones')

@section('content')





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Listado Clientes</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->



        <!-- CARGA DE CLIENTE NUEVO -->


        <!-- BOTON CARGA CLIENTE NUEVO -->


        <a href="#clientenuevo" data-toggle="modal" data-target=".clientenuevo">



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
        </a>





            <!-- FORMULARIO DE CARGA CLIENTE (EN MODAL)-->

        <div class="modal fade clientenuevo" tabindex="-1" role="dialog" aria-labelledby="clientenuevo" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">


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
                                            <button type="submit" class="btn btn-info">Ingresar</button>
                                            <button type="reset" class="btn btn-default float-right">Limpiar</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                </div>
            </div>
        </div>

                <!-- CIERRE DE FORMULARIO CARGA OT -->



















        <!-- TABLA DE LISTADO DE CLIENTES -->

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="listaclientes" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 90%" align="center">

                                    <th></th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th>Celular</th>
                                    <th>Telefono</th>
                                    <th>Mail</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($clientes)
                                    @foreach($clientes as $cliente)

                                <tr style="font-size: 80%" align="center">

                                    <td><a href="{{route('clientes.edit', $cliente->id)}}"><i class="fas fa-edit"></i></a></td>
                                    <td>{{$cliente->apellido}}</td>
                                    <td>{{$cliente->nombre}}</td>
                                    <td>{{$cliente->celular}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->mail}}</td>


                                </tr>

                                    @endforeach

                                @endif


                                </tbody>
                                <tfoot>
                                <tr style="font-size: 90%" align="center">
                                    <th></th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th>Celular</th>
                                    <th>Telefono</th>
                                    <th>Mail</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




@endsection


@section("scriptextra")

    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>

    <!-- DataTables -->
    <script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- page script -->
    <script>
        $(function () {
            $("#listaclientes").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            /*$('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });*/
        });
    </script>
@endsection
