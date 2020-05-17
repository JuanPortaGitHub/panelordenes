@extends('layouts.layout')

@section('content')





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Listado Ordenes de Trabajo</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="listaordenes" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 90%" align="center">

                                    <th>Orden</th>
                                    <th>Suc</th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Confirmacion</th>
                                    <th>Repuesto</th>
                                    <th>Fecha Entrega</th>
                                    <th>Categoria</th>
                                    <th>Equipo</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Detalles/Roturas/Marcas</th>
                                    <th>Sintoma</th>
                                    <th>Diagnostico</th>
                                    <th>Tecnico</th>
                                </tr>
                                </thead>
                                <tbody>


                                @if($orders)
                                    @foreach($orders as $order)

                                <tr style="font-size: 80%" align="center">

                                    <td><a href="{{route('ordenes.anotaciones', $order->ot_id)}}">{{$order->ot_id}}</a></td>
                                    <td>{{$order->sucursal->sucursal}}</td>
                                    <td>{{$order->cliente->apellido}}</td>
                                    <td>{{$order->cliente->nombre}}</td>
                                    <td>{{$order->estado->estadoot}}</td>
                                    <td>{{$order->confirmacion->estadoconfirmacion}}</td>
                                    <td>{{$order->Estadorepuesto->estadoderepuesto}}</td>
                                    <td>{{$order->fechaentrega}}</td>
                                    <td>{{$order->Equipo->tipodeequipo->tipodeequipo}}</td>
                                    <td>{{$order->equipo->modelo}}</td>
                                    <td>{{$order->fechaingreso}}</td>
                                    <td>{{$order->detalles}}</td>
                                    <td>{{$order->sintoma}}</td>
                                    <td>{{$order->sintoma}}</td>
                                    <td>{{$order->User->name}}</td>

                                </tr>

                                    @endforeach

                                @endif


                                </tbody>
                                <tfoot>
                                <tr style="font-size: 90%" align="center">

                                    <th>Orden</th>
                                    <th>Suc</th>
                                    <th>Apellido</th>
                                    <th>Nombre</th>
                                    <th>Estado</th>
                                    <th>Confirmacion</th>
                                    <th>Repuesto</th>
                                    <th>Fecha Entrega</th>
                                    <th>Categoria</th>
                                    <th>Equipo</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Detalles/Roturas/Marcas</th>
                                    <th>Sintoma</th>
                                    <th>Diagnostico</th>
                                    <th>Tecnico</th>
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

    <!-- DataTables -->
    <script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- page script -->
    <script>
        $(function () {
            $("#listaordenes").DataTable({
                "responsive": true,
                "autoWidth": false,
                "ordering": true,
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
