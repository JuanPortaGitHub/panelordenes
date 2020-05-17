@extends('layouts.layoutsecciones')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->



            <div class="col-lg-4 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4><b>Agregar Cliente</b> </h4>
                        <h4><b></b></h4>

                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>

                </div>
            </div>





        <!-- FORMULARIO DE CARGA CLIENTE -->

        <section class="content">

            <form METHOD="post" action="{{ route('clientes.store') }}" class="form-horizontal" autocomplete="off">
            {{csrf_field()}}

            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Cliente</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">

                        <i class="fas fa-edit"></i>

                        <h1>{{$cliente->apellido}}</h1>
                        <h1>{{$cliente->nombre}}</h1>
                        <h1>{{$cliente->celular}}</h1>
                        <h1>{{$cliente->telefono}}</h1>
                        <h1>{{$cliente->mail}}</h1>




                        <!-- Botones de Formulario -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Ingresar</button>
                            <button type="reset" class="btn btn-default float-right">Limpiar</button>
                        </div>
                    </div>
                </div>

            </form>

            <!-- CIERRE DE FORMULARIO CARGA OT -->

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

@endsection


