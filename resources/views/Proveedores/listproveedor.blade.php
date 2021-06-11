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
                        <h2><b>Listado Proveedores </b> </h2>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{route('providers.create')}}"> <button type="button" class="btn btn-warning"><b>Cargar Proveedor</b>
                        </button></a>
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
                            <input class="form-control" name="busqueda" id="busqueda" type="search" placeholder="Buscar por nombre" aria-label="Search">


                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>

                        </div>

                    </form>



                    <table id="listaproveedores" class="table-bordered display responsive" style="width:100%; font-family: Verdana; font-size: small">

                        <thead>
                        <tr style="text-align: center; height: 2em">


                            <th class="all">CUIT</th>
                            <th class="all">Cond. IVA</th>
                            <th class="all">Razon Social</th>
                            <th class="desktop">Vendedor</th>
                            <th class="desktop">Celular</th>
                            <th class="all">Telefono</th>

                            <th class="desktop">Mail</th>

                            <th class="desktop">Modificar / Borrar</th>


                        </tr>
                        </thead>
                        <tbody>


                        @if($providers)
                            @foreach($providers as $provider)

                                <tr style="text-align:center; height: 3em">


                                    <td>{{$provider->cuit}}</td>
                                    <td>{{$provider->condiciondeiva->condicion}}</td>
                                    <td>{{$provider->razonsocial}}</td>
                                    <td>{{$provider->vendedor}}</td>
                                    <td>{{$provider->celular}}</td>
                                    <td>{{$provider->telefono}}</td>
                                    <td>{{$provider->mail}}</td>
                                    <td><a href="{{route('providers.edit', $provider->id)}}"><i class="fas fa-edit"></i></a></td>


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
