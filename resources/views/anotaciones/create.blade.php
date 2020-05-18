@extends('layouts.layoutsinmenu')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <!-- FORMULARIO DE CARGA ANOTACION -->

        <section class="content">

            <form METHOD="post" action="{{ route('annotations.store') }}" class="form-horizontal" autocomplete="off">
            {{csrf_field()}}

            <!-- Seccion Titular -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Ingresar a Orden de Trabajo</b></h3>
                    </div>



                    <!-- Seccion contenido Anotacion> -->

                    <div class="card-body">

                        <div class="form-group">
                            <label for="orden">Orden de Trabajo</label>

                                <input name="orden" id="orden" type="text" class="form-control" value="{{$anotacionOt->ot_id}}">


                        </div>

                        <div class="form-group">
                            <label for="anotacion">Anotacion</label>

                                <textarea class="form-control" rows="4" placeholder="Anotacion ..." name="anotacion" id="anotacion"></textarea>

                        </div>
                        <div class="form-group row">
                            <label for="tecnico_id">tecnico_id</label>
                            <div class="col-sm-10">
                                <input name="tecnico_id" id="tecnico_id" type="text" class="form-control" placeholder="TecnicoID ...">

                            </div>
                        </div>
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input name="visiblecliente" type="checkbox" class="form-check-input" id="visiblecliente">
                                <label class="form-check-label" for="visiblecliente">Visible para cliente</label>
                            </div>
                            <div class="form-check">
                                <input name="notificarcliente" type="checkbox" class="form-check-input" id="notificarcliente">
                                <label class="form-check-label" for="notificarcliente">Mandar aviso a cliente</label>
                            </div>

                        </div>

                        <!-- Botones de Formulario -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Ingresar</button>
                            <button type="reset" class="btn btn-default float-right">Limpiar</button>
                        </div>
                    </div>
                </div>

            </form>
        </section>
            <!-- CIERRE DE FORMULARIO CARGA OT -->

    </div>




    <!-- /.content-wrapper -->







@endsection


@section("scriptextra")

    <!-- /.Script para recargar los cambios en ordenes.anotaciones.blade luego que se cierra la pagina de acuerdo al controlador -->
    <script>
        window.onunload = refreshParent;
        function refreshParent() {
            window.opener.location.reload();
        }
    </script>


    <!-- DataTables -->
    <script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- page script -->

@endsection


