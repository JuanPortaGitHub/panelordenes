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
                                                <input type="text" id="estadoot" class="form-control" value={{$orden->estado->estadoot}}>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="estadoot">Pasword Orden</label>
                                            <input type="text" id="estadoot" class="form-control" value={{$orden->passwordot}}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Sucursal">Sucursal</label>
                                                <input type="text" id="Sucursal" class="form-control" value={{$orden->sucursal->sucursal}}>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Categoria">Categoria</label>
                                                <input type="text" id="Categoria" class="form-control" value={{$orden->tiporeparacion}}>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="reparadoconexito">Reparado</label>
                                                <input type="text" id="reparadoconexito" class="form-control" value={{$orden->reparaexito->reparadoconexito}}>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="categoriareparacion">Categoria Reparacion</label>
                                                <input type="text" id="categoriareparacion" class="form-control" value={{$orden->categoria->categoriareparacion}}>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputName">Tecnico a Cargo</label>
                                                <input type="text" id="Tecnico" class="form-control" value={{$orden->user->name}}>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Detalles">Detalles / Marcas / Roturas</label>
                                            <textarea id="Detalles" class="form-control" rows="4">{{$orden->detalles}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Sintoma">Sintomas / Reparaciones</label>
                                            <textarea id="Sintoma" class="form-control" rows="4">{{$orden->sintoma}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Presupuesto">Presupuesto</label>
                                            <input type="number" id="Presupuesto" class="form-control" value={{$orden->presupuesto}}>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaingreso">Fecha de Ingreso</label>
                                            <input type="date" id="fechaingreso" class="form-control" value={{$orden->fechaingreso}}>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaentrega">Fecha de Entrega</label>
                                            <input type="date" id="fechaentrega" class="form-control" value={{$orden->fechaentrega}}>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="encargadorecepcion">Encargado Recepcion</label>
                                            <input type="text" id="encargadorecepcion" class="form-control" value={{$orden->user->name}}>
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
                                        <input type="text" id="Apellido" class="form-control" value={{$orden->cliente->apellido}}>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" id="Nombre" class="form-control" value={{$orden->cliente->nombre}}>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="number" id="Celular" class="form-control" value={{$orden->cliente->telefono}}>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Telefono">Telefono</label>
                                        <input type="number" id="Telefono" class="form-control" value={{$orden->cliente->celular}}>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Mail">Mail</label>
                                        <input type="email" id="Mail" class="form-control" value={{$orden->cliente->mail}}>
                                    </div>
                            </div>
                        </div>



                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-info  collapsed-card">
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
                                        <input type="text" id="Categoria" class="form-control" value={{$orden->equipo->categoriaequipo}}>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Modelo">Modelo</label>
                                        <input type="text" id="Modelo" class="form-control" value={{$orden->equipo->modelo}}>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="text" id="Password" class="form-control" value={{$orden->equipo->password}}>
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
                                        @endif>

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
                                        @endif>


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
                                                @endif>

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
                                <div class="col-md-3">



                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".anotacionot">
                                        <b>Cargar Anotacion</b>
                                    </button>
                                </div>

                                <div class="col-md-3">

                                </div>

                                <div class="col-md-3">

                                    </div>

                                <div class="col-md-3">

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

                                                                    <input name="orden" id="orden" type="text" class="form-control" value="{{$orden->ot_id}}">


                                                                </div>

                                                                <div class="form-group" style="display: none">
                                                                    <label for="orden">Orden de Trabajo</label>

                                                                    <input name="iddecliente" id="iddecliente" type="text" class="form-control" value="{{$orden->cliente->id}}">


                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="anotacion">Anotacion</label>

                                                                    <textarea class="form-control" rows="4" placeholder="Anotacion ..." name="anotacion" id="anotacion"></textarea>

                                                                </div>
                                                                <div class="form-group" style="display:none">
                                                                    <label for="tecnico_id">Pincode</label>

                                                                    <input name="pincode" id="pincode" type="password" class="form-control" value="9999">


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
                                    <table class="table table-head-fixed text-nowrap">



                                        <thead>
                                        <tr>
                                            <th style="width: 15.00%">Fecha</th>
                                            <th style="width: 70.00%">Anotacion</th>
                                            <th style="width: 15.00%">Usuario</th>




                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($anotacionOt as $anotacion)
                                            <tr>
                                                <td style="width: 15.00%">{{$anotacion->created_at}}</td>
                                                <td style="white-space: normal;width: 70.00%;word-wrap: break-word">{{$anotacion->anotacion}}</td>

                                                <!-- /.COMBINA la columna user_id (de tecnicos) y cliente_id (de cliente) en una sola columna -->

                                                <td style="width: 15.00%">@if(!isset($anotacion->user_id))
                                                        {{$anotacion->cliente->nombre}}
                                                    @else
                                                        {{$anotacion->user->name}}
                                                    @endif</td>

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
    </div>
    <!-- /.content-wrapper -->




    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>



</body>
</html>
