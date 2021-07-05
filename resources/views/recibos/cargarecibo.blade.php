@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->





            <div class="col-md-12">

            <!-- Boton modal carga cliente -->






        <p></p>






        <!-- FORMULARIO DE CARGA OT -->

        <section class="content">

            <form METHOD="post" action="{{ route('recibos.store') }}" class="form-horizontal" id="formcomplete" name="formcomplete">
            {{csrf_field()}}


                <div class="row">
                    <div class="col-md-6">
            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Carga Recibo</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">



                        <div class="form-group row">
                            <label for="busquedacliente" class="col-sm-2 col-form-label">Buscar Cliente</label>
                            <div class="col-sm-10">
                                <input name="busquedacliente" id="busquedacliente" type="text" class="form-control" placeholder="Busca por DNI/CUIT o apellido de cliente ...">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cuitcliente" class="col-sm-2 col-form-label">CUIT / DNI</label>
                            <div class="col-sm-10">
                                <input name="cuitcliente" id="cuitcliente" type="text" class="form-control" placeholder="CUIT / DNI ..." readonly required>

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
                            <label for="monto" class="col-sm-2 col-form-label">Monto</label>
                            <div class="col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>

                                <input name="monto" id="monto" type="number" class="form-control" step=".01" placeholder="Monto a cancelar ..." required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formadepago" class="col-sm-2 col-form-label">Forma De Pago</label>
                            <div class="col-sm-10">
                                <select name="formadepago" id="formadepago" class="form-control" required>

                                    @foreach ($formaspagos as $formapago)
                                        @if($formapago->id == 5)
                                            @continue
                                        @endif
                                        <option value="{{ $formapago['id'] }}">{{ $formapago['nombre'] }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                            <div id="detallestarjeta" style="display:none;">

                                            <div class="form-group row">
                                                <label for="tipotarjeta" class="col-sm-2 col-form-label">Cuotas</label>
                                                <div class="col-sm-10">
                                                    <select name="tipotarjeta" id="tipotarjeta" class="form-control">
                                                        <option value=""></option>
                                                        @foreach ($formaspagostarjetas as $formaspagostarjeta)
                                                            <option value="{{$formaspagostarjeta->recargo}}" id="{{$formaspagostarjeta->id}}">{{$formaspagostarjeta->nombre}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="montofinanciado" class="col-sm-2 col-form-label">Monto Financiado</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>

                                                        <input name="montofinanciado" id="montofinanciado" type="number" class="form-control" step=".01" placeholder="Monto a cancelar ..." readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lote" class="col-sm-2 col-form-label">Lote</label>
                                                <div class="col-sm-10">
                                                    <input name="lote" id="lote" type="text" class="form-control" placeholder="Lote ...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="autorizacion" class="col-sm-2 col-form-label">Autorizacion</label>
                                                <div class="col-sm-10">
                                                    <input name="autorizacion" id="autorizacion" type="text" class="form-control" placeholder="Autorizacion ...">
                                                </div>
                                            </div>

                            </div>


                            <div class="form-group row">
                                <label for="detalles" class="col-sm-2 col-form-label">Detalles</label>
                                <div class="col-sm-10">
                                    <input name="detalles" id="detalles" type="text" class="form-control" placeholder="Detalles ...">

                                </div>
                            </div>

                    </div>
                </div>




                    <!-- Cierra boton modal carga cliente -->



                    <!-- Boton de Carga de Orden. Llama a modal para carga de pin -->
                    <div class="card-footer">

                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargaot" id="ingresar" disabled="disabled">
                            <b>Cargar Recibo</b>
                        </button>

                    </div>


</div></div>




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
                $('#cuitcliente').val(ui.item.cuitcliente); // save selected id to input

                return false;
            }

        });


    });
</script>
<script>

    $(document).ready(function() {

                $(function() {
                    $('#formadepago').change(function(){
                        if($('#formadepago').val() == '2'){
                            $('#detallestarjeta').show();
                            $('#tipotarjeta').val('0');

                            calculotarjeta()
                        }
                        else{
                            $('#detallestarjeta').hide();
                            $('#montofinanciado').val(null);
                            $('#lote').val(null);
                            $('#autorizacion').val(null);
                            $('#tipotarjeta').val(null);
                        }
                    });
                });


        $(function() {
            $('#monto').keyup(function(){
                calculotarjeta()
            });
        });
        $(function() {
            $('#tipotarjeta').change(function(){
                calculotarjeta()
            });
        });





        $(document).ready(function (){
            $('#monto, #idclient').keyup(function(){
                if($("#monto").val().length && $("#idclient").val().length){
                    $("#ingresar").prop('disabled', false);
                } else {
                    $("#ingresar").prop('disabled', true);
                }
            });
        });



        function calculotarjeta() {
            var tasatarjeta = 1+(document.getElementById("tipotarjeta").value/100);
            var aux = document.getElementById("monto").value*tasatarjeta;
            document.getElementById("montofinanciado").value=aux.toFixed(2);

        }




                jQuery('#ajaxsubmit').click(function(e){
                    $('#cargapin').hide();
                    $('#loading-screen').show();
                    e.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    jQuery.ajax({
                        url: "{{ route('recibos.store') }}",
                        method: 'post',
                        data: {

                            pincode: jQuery('#pincode').val(),
                            idclient: jQuery('#idclient').val(),
                            monto: jQuery('#monto').val(),
                            formadepago: jQuery('#formadepago').val(),
                            tipotarjeta: jQuery('#tipotarjeta').val(),
                            montofinanciado: jQuery('#montofinanciado').val(),
                            lote: jQuery('#lote').val(),
                            autorizacion: jQuery('#autorizacion').val(),
                            detalles: jQuery('#detalles').val(),

                        },
                        success: function(result){
                            $('#loading-screen').hide();
                            if(result.errors)
                            {
                                $('#cargapin').show();
                                jQuery('.alert-danger').html('');

                                jQuery.each(result.errors, function(key, value){
                                    jQuery('.alert-danger').show();
                                    jQuery('.alert-danger').append('<li>'+value+'</li>');
                                });
                            }
                            else
                            {
                                jQuery('.alert-danger').hide();
                                jQuery('.anotacionot').hide();
                                location.reload();
                            }
                        }});
                });
    });
</script>







<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



@endsection








