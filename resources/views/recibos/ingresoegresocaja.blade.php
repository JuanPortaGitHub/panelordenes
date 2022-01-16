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

            <form METHOD="post" action="{{ route('recibos.storeingresoegresocaja') }}" class="form-horizontal" id="formcomplete" name="formcomplete">
            {{csrf_field()}}


                <div class="row">
                    <div class="col-md-6">
            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Carga Ingreso/Egreso Caja</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="local" class="col-sm-2 col-form-label">Local</label>
                            <div class="col-sm-10">
                                <select name="selectCaja" id="selectCaja" class="form-control" required>

                                    @foreach ($listacajas as $caja)
                                        @if($caja->sucursal_id == null)
                                            @continue
                                        @endif
                                        <option value="{{ $caja['id'] }}">{{ $caja['nombrecaja'] }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ingresoOegreso" class="col-sm-2 col-form-label">Tipo</label>
                            <div class="col-sm-10">
                                <select name="ingresoOegreso" id="ingresoOegreso" class="form-control" required>

                                        <option value="Ingreso">Ingreso</option>
                                        <option value="Egreso">Egreso</option>
                                        <option value="Retiro">Retiro</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="monto" class="col-sm-2 col-form-label">Monto</label>
                            <div class="col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>

                                <input name="monto" id="monto" type="number" class="form-control" step=".01" placeholder="Monto ..." required>
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

                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargaot" id="ingresar">
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

<script>

    $(document).ready(function() {


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
                        url: "{{ route('recibos.storeingresoegresocaja') }}",
                        method: 'post',
                        data: {

                            pincode: jQuery('#pincode').val(),
                            selectCaja: jQuery('#selectCaja').val(),
                            ingresoOegreso: jQuery('#ingresoOegreso').val(),
                            monto: jQuery('#monto').val(),
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








