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
                    <div class="col-sm-12">
                        <h2><b>Movimientos Caja del {{$dateToday}}</b> </h2>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <section class="content">
            <div class="card">
                <!-- SEARCH FORM -->
                <!-- Search form -->
                <form class="form-inline ml-3">
                    <label class="form-label">Sucursal Caja: </label>
                    <select name="sucursalbusqueda" id="sucursalbusqueda" class="form-control">

                        <option value="">Todas</option>
                        @foreach ($listasucursales as $sucursallista)
                            <option value="{{ $sucursallista['sucursal'] }}">{{ $sucursallista['sucursal'] }}</option>
                        @endforeach

                    </select>

                </form>

                <div class="card-body">


                    <table id="listacaja" class="table-bordered display responsive" style="width:100%; font-family: Verdana; font-size: small">

                        <thead>
                        <tr style="text-align: center; height: 2em">

                            <th class="all">Sucursal</th>
                            <th class="all">Fecha</th>
                            <th class="all">Tipo</th>
                            <th class="all">Comprobante</th>
                            <th class="all">Cliente / Detalle</th>
                            <th class="all">Ingresos</th>
                            <th class="all">Egresos</th>
                            <th class="all">Carga</th>


                        </tr>
                        </thead>
                        <tbody>


                        @if($recibosefectivofecha)
                            @foreach($recibosefectivofecha as $recibo)

                                <tr style="text-align:center; height: 3em">

                                    <td>@if($recibo->sucursal){{$recibo->sucursal->sucursal}}@else Sin Sucursal @endif</td>
                                    <td>{{ \Carbon\Carbon::parse($recibo->updated_at)->format('d-m-y | H:i:s') }}</td>
                                    <td>@if($recibo->idfactura == null) Adelanto  @elseif($recibo->factura[0]->CAE){{$recibo->factura[0]->tipoAfip}} @else{{$recibo->factura[0]->tipo}} @endif</td>
                                    <td>@if($recibo->idfactura)<a href="{{route('facturacion.show', $recibo->factura[0]->id)}}"><b>{{$recibo->factura[0]->numfactura}}</b></a>@else {{$recibo->id}} @endif</td>
                                    <td>{{$recibo->cliente->apellido}} {{$recibo->cliente->nombre}}</td>

                                    <td>




                                        {{$recibo->monto}}


                                    </td>
                                    <td></td>
                                    <td>{{$recibo->user->name}}</td>


                                    </tr>

                            @endforeach

                        @endif

                        @if($ingresosyegresosFecha)
                            @foreach($ingresosyegresosFecha as $ingresoyegreso)

                                <tr style="text-align:center; height: 3em">

                                    <td>{{$ingresoyegreso->caja->sucursal->sucursal}}</td>
                                    <td>{{ \Carbon\Carbon::parse($ingresoyegreso->updated_at)->format('d-m-y | H:i:s') }}</td>
                                    <td>{{$ingresoyegreso->tipo}}</td>
                                    <td>{{$ingresoyegreso->nro}}</td>
                                    <td>{{$ingresoyegreso->detalle}}</td>

                                    @if($ingresoyegreso->tipo == 'Ingreso')
                                        <td>{{$ingresoyegreso->monto}}</td>
                                        <td></td>
                                    @else
                                        <td></td>
                                        <td>{{$ingresoyegreso->monto}}</td>
                                    @endif
                                    <td>{{$ingresoyegreso->user->name}}</td>


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


                                        </tr>
                                    </tfoot>
                        </table>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4">

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
    $(document).ready(function (){
        var table = $("#listacaja").DataTable({
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api(),
                    intVal = function (i) {
                        return typeof i === 'string' ?
                            i.replace(/[, Rs]|(\.\d{2})/g,"")* 1 :
                            typeof i === 'number' ?
                                i : 0;
                    },
                    total2 = api
                        .column(5)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    total3 = api
                        .column(6)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    totalfinal = total2-total3;

                $(api.column(4).footer()).html(
                    'TOTALES'
                );
                $(api.column(5).footer()).html(
                    '$' + total2
                );
                $(api.column(6).footer()).html(
                    '$' + total3
                );
                $(api.column(7).footer()).html(
                    '$' + totalfinal
                );
            },
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
        $('#sucursalbusqueda').on('change', function(){
            table.search(this.value).draw();

        });
    });


</script>







@endsection
