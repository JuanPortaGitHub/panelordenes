<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotSpot Computación</title>
    <!-- Load Roboto font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Load css styles -->


    <link rel="stylesheet" type="text/css" href="/../css/pluton.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="/../css/pluton-ie7.css" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/../css/jquery.cslider.css" />
    <link rel="stylesheet" type="text/css" href="/../css/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="/../css/animate.css" />
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/../images/ico/favicon.ico">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/../adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/../css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="/../css/animate.css" />
    <link rel="stylesheet" href="/../css/consultaorden.css">



</head>

<body>



<div class="container-login100" style="background-image: url('/../../images/Fondo.png');">

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="/"> <img src="/../images/logo.png" id="logo"/></a>
                <!-- Navigation button, visible on small resolution -->

                <!-- Main navigation -->

                <ul class="nav" id="top-navigation">
                    <li class="active"><a href="/">Inicio</a></li>

                    <li><a href="/orden/consulta"><b>Consulta Orden</b></a></li>
                </ul>

                <!-- End main navigation -->
            </div>
        </div>
    </div>
    <!-- Service section start -->
    <div class="section primary-section" id="service">
        <div class="container">

            <div id="contenido">

                <div id="infoorden">
                    <div id="ot">
                        <div class="card card-primary collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title" style="font-size: medium">Datos Orden Nº <b>{{$orden->ot_id}}</b></h3>

                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" ><i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="card-body" style="font-size: small">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="estadoot">ESTADO</label>
                                            <input type="text" style="font-size: medium" id="estadoot" class="form-control" value="{{$orden->estado->estadoot}}" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Categoria">Categoria</label>
                                            <input type="text"  style="font-size: small" id="Categoria" class="form-control" value="{{$orden->area->areas}}" readonly>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Sucursal">Sucursal</label>
                                            <input type="text"  style="font-size: small" id="Sucursal" class="form-control" value="{{$orden->sucursal->sucursal}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="passwordot">Pasword Orden</label>
                                            <input type="text"  style="font-size: small" id="passwordot" class="form-control" value="{{$orden->passwordot}}" readonly>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Detalles">Detalles / Marcas / Roturas</label>
                                            <textarea  style="font-size: small"  id="Detalles" class="form-control" rows="4" readonly>{{$orden->detalles}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Sintoma">Sintomas / Reparaciones</label>
                                            <textarea  style="font-size: small" id="Sintoma" class="form-control" rows="4" readonly>{{$orden->sintoma}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Presupuesto">Presupuesto</label>
                                            <input type="number"  style="font-size: small" id="Presupuesto" class="form-control" value="{{$orden->presupuesto}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fechaingreso">Fecha de Ingreso</label>
                                            <input type="text"  style="font-size: small" id="fechaingreso" class="form-control" value="{{ \Carbon\Carbon::parse($orden->fechaingreso)->format('d-m-y H:i') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fechaentrega">Fecha de Entrega</label>
                                            <input type="text"  style="font-size: small" id="fechaentrega" class="form-control" value="{{ \Carbon\Carbon::parse($orden->fechaentrega)->format('d-m-y') }}" readonly>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div id="cliente">
                        <div class="card card-secondary collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title" style="font-size: medium">Datos Cliente</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body" style="font-size: small">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Apellido">Apellido</label>
                                            <input type="text" style="font-size: small"  id="Apellido" class="form-control" value="{{$orden->cliente->apellido}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Nombre">Nombre</label>
                                            <input type="text" style="font-size: small"  id="Nombre" class="form-control" value="{{$orden->cliente->nombre}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Celular">Celular</label>
                                            <input type="number" style="font-size: small"  id="Celular" class="form-control" value="{{$orden->cliente->telefono}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Telefono">Telefono</label>
                                            <input type="number" style="font-size: small"  id="Telefono" class="form-control" value="{{$orden->cliente->celular}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Mail">Mail</label>
                                            <input type="email" style="font-size: small"  id="Mail" class="form-control" value="{{$orden->cliente->mail}}" readonly>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div id="equipo">
                        <div class="card card-secondary collapsed-card">
                            <div class="card-header">
                                <h1 class="card-title" style="font-size: medium">Datos Equipo</h1>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body" style="font-size: small">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Categoria">Categoria</label>
                                            <input type="text"  style="font-size: small" id="Categoria" class="form-control" value="{{$orden->equipo->tipodeequipo->tipodeequipo}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Modelo">Modelo</label>
                                            <input type="text"  style="font-size: small" id="Modelo" class="form-control" value="{{$orden->equipo->modelo}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="text"  style="font-size: small" id="Password" class="form-control" value="{{$orden->equipo->password}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Cargador">Cargador</label>
                                            <input type="text"  style="font-size: small" id="Cargador" class="form-control"

                                                   @if($orden->equipo->cargador == 0)
                                                   value= 'Sin cargador'
                                                   @else
                                                   value= 'Con cargador'
                                                   @endif readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Bateria">Bateria</label>
                                            <input type="text"  style="font-size: small" id="Bateria" class="form-control"

                                                   @if($orden->equipo->bateria == 0)
                                                   value= 'Sin bateria'
                                                   @else
                                                   value= 'Con bateria'
                                                   @endif readonly>


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bolsofunda">Bolso o Funda</label>
                                            <input type="text"  style="font-size: small" id="bolsofunda" class="form-control"

                                                   @if($orden->equipo->bolsofunda == 0)
                                                   value= 'Sin bolso/funda'
                                                   @else
                                                   value='Con bolso/funda'
                                                   @endif readonly>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div id="datosorden">
                    <div id="confirma">
                        <div class="row">


                            <!-- /.Boton carga anotacion nueva (acciona modal) -->

                            <div class="col-md-2">


                            </div>
                            <div class="col-md-2">


                            </div>


                            <div class="col-md-2">





                                <label for="consultacliente" class="col-form-label">Estado de trabajo:</label>


                            </div>

                            <div class="col-md-3">
                                <input name="consultacliente" id="consultacliente" type="text" class="form-control" value="{{$orden->estado->estadoot}}" disabled>

                            </div>



                            <!-- /.Seccion que muestra estado y permite confirmacion OT (en estado presupuestada) -->


                            <div class="col-md-3">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".anotacionot">
                                    <b>Consultar</b>
                                </button>


                            </div>


                            <!-- /.Vacio a completar -->






                        </div>
                    </div>
                    <div id="tabla">
                        <!-- /.Tabla listado de anotaciones -->



                        <div class="col-md-12">
                            <div class="card">

                                <div class="col-md-12">

                                    <div class="card-body table-responsive p-0" style="height:600px">
                                        <table class="table text-nowrap">



                                            <thead>
                                            <tr>
                                                <th style="width: 15.00%">Fecha</th>
                                                <th style="width: 70.00%">Anotacion</th>
                                                <th style="width: 15.00%">Usuario</th>




                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($anotacionOt as $anotacion)

                                                @if(!isset($anotacion->user_id))<tr style="width: 15.00%; background-color: ghostwhite; font-family: Verdana; font-size: small">
                                                @else()<tr style="width: 15.00%; background-color: #FAD7A0; font-family: Verdana; font-size: small">
                                                    @endif
                                                    <td style="width: 15.00%; font-family: Verdana">{{ \Carbon\Carbon::parse($anotacion->created_at)->format('d/m/y H:i') }}</td>
                                                    <td style="white-space: pre;width: 70.00%;word-wrap: break-word; font-family: Verdana">{{$anotacion->anotacion}}@if($anotacion->interaccioncliente!=0)<form action="{{ route('confirmapresupuesto') }}" method="POST">{{ csrf_field() }}{{ method_field('GET') }}<div style="display: none"><input name="ot_id" id="ot_id" type="text" class="form-control" value="{{$orden->ot_id}}" required></div><div style="display: none"><input name="anotacionid" id="anotacionid" type="text" class="form-control" value="{{$anotacion->id}}" required></div>
                                                            <button class="btn btn-secondary btn-sm" type="submit" name = "submit" value = "Confirma">Confirmar</button> <button class="btn btn-secondary btn-sm" type="submit" name = "submit" value = "Rechaza">Rechazar</button></form>@endif</td>

                                                    <!-- /.COMBINA la columna user_id (de tecnicos) y cliente_id (de cliente) en una sola columna -->

                                                    @if(!isset($anotacion->user_id))
                                                        <td style="width: 15.00%; font-family: Verdana"> {{$anotacion->cliente->nombre}}
                                                    @else
                                                        <td style="width: 15.00%; font-family: Verdana"> <b>HotSpot</b>
                                                            @endif
                                                        </td>

                                                </tr>
                                                @endforeach



                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>

                            <!-- /.card-body -->

                            <!-- /.card -->
                        </div>

                    </div>
                </div>


            </div>

            <!-- /.Modal que se acciona de carga de anotaicones -->

            <div class="modal fade anotacionot" tabindex="-1" role="dialog" aria-labelledby="anotacionot" aria-hidden="true">
                <div class="modal-dialog modal-lg">

                    <div id="loading-screen" style="display: none; position: absolute; left: 50%; top: 50%; z-index: 1000; height: 80px; width: 80px;">
                        <img src="../adminlte/img/5-0.gif" height="40">
                        <b>Cargando...</b>
                    </div>

                    <div class="modal-content" id="contenido">

                        <div class="card card-warning">
                            <form METHOD="get" action="{{ route('storecliente') }}" class="form-horizontal" autocomplete="off">
                            {{csrf_field()}}

                            <!-- Seccion Titular -->




                                <div class="card-header">
                                    <div class="row"><h3 class="card-title"><b>Escribe cualquier duda o consulta sobre tu orden de trabajo. </b> </h3></div>
                                    <div class="row">Las consultas serán leídas y respondidas por nuestros técnicos a la mayor brevedad</div>
                                </div>



                                <!-- Seccion contenido Anotacion> -->

                                <div class="card-body">

                                    <div class="form-group" style="display: none">
                                        <label for="orden">Orden de Trabajo</label>

                                        <input name="orden" id="orden" type="text" class="form-control" value="{{$orden->ot_id}}" readonly>


                                    </div>

                                    <div class="form-group" style="display: none">
                                        <label for="cambioorden">Cambio de estado</label>

                                        <input name="cambioorden" id="cambioorden" type="text" class="form-control" value="{{$orden->estado_id}}" readonly>


                                    </div>

                                    <div class="form-group" style="display: none">
                                        <label for="orden">Orden de Trabajo</label>

                                        <input name="iddecliente" id="iddecliente" type="text" class="form-control" value="{{$orden->cliente->id}}" readonly>


                                    </div>

                                    <div class="form-group">


                                        <textarea class="form-control" rows="4" placeholder="Consulta ..." name="anotacion" id="anotacion"></textarea>

                                    </div>
                                    <div class="form-group" style="display:none">
                                        <label for="tecnico_id">Pincode</label>

                                        <input name="pincode" id="pincode" type="password" class="form-control" value="9999" readonly>


                                    </div>


                                    <!-- Botones de Formulario -->
                                    <div class="card-footer">
                                        <button  class="btn btn-info" id="ajaxSubmit">Ingresar consulta</button>
                                        <button type="reset" class="btn btn-default float-right">Limpiar</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="alert alert-danger" style="display:none"></div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


<!-- Footer section start -->
<div class="footer">
    <p>&copy; 2015 - HotSpot Computación</p>
</div>
<!-- Footer section end -->
<!-- ScrollUp button start -->
<div class="scrollup">
    <a href="#">
        <i class="icon-up-open"></i>
    </a>
</div>
<!-- ScrollUp button end -->





<!-- SCRIPT PARA VALIDACION DE MODAL -->
<script>

    jQuery(document).ready(function(){
        jQuery('#ajaxSubmit').click(function(e){
            $('#contenido').hide();
            $('#loading-screen').show();
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('storecliente') }}",
                method: 'GET',
                data: {
                    orden: jQuery('#orden').val(),
                    anotacion: jQuery('#anotacion').val(),
                    iddecliente: jQuery('#iddecliente').val(),
                },
                success: function(result){
                    $('#loading-screen').hide();
                    if(result.errors)
                    {
                        $('#contenido').show();
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
<script src="../adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



</body>
</html>
