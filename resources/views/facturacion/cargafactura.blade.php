@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->





            <div class="col-md-12">

            <!-- Boton modal carga cliente -->

    @include('modalformularios.modalcargacliente')




        <p></p>






        <!-- FORMULARIO DE CARGA OT -->

        <section class="content">

            <form METHOD="post" action="{{ route('ordenes.store') }}" class="form-horizontal">
            {{csrf_field()}}


                <div class="row">
                    <div class="col-md-6">
            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Cliente</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">


                        <div class="form-group row">
                            <label for="busquedacliente" class="col-sm-2 col-form-label">Buscar Cliente</label>
                            <div class="col-sm-10">
                                <input name="busquedacliente" id="busquedacliente" type="text" class="form-control" placeholder="Busca por apellido de cliente ...">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cuitcliente" class="col-sm-2 col-form-label">CUIT / DNI</label>
                            <div class="col-sm-10">
                                <input name="cuitcliente" id="cuitcliente" type="text" class="form-control" VALUE="20-33437604-5" readonly required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-10">
                                <input name="apellidocliente" id="apellidocliente" type="text" class="form-control" placeholder="Apellido ..." readonly required>

                            </div>
                        </div>
                        <div class="form-group row" style="display: none">
                            <label for="idclient" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input name="idclient" id="idclient" type="text" class="form-control" placeholder="ID ..." required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input name="nombrecliente" id="nombrecliente" type="text" class="form-control" placeholder="Nombre ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input name="celularcliente" id="celularcliente" type="text" class="form-control" placeholder="Celular ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input name="telefonocliente" id="telefonocliente" type="text" class="form-control" placeholder="Telefono ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mailcliente" class="col-sm-2 col-form-label">Mail</label>
                            <div class="col-sm-10">
                                <input name="mailcliente" id="mailcliente" type="email" class="form-control" placeholder="Mail ..." readonly>
                            </div>
                        </div>


                        <!-- Boton modal para edicion de equipo -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargacliente"><b>Carga cliente nuevo</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- Cierra boton modal carga cliente -->

                </div>





                </div>
                    <div class="col-md-6">
                        <!-- Seccion Datos Factura -->



                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title"><b>Datos Factura</b> <i class="fas fa-square"></i> </h3>
                            </div>


                            <!-- Seccion contenido Cliente -->

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="local" class="col-sm-2 col-form-label">SUCURSAL</label>
                                    <div class="col-sm-10">
                                        <input name="local" id="local" type="text" class="form-control" value="ACHAVAL" readonly required>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="fechafactura" class="col-sm-2 col-form-label">Fecha Factura</label>
                                    <div class="col-sm-10">
                                        <input name="fechafactura" id="fechafactura" type="datetime-local" class="form-control" value="10/11/2020" readonly required>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tipofactura" class="col-sm-2 col-form-label">Tipo Factura</label>
                                    <div class="col-sm-10">
                                        <input name="tipofactura" id="tipofactura" type="text" class="form-control" value="A" readonly required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="nrofactura" class="col-sm-2 col-form-label">Nro.</label>
                                    <div class="col-sm-10">
                                        <input name="tipofactura" id="tipofactura" type="text" class="form-control" value="0001-000000125" readonly required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cotizaciondolar" class="col-sm-2 col-form-label">Dolar</label>
                                    <div class="col-sm-10">
                                        <input name="cotizaciondolar" id="cotizaciondolar" type="text" class="form-control" value="85" readonly required>
                                    </div>
                                </div>





                            </div>
                            <!-- Cierra boton modal carga cliente -->

                        </div>





                    </div>
                </div>



                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Carga de Articulos</h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>COD</th>
                                        <th>ARTICULO</th>
                                        <th>DESCRIPCION</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO</th>
                                        <th>DTO</th>
                                        <th>SUBTOTAL</th>
                                        <th>IVA</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>581684684</td>
                                        <td>NX-7000</td>
                                        <td>Mouse Genius Inalambrico NX-7000 Negro</td>
                                        <td>2</td>
                                        <td>1500.50</td>
                                        <td>2%</td>
                                        <td>3001</td>
                                        <td>10.5</td>
                                        <td><i class="fas fa-trash-alt mr-1"></i></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-plus-circle"></i></td>
                                        <td></td>
                                        <td></td>
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
                            </div>

                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-6">

                    </div>
                    <!-- /.col -->
                    <div class="col-6" >

                        <div class="table-responsive">
                            <table class="table" style="background-color: white">
                                <tbody>
                                <tr>
                                    <th>NETO 21%</th>
                                    <td>$10.34</td>
                                    <th>IVA 21%</th>
                                    <td>$10.34</td>

                                </tr>
                                <tr>
                                    <th>NETO 10.5%</th>
                                    <td>$10.34</td>
                                    <th>IVA 10.5%</th>
                                    <td>$10.34</td>

                                </tr>
                                <tr>
                                    <th>TOTAL NETO</th>
                                    <td>$80.05</td>
                                    <th>TOTAL IVA</th>
                                    <td>$25.85</td>

                                </tr>
                                <tr>
                                    <th colspan="2"><h3><b>TOTAL FACTURA</b></h3></th>
                                    <td colspan="2" style="text-align: center"><h3><b>$80.05</b></h3></td>

                                </tr>

                                </tbody></table>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-danger"><b>BORRAR</b>
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning"><b>CARGAR FACTURA</b>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>





                <!-- Modal Carga de Pin -->
                <div class="modal fade cargaot" tabindex="-1" role="dialog" aria-labelledby="cargaot" aria-hidden="true" id="carga">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">



                                    <!-- Seccion contenido Anotacion> -->

                                    <div class="card-body" id="cargapin">



                                        <div class="form-group">
                                            <label for="anotacion">Ingrese PIN</label>

                                            <input name="pincode" id="pincode" type="password" class="form-control" required placeholder="...">

                                        </div>


                                        <!-- Botones de Formulario -->
                                        <div class="card-footer" >
                                            <button type="submit" class="btn btn-info" id="ajaxsubmit">Ingresar</button>


                                        </div>
                                        <div class="alert alert-danger" style="display:none"></div>
                                    </div>
                            <div id="loading-screen" style="display: none; position: absolute; left: 50%; top: 50%;
                z-index: 1000;
                height: 80px;
                width: 80px;">
                                <img src="../adminlte/img/5-0.gif" height="40">
                                <b>Cargando...</b>
                            </div>



                        </div>
                    </div>
                </div>





            </form>
        </section>
            </div>
    </div>
            <!-- CIERRE DE FORMULARIO CARGA OT -->







    <!-- /.content-wrapper -->






@endsection


@section("scriptextra")








<!-- Script autocompletar campos cliente en base a apellido -->
<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

        $( "#busquedacliente" ).autocomplete({
            source: function( request, response ) {
                // Fetch data
                $.ajax({
                    url:"{{route('clientes.getClientes')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function( data ) {

                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                $('#busquedacliente').val(ui.item.label); // display the selected text
                $('#apellidocliente').val(ui.item.apellidocliente); // save selected id to input
                $('#idclient').val(ui.item.idclient); // save selected id to input
                $('#nombrecliente').val(ui.item.nombrecliente); // save selected id to input
                $('#celularcliente').val(ui.item.celularcliente); // save selected id to input
                $('#telefonocliente').val(ui.item.telefonocliente); // save selected id to input
                $('#mailcliente').val(ui.item.mailcliente); // save selected id to input
                return false;
            }

        });


    });
</script>







<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



@endsection








