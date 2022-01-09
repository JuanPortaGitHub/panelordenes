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
                        <h2><b>Listado de Facturas </b> </h2>
                        @if($server_status)
                        <div>Última Factura A: {{$ultimaFacturaA}}</div>
                        <div>Última Factura B: {{$ultimaFacturaB}}</div>
                        <div>Server AFIP AppServe   : <b>{{$server_status->AppServer}}</b></div>
                        <div>Server AFIP DBServer: <b>{{$server_status->DbServer}}</b></div>
                        <div>Server AFIP AuthServer: <b>{{$server_status->AuthServer}}</b></div>
                        @else
                        <div style="color: red"><b>No se puede conectar a AFIP</b></div>
                        @endif
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
                    <form class="form-inline ml-3">
                        <div>
                            <input class="form-control" name="busqueda" id="busqueda" type="search" id="busquedaorden" placeholder="Buscar por orden o nombre" aria-label="Search">


                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>

                        </div>

                    </form>
                    <form class="form-inline ml-3">
                        <label class="form-label">Sucursal</label>
                        <select name="sucursalbusqueda" id="sucursalbusqueda" class="form-control">

                            <option value=""></option>
                            @foreach ($listasucursales as $sucursallista)
                                <option value="{{ $sucursallista['sucursal'] }}">{{ $sucursallista['sucursal'] }}</option>
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

                            <th class="all">Fecha</th>
                            <th class="all">AFIP</th>
                            <th class="all">Tipo</th>
                            <th class="all">Nro Local</th>
                            <th class="all">Nro Factura</th>
                            <th class="all">Cliente</th>
                            <th class="desktop">Cotizacion</th>
                            <th class="desktop">Monto Factura</th>
                            <th class="desktop">Sucursal</th>
                            <th class="desktop">Vendedor</th>
                            <th class="desktop">Imprimir</th>

                        </tr>
                        </thead>
                        <tbody>


                        @if($facturas)
                            @foreach($facturas as $factura)

                                <tr style="text-align:center; height: 3em">

                                    <td>{{ \Carbon\Carbon::parse($factura->fechafactura)->format('d-m-y') }}</td>
                                    <td>@if($factura->CAE){{$factura->tipoAfip}} - {{$factura->nroAFIPfactura}}@else - @endif</td>
                                    <td>@if($factura->CAE){{$factura->tipoAfip}} @else{{$factura->tipo}} @endif</td>
                                    <td>{{$factura->nrolocalfactura}}</td>
                                    <td><a href="{{route('facturacion.show', $factura->id)}}"><b>{{$factura->numfactura}}</b></a></td>
                                    <td>{{$factura->cliente->apellido}} {{$factura->cliente->nombre}}</td>
                                    <td>{{$factura->cotizacionfactura}}</td>
                                    <td>




                                            {{$factura->Recibo->sum('montofinanciado')}}


                                    </td>
                                    <td>{{$factura->sucursal->sucursal}}</td>
                                    <td>{{$factura->user->name}}</td>
                                    <td><a href="{{route('facturacion.showpdf', $factura->numfactura)}}"><i class="fas fa-print"></i></a></td>
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
                            {{$facturas->onEachSide(1)->links()}}
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
<script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- page script -->

<script>

$(document).ready(function () {

document.getElementById("busquedaorden").focus();

$('#listaordenes').dataTable({
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






<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>

@endsection
