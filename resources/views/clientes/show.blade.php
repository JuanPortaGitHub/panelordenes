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
                        <h2><b>Detalle de Cuenta de {{$cliente->apellido}} {{$cliente->nombre}}</b> </h2>

                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <section class="content">
            <div class="card">
                <!-- SEARCH FORM -->

                <div class="card-body">

                    <!-- Search form -->


                    <table id="cuentaCliente" class="table-bordered display responsive" style="width:100%; font-family: Verdana; font-size: small">

                        <thead>
                        <tr style="text-align: center; height: 2em">

                            <th class="all">Fecha</th>
                            <th class="desktop">Comprobante</th>
                            <th class="desktop">Relacion</th>
                            <th class="desktop">Forma Pago</th>
                            <th class="all">Debe</th>
                            <th class="all">Haber</th>

                            <th class="not-desktop">Ver mas</th>

                        </tr>
                        </thead>
                        <tbody>




                                @foreach($cliente->factura as $factura)
                                <tr style="text-align:center; height: 3em">
                                    <td>{{ \Carbon\Carbon::parse($factura->fechafactura)->format('d-m-y') }}</td>
                                    <td><b><a href="{{route('facturacion.show', $factura->id)}}">{{$factura->nrolocalfactura}} - {{$factura->numfactura}}</a></b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$factura->Recibo->sum('monto')}}</td>
                                    <td></td>

                                </tr>
                                @endforeach



                                    @foreach($cliente->Recibo as $recibo)
                                        @if($recibo->idformapago == 5)
                                            @continue
                                        @endif
                                <tr style="text-align:center; height: 3em">
                                    <td>{{ \Carbon\Carbon::parse($recibo->created_at)->format('d-m-y') }}</td>
                                        <td>@if($recibo->idfactura == Null)
                                                {{$recibo->id}}
                                            @else
                                            <b><a href="{{route('facturacion.show', $recibo->idfactura)}}">{{$recibo->id}}</a></b>
                                        @endif

                                        </td>
                                        <td>
                                            @if($recibo->idfactura == Null)

                                            @else
                                                <b><a href="{{route('facturacion.show', $recibo->idfactura)}}">{{$recibo->factura[0]->nrolocalfactura}} - {{$recibo->factura[0]->numfactura}}</a></b>
                                            @endif

                                        </td>
                                        <td>{{$recibo->formapago[0]->nombre}}</td>
                                        <td>{{$recibo->monto}}</td>
                                        <td></td>
                                        <td></td>

                                </tr>
                                    @endforeach







                        </tbody>
                        <tfoot>
                        <tr>


                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th style="text-align: center"><b>$ {{$reciboscliente->sum('monto')}}</b></th>
                            <th style="text-align: center"><b>$ {{$recibosclientetotales->sum('monto') - $recibossinfactura->sum('monto')}}</b></th>


                        </tr>
                        </tfoot>
                    </table>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4">
                            <table>

                                <tr>
                                    <td style="color: @if(($recibosclientetotales->sum('monto') - $recibossinfactura->sum('monto') - $reciboscliente->sum('monto'))>0) red @else black @endif "><b>SALDO CUENTA CORRIENTE


                                            $ {{$recibosclientetotales->sum('monto') - $recibossinfactura->sum('monto') - $reciboscliente->sum('monto')}}

                                        </b></td>
                                </tr>
                            </table>



                        </div>
                    </div>
                </div>
            </div>


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

            $(function () {
                $("#cuentaCliente").DataTable({
                    responsive: {
                        details: {
                            type: 'column',
                            target: -1
                        }
                    },
                    columnDefs: [ {
                        className: 'control',
                        orderable: false,
                        targets:   -1
                    } ],

                    "autoWidth": false,
                    "order": [[ 0, 'desc' ], [ 1, 'desc' ]],
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

        });




    </script>

    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>

@endsection
