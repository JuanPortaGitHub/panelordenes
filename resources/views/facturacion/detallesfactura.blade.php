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
                        <h2><b>Detalle Factura</b> </h2>
                        <h1><b>{{$factura->nrolocalfactura}} - {{$factura->numfactura}}</b></h1>
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



                    <table id="listafacturas" class="table-bordered display responsive" style="width:100%; font-family: Verdana; font-size: small">

                        <thead>
                        <tr style="text-align: center; height: 2em">

                            <th class="all">Fecha</th>
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


                        @if($factura)


                                <tr style="text-align:center; height: 3em">

                                    <td>{{ \Carbon\Carbon::parse($factura->fechafactura)->format('d-m-y') }}</td>
                                    <td>{{$factura->tipo}}</td>
                                    <td>{{$factura->nrolocalfactura}}</td>
                                    <td>{{$factura->numfactura}}</td>
                                    <td>{{$factura->cliente->apellido}} {{$factura->cliente->nombre}}</td>
                                    <td>{{$factura->cotizacionfactura}}</td>
                                    <td>




                                            $ {{$factura->Recibo->sum('montofinanciado')}}


                                    </td>
                                    <td>{{$factura->sucursal->sucursal}}</td>
                                    <td>{{$factura->user->name}}</td>
                                    <td><i class="fas fa-print"></i></td>
                                    </tr>



                                    @endif


                                    </tbody>

                        </table>

                </div>
            </div>





            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2><b>Detalle de Productos</b> </h2>

                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>



            <div class="card">
                <!-- SEARCH FORM -->

                <div class="card-body">

                    <!-- Search form -->



                    <table id="listafacturas" class="table-bordered display responsive" style="width:100%; font-family: Verdana; font-size: small">

                        <thead>
                        <tr style="text-align: center; height: 2em">

                            <th class="all" style="text-align: center"><b>Cod. Producto</b></th>
                            <th class="all" style="text-align: center"><b>Articulo</b></th>
                            <th class="all" style="text-align: center"><b>Descripcion</b></th>
                            <th class="all" style="text-align: center"><b>Cantidad</b></th>
                            <th class="all" style="text-align: center"><b>Precio</b></th>
                            <th class="all" style="text-align: center"><b>Descuento</b></th>
                            <th class="all" style="text-align: center"><b>Total</b></th>
                        </tr>
                        </thead>
                        <tbody>


                        @if($factura)
                            @foreach($factura->detallefactura as $detallefactura)
                                <tr>

                                    <td style="text-align: center">{{$detallefactura->productofactura->cod}}</td>
                                    <td style="text-align: center">{{$detallefactura->productofactura->art}}</td>
                                    <td style="text-align: center">{{$detallefactura->descripcion}}</td>
                                    <td style="text-align: center">{{$detallefactura->cantidad}}</td>
                                    <td style="text-align: center">$ {{$detallefactura->precio}}</td>
                                    <td style="text-align: center">{{$detallefactura->descuento}} %</td>
                                    <td style="text-align: center; border-bottom-color: black">$ {{$detallefactura->cantidad * $detallefactura->precio * (1-$detallefactura->descuento/100)}}</td>

                                </tr>


                            @endforeach
                            <tr>

                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"></td>
                                <td style="text-align: center"><b>

                                    @php
                                    $suma =0;
                                    @endphp
                                    @foreach($factura->detallefactura as $productos)
                                    @php

                                    $productos=$suma += $productos->cantidad * $productos->precio * (1-($productos->descuento)/100);
                                    @endphp
                                @endforeach

                                   $ {{$productos}}

                                    </b></td>
                            </tr>
                        @endif

                        </tbody>

                    </table>

                </div>
            </div>
        </section>







            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2><b>Detalle Pago de Factura</b> </h2>

                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <div class="card">
                        <!-- SEARCH FORM -->

                        <div class="card-body">

                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td style="width: 14%"><b>Monto a Cancelar</b></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td id="montoacancelar" style="width: 16%"><b>$ {{$productos}}</b></td>
                        </tr>
                        <tr>
                        <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>



                    <table class="table table-hover text-nowrap" id="Detallepago">

                        <tbody>
                        <tr>
                            <td></td>
                            <td><b>Fecha</b></td>
                            <td><b>Usuario</b></td>
                            <td><b>Recibo</b></td>
                            <td><b>Forma Pago</b></td>
                            <td><b>Monto (con recargo)</b></td>
                            <td><b>Monto</b></td>
                        </tr>
                        @if($factura)
                            @foreach($factura->recibo as $recibo)
                                <tr>
                                    <td></td>
                                    <td>{{$recibo->created_at->format('d-m-y H:i') }}</td>
                                    <td>{{$recibo->user->name}}</td>
                                    <td>{{$recibo->id}}</td>
                                    <td>

                                            @foreach($recibo->formapago as $reci)

                                                {{$reci->nombre}}

                                            @endforeach
                                                @if($recibo->idformapago == 2){{$recibo->financiaciontarjeta[0]->nombre}}

                                                    @endif
                                        </td>
                                    <td>$ {{$recibo->montofinanciado}}</td>
                                    <td>$ {{$recibo->monto}}</td>
                                 </tr>
                            @endforeach

                        @endif


                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>


                        </tbody>



                    </table>




                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td style="width: 14%"><b>Detalle</b></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td id="totalmontopagado" style="width: 16%"><b>

                                @php
                                    $suma =0;
                                @endphp
                                @foreach($factura->Recibo as $recibo)

                                        @if($recibo->idformapago == 5)
                                        @continue
                                        @endif
                                       @php

                                           $suma += $recibo->monto
                                       @endphp


                                @endforeach

                                    $ {{$suma}}</b>
                        </tr>
                    </table>

                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td style="width: 14%"><b>Saldo</b></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td style="width: 14%"></td>
                            <td id="saldoacancelar" style="width: 16%; color: red"><b>

                                    @php
                                        $suma =0;
                                    @endphp
                                    @foreach($factura->Recibo as $recibo)

                                        @if($recibo->idformapago != 5)
                                            @continue
                                        @endif
                                        $ {{$suma += $recibo->monto}}

                                    @endforeach


                                </b></td>

                        </tr>
                    </table>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pt-4">

                    </div>
                </div>
            </div>
            </div>




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
