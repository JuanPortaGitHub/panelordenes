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
                        <h1><b>Listado Ordenes de Trabajo</b></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">

                <div class="card-body">
                    <table id="listaordenes" class="table-bordered display responsive" style="width:100%">

                                        <thead>
                                        <tr style="text-align: center; height: 2em">

                                            <th>Orden</th>
                                            <th>Suc</th>
                                            <th>Tipo</th>
                                            <th>Apellido</th>
                                            <th>Nombre</th>
                                            <th>Estado</th>

                                            <th>Fecha Ingreso</th>
                                            <th>Fecha Entrega</th>
                                            <th>Categoria</th>
                                            <th>Equipo</th>

                                            <th>Imprimir</th>

                                        </tr>
                                        </thead>
                                        <tbody>


                                        @if($orders)
                                            @foreach($orders as $order)

                                        <tr style="text-align:center; height: 2em">

                                            <td><a href="{{route('ordenes.anotaciones', $order->ot_id)}}"><b>{{$order->ot_id}}</b></a></td>
                                            <td>{{$order->sucursal->sucursal}}</td>
                                            <td>{{$order->area->areas}}</td>
                                            <td>{{$order->cliente->apellido}}</td>
                                            <td>{{$order->cliente->nombre}}</td>
                                            <td>{{$order->estado->estadoot}}</td>

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

        rowCallback: function(row, data, index){
            if(data[5] == 'Urgente'){
                $(row).find('td:eq(5)').css('background-color', '#e90125').css('font-weight', 'bold');
            }
            if(data[5] == 'Listo para entregar'){
                $(row).find('td:eq(5)').css('background-color', '#2fa360').css('font-weight', 'bold');
            }
            if(data[5] == 'Esperando repuesto'){
                $(row).find('td:eq(5)').css('background-color', '#b4ffd4').css('font-weight', 'bold');
            }
            if(data[5] == 'Entregado'){
                $(row).find('td:eq(5)').css('background-color', 'yellow').css('font-weight', 'bold');
            }
            if(data[5] == 'Presupuestado'){
                $(row).find('td:eq(5)').css('background-color', '#4f85a5').css('font-weight', 'bold');
            }

        },

    initComplete: function () {
    this.api().columns([1, 2, 5, 8]).every( function () {
    var column = this;
    var select = $('<select  class="browser-default custom-select form-control-sm"><option value="" selected></option></select>')
    .appendTo( $(column.footer()).empty() )
    .on( 'change', function () {
    var val = $.fn.dataTable.util.escapeRegex(
    $(this).val()

    );

    column
    .search( val ? '^'+val+'$' : '', true, false )
    .draw();
    } );


    column.data().unique().sort().each( function ( d, j ) {
    select.append( '<option value="'+d+'">'+d+'</option>' )
    } );
    } );
    },"order": [[ 0, "desc" ]]
    });
    });



    </script>

    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>

@endsection
