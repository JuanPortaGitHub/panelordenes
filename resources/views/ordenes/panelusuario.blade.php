@extends('layouts.layoutsecciones')
<link rel="stylesheet" href="../adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@section('content')





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->




        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Consultas de clientes</b></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>




        <div class="card">

            <div class="card-body">
                <table id="anotaciones" class="table-bordered display responsive" style="width:100%; font-size: small;white-space: pre-wrap;word-wrap: break-word">

                    <thead>
                    <tr style="text-align: center; font-size: medium; height: 2em">

                        <th style="height: 2em">Orden</th>
                        <th>Fecha</th>
                        <th>Anotacion</th>
                        <th>Usuario</th>

                    </tr>
                    </thead>



                    <tbody>



                    @foreach($annotations as $annotation)
                        @if(!isset($annotation->tecnico))
                            <tr style="text-align:center; height: 2em; background-color: lightpink">

                                <td style="font-family: Verdana;height: 2em"><a href="{{route('ordenes.anotaciones', $annotation->ot_id)}}"><b>{{$annotation->ot_id}}</b></a></td>
                                <td style="white-space: nowrap;font-family: Verdana">{{$annotation->created_at}}</td>
                                <td style="font-family: Verdana">{{$annotation->anotacion}}</td>
                                <td style="font-family: Verdana">{{$annotation->apellidocliente}} {{$annotation->nombrecliente}}</td>
                            </tr>
                        @endif
                    @endforeach




                    </tbody>




                    <tfoot>
                    <tr>

                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>






















        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><b>Panel de {{$user->name}} </b></h1>
                        <h1>Cantidad de Ordenes
                            @if( Request::get('sucursalbusqueda') or Request::get('areabusqueda') or Request::get('estadobusqueda')or Request::get('equipobusqueda'))
                                Filtradas: <b>{{$orders->total()}}</b>
                            @else a Realizar: <b>{{$orders->total()}}</b>
                                @endif</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

                    <div class="card">

                        <div class="card-body">

                            <!-- filter form -->

                            <form class="form-inline ml-3">
                                <label class="form-label">Sucursal</label>
                                <select name="sucursalbusqueda" id="sucursalbusqueda" class="form-control">

                                    <option value=""></option>
                                    @foreach ($listasucursales as $sucursallista)
                                        <option value="{{ $sucursallista['sucursal'] }}">{{ $sucursallista['sucursal'] }}</option>
                                    @endforeach

                                </select>
                                <label class="form-label">Area</label>
                                <select name="areabusqueda" id="areabusqueda" class="form-control">

                                    <option value=""></option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['areas'] }}">{{ $area['areas'] }}</option>
                                    @endforeach

                                </select>
                                <label class="form-label">Estado</label>
                                <select name="estadobusqueda" id="estadobusqueda" class="form-control">

                                    <option value=""></option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado['estadoot'] }}">{{ $estado['estadoot'] }}</option>
                                    @endforeach

                                </select>
                                <label class="form-label">Categoria</label>
                                <select name="equipobusqueda" id="equipobusqueda" class="form-control">

                                    <option value=""></option>
                                    @foreach ($tipoequipos as $tipoequipo)
                                        <option value="{{ $tipoequipo['id'] }}">{{ $tipoequipo['tipodeequipo'] }}</option>
                                    @endforeach

                                </select>

                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>


                            <table id="listaordenes" class="table-bordered display responsive" style="width:100%; font-family: Verdana; font-size: small">

                                <thead>
                                <tr style="text-align: center; height: 2em">

                                    <th class="all">Orden</th>
                                    <th class="all">Suc</th>
                                    <th class="all">Tipo</th>
                                    <th class="desktop">Apellido</th>
                                    <th class="desktop">Nombre</th>
                                    <th class="all">Estado</th>

                                    <th class="desktop">Fecha Ingreso</th>
                                    <th class="desktop">Fecha Entrega</th>
                                    <th class="desktop">Categoria</th>
                                    <th class="desktop">Equipo</th>

                                    <th class="desktop">Imprimir</th>

                                </tr>
                                </thead>
                                <tbody>


                                @if($orders)
                                    @foreach($orders as $order)

                                        <tr style="text-align:center; height: 3em">

                                            <td><a href="{{route('ordenes.anotaciones', $order->ot_id)}}"><b>{{$order->ot_id}}</b></a></td>



                                            <td>{{$order->sucursal->sucursal}}</td>
                                            <td>{{$order->area->areas}}</td>
                                            <td>{{$order->cliente->apellido}}</td>
                                            <td>{{$order->cliente->nombre}}</td>

                                            @if($order->estado->id == 2)
                                                <td style="background:red"><b>{{$order->estado->estadoot}}</b></td>
                                            @elseif($order->estado->id == 7)
                                                <td style="background: #2FEB23">{{$order->estado->estadoot}}</td>
                                            @elseif($order->estado->id == 8)
                                                <td style="background: lightgrey">{{$order->estado->estadoot}}</td>
                                            @elseif($order->estado->id == 3)
                                                <td style="background: #007bff">{{$order->estado->estadoot}}</td>
                                            @elseif($order->estado->id == 4)
                                                <td style="background: #ee9050">{{$order->estado->estadoot}}</td>
                                            @else
                                                <td>{{$order->estado->estadoot}}</td>


                                            @endif

                                            <td>{{ \Carbon\Carbon::parse($order->fechaingreso)->format('d-m-y H:i') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($order->fechaentrega)->format('d-m-y') }}</td>
                                            <td>{{$order->Equipo->tipodeequipo->tipodeequipo}}</td>
                                            <td>{{$order->equipo->modelo}}</td>

                                            <td><a href="{{route('ordenes.showpdf', $order->ot_id)}}"><i class="fas fa-print"></i></a></td>

                                        </tr>

                                    @endforeach

                                @endif



                                </tbody>
                                <tfoot>
                                <tr>

                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>


                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end pt-4">
                                    {{$orders->links()}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->



















        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




@endsection


@section("scriptextra")

    <!-- DataTables -->
    <script src="../adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- page script -->

    <script>


        $(document).ready(function () {
            $('#listaordenes').dataTable({


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


                "autoWidth": true,

                "ordering": false,
                "paging": false,
                "searching": false,
                "info":     false,
            });
        });



    </script>


    <script>

        $(document).ready(function () {
            $('#anotaciones').dataTable({

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


                "autoWidth": true,

                "ordering": true,
                "order": [[ 1, "desc" ]]

            });
        })



    </script>


    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>

@endsection
