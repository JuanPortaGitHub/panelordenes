<!DOCTYPE html>

<html lang="es">
<head>


    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-ui-1.12.1/jquery-ui.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery-ui-1.12.1/jquery-3.5.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HotSpot | Ordenes de Trabajo</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/../adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/../adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>








        <div class="container-fluid">





        <div class="row">

            <div class="col-md-6">




                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Orden Nº <b>{{$orden->ot_id}}</b></h3>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse" ><i class="fas fa-plus"></i>
                            </button>

                        </div>
                    </div>
                    <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <label for="estadoot">ESTADO</label>
                                                <input type="text" id="estadoot" class="form-control" value="{{$orden->estado->estadoot}}" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Categoria">Categoria</label>
                                            <input type="text" id="Categoria" class="form-control" value="{{$orden->area->areas}}" readonly>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Sucursal">Sucursal</label>
                                                <input type="text" id="Sucursal" class="form-control" value="{{$orden->sucursal->sucursal}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="passwordot">Pasword Orden</label>
                                                <input type="text" id="passwordot" class="form-control" value="{{$orden->passwordot}}" readonly>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="reparadoconexito">Reparado</label>
                                                <input type="text" id="reparadoconexito" class="form-control" value="{{$orden->reparaexito->reparadoconexito}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="categoriareparacion">Categoria Reparacion</label>
                                                <input type="text" id="categoriareparacion" class="form-control" value="{{$orden->categoria->categoriareparacion}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputName">Tecnico a Cargo</label>
                                                <input type="text" id="Tecnico" class="form-control" value="" readonly>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Detalles">Detalles / Marcas / Roturas</label>
                                            <textarea id="Detalles" class="form-control" rows="4" readonly>{{$orden->detalles}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Sintoma">Sintomas / Reparaciones</label>
                                            <textarea id="Sintoma" class="form-control" rows="4" readonly>{{$orden->sintoma}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Presupuesto">Presupuesto</label>
                                            <input type="number" id="Presupuesto" class="form-control" value="{{$orden->presupuesto}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaingreso">Fecha de Ingreso</label>
                                            <input type="text" id="fechaingreso" class="form-control" value="{{ \Carbon\Carbon::parse($orden->fechaingreso)->format('d-m-y H:i') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaentrega">Fecha de Entrega</label>
                                            <input type="text" id="fechaentrega" class="form-control" value="{{ \Carbon\Carbon::parse($orden->fechaentrega)->format('d-m-y') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="encargadorecepcion">Encargado Recepcion</label>
                                            <input type="text" id="encargadorecepcion" class="form-control" value={{$orden->user->name}} readonly>
                                        </div>
                                    </div>
                                </div>



                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>



            <div class="col-md-6">

                <div class="card card-secondary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Cliente</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Apellido">Apellido</label>
                                        <input type="text" id="Apellido" class="form-control" value="{{$orden->cliente->apellido}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" id="Nombre" class="form-control" value="{{$orden->cliente->nombre}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="number" id="Celular" class="form-control" value="{{$orden->cliente->telefono}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Telefono">Telefono</label>
                                        <input type="number" id="Telefono" class="form-control" value="{{$orden->cliente->celular}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Mail">Mail</label>
                                        <input type="email" id="Mail" class="form-control" value="{{$orden->cliente->mail}}" readonly>
                                    </div>
                            </div>
                        </div>



                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-secondary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Equipo</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Categoria">Categoria</label>
                                        <input type="text" id="Categoria" class="form-control" value="{{$orden->equipo->tipodeequipo->tipodeequipo}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Modelo">Modelo</label>
                                        <input type="text" id="Modelo" class="form-control" value="{{$orden->equipo->modelo}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="text" id="Password" class="form-control" value="{{$orden->equipo->password}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Cargador">Cargador</label>
                                        <input type="text" id="Cargador" class="form-control"

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
                                        <input type="text" id="Bateria" class="form-control"

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
                                        <input type="text" id="bolsofunda" class="form-control"

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






        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">

                    <div class="row">


                        <!-- /.Boton carga anotacion nueva (acciona modal) -->

                        <div class="col-md-4">





                                <label for="consultacliente" class="col-form-label">Estado orden</label>
                                <input name="consultacliente" id="consultacliente" type="text" class="form-control" value="{{$orden->estado->estadoot}}" disabled>



                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".anotacionot">
                                <b>Cargar Anotacion</b>
                            </button>

                        </div>



                        <!-- /.Seccion que muestra estado y permite confirmacion OT (en estado presupuestada) -->


                        <div class="col-md-4">




                        </div>


                        <!-- /.Vacio a completar -->



                        <div class="col-md-4">


                        </div>



                    </div>

            </div>
        </div>






                    <!-- /.Modal que se acciona de carga de anotaicones -->

                    <div class="modal fade anotacionot" tabindex="-1" role="dialog" aria-labelledby="anotacionot" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                    <div class="card card-warning">
                                                    <form METHOD="post" action="{{ route('annotations.store') }}" class="form-horizontal" autocomplete="off">
                                                    {{csrf_field()}}

                                                    <!-- Seccion Titular -->




                                                            <div class="card-header">
                                                                <h3 class="card-title"><b>Ingresar Anotacion</b></h3>
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
                                                                    <label for="anotacion">Anotacion</label>

                                                                    <textarea class="form-control" rows="4" placeholder="Anotacion ..." name="anotacion" id="anotacion"></textarea>

                                                                </div>
                                                                <div class="form-group" style="display:none">
                                                                    <label for="tecnico_id">Pincode</label>

                                                                    <input name="pincode" id="pincode" type="password" class="form-control" value="9999" readonly>


                                                                </div>


                                                                <!-- Botones de Formulario -->
                                                                <div class="card-footer">
                                                                    <button type="submit" class="btn btn-info">Ingresar</button>
                                                                    <button type="reset" class="btn btn-default float-right">Limpiar</button>
                                                                </div>
                                                            </div>


                                                    </form>
                                    </div>
                            </div>
                        </div>
                    </div>





                    <!-- /.FIN de modal que se acciona de carga de anotaicones -->










                    <!-- /.Tabla listado de anotaciones -->


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                        <div class="col-md-12">

                                <div class="card-body table-responsive p-0" style="height:600px">
                                    <table class="table table-head-fixed text-nowrap ">



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
                                            @else()<tr style="width: 15.00%; background-color: orange; font-family: Verdana; font-size: small">
                                            @endif
                                                <td style="width: 15.00%; font-family: Verdana">{{ \Carbon\Carbon::parse($anotacion->created_at)->format('d/m/y H:i') }}</td>
                                                <td style="white-space: pre;width: 70.00%;word-wrap: break-word; font-family: Verdana">{{$anotacion->anotacion}}

                                                    @if($anotacion->interaccioncliente!=0)
                                                        <div class="row">
                                                        <form action="{{ route('confirmapresupuesto') }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('GET') }}

                                                            <div style="display: none"><input name="ot_id" id="ot_id" type="text" class="form-control" value="{{$orden->ot_id}}" required></div>
                                                            <div style="display: none"><input name="anotacionid" id="anotacionid" type="text" class="form-control" value="{{$anotacion->id}}" required></div>
                                                            <button class="btn btn-info" type="submit" name = "submit" value = "Confirma">Confirmar</button>
                                                            <button class="btn btn-info" type="submit" name = "submit" value = "Rechaza">Rechazar</button>

                                                        </form>
                                                        </div>
                                                    @endif





                                                </td>

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
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->




        </div><!-- /.container-fluid -->


        <!-- /.content -->

    <!-- /.content-wrapper -->




    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>



</body>
</html>
