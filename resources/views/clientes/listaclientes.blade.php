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



        <!-- CARGA DE CLIENTE NUEVO -->


        <!-- BOTON CARGA CLIENTE NUEVO -->






            <div class="col-lg-4 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <a href="#cargacliente" data-toggle="modal" data-target=".cargacliente">
                        <div class="inner">
                            <h4><b>Agregar Cliente</b> </h4>
                            <h4><b></b></h4>

                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </a>
                </div>
            </div>






            <!-- FORMULARIO DE CARGA CLIENTE (EN MODAL)-->

        @include('modalformularios.modalcargacliente')

                <!-- CIERRE DE FORMULARIO CARGA CLIENTE -->



















        <!-- TABLA DE LISTADO DE CLIENTES -->

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Lista de clientes</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="listaclientes" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 90%" align="center">


                                    <th>Nro.</th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th class="all">Cond. IVA</th>
                                    <th>DNI / CUIT</th>
                                    <th>Celular</th>
                                    <th>Telefono</th>
                                    <th>Mail</th>
                                    <th>Deuda</th>
                                    <th>Modificar Datos</th>
                                </tr>
                                </thead>
                                <tbody>


                                @if($clientes)
                                    @foreach($clientes as $cliente)

                                <tr style="font-size: 80%" align="center">


                                    <td><b><a href="{{route('clientes.show', $cliente->id)}}">VER CUENTA</a></b></td>
                                    <td>{{$cliente->apellido}}</td>
                                    <td>{{$cliente->nombre}}</td>
                                    <td>{{$cliente->condiciondeiva->condicion}}</td>
                                    <td>{{$cliente->dnicuit}}</td>
                                    <td>{{$cliente->celular}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->mail}}</td>
                                    <td>
                                        @if($cliente->recibo->sum('monto')- $cliente->recibo->where('idformapago', '!=', 5)->sum('monto')- $cliente->recibo->where('idfactura', '==', Null)->sum('monto')!=0)

                                        {{$cliente->recibo->sum('monto')- $cliente->recibo->where('idformapago', '!=', 5)->sum('monto')- $cliente->recibo->where('idfactura', '==', Null)->sum('monto')}}

                                        @else 0
                                        @endif
                                    </td>
                                    <td><a href="{{route('clientes.edit', $cliente->id)}}"><i class="fas fa-edit"></i></a></td>

                                </tr>

                                    @endforeach

                                @endif


                                </tbody>
                                <tfoot>
                                <tr style="font-size: 90%" align="center">

                                    <th>Nro.</th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th>Cond. IVA</th>
                                    <th>DNI / CUIT</th>
                                    <th>Celular</th>
                                    <th>Telefono</th>
                                    <th>Mail</th>
                                    <th>Mail</th>
                                    <th></th>
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
                "language": {
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior",
                    },
                    "search": "Buscar:",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encuentra",
                    "info": "Muestra página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay anotaciones",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",

                },
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
