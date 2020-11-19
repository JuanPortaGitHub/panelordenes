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
                        <h2><b>Listado de Anotaciones </b> </h2>

                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <section class="content">
            <div class="card">
                <!-- SEARCH FORM -->

                <div class="card-body">



                    <table id="listadeanotaciones" class="table table-striped table-bordered" style="font-size: small; white-space: pre-wrap;word-wrap: break-word; width: 100%">

                        <thead>
                        <tr style="text-align: center; height: 2em">

                            <th class="all">Orden</th>
                            <th class="all">Fecha</th>
                            <th class="all">Anotacion</th>
                            <th class="desktop">Usuario</th>




                        </tr>
                        </thead>
                        <tbody>


                        @if($anotattions)
                            @foreach($anotattions as $anotattion)

                                <tr style="text-align:center; height: 3em">



                                    <td><a href="{{route('ordenes.anotaciones', $anotattion->ot_id)}}"><b>{{$anotattion->ot_id}}</b></a></td>
                                    <td>{{ \Carbon\Carbon::parse($anotattion->created_at)->format('d-m-y H:i') }}</td>
                                    <td>{{$anotattion->anotacion}}</td>
                                    @if(!isset($anotattion->user_id))
                                        <td style="font-family: Verdana; white-space: normal"> Cliente
                                    @else
                                        <td style="font-family: Verdana; white-space: normal"> <b>HotSpot</b>
                                            @endif
                                        </td>


                            @endforeach

                        @endif


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


</section>
<!-- /.content -->




</div>
<!-- /.content-wrapper -->




@endsection


@section("scriptextra")

<!-- DataTables -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- page script -->

<script>



$(document).ready(function () {
$('#listadeanotaciones').dataTable({


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
"paging": true,
"searching": true,
"info":     true,
});
});




</script>

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>

@endsection
