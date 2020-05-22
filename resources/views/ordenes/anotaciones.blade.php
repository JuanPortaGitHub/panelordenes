@extends('layouts.layoutsecciones')

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







        <div class="container-fluid">


        <div class="row">



            <!-- Informacion de Orden -->

            <div class="col-md-6">

                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Orden Nº <b>{{$anotacionOt->ot_id}}</b></h3>

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
                                                <input type="text" id="estadoot" class="form-control" value="{{$anotacionOt->estado->estadoot}}" readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Categoria">Categoria</label>
                                            <input type="text" id="Categoria" class="form-control" value="{{$anotacionOt->area->areas}}" readonly>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Sucursal">Sucursal</label>
                                                <input type="text" id="Sucursal" class="form-control" value="{{$anotacionOt->sucursal->sucursal}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="passwordot">Pasword Orden</label>
                                            <input type="text" id="passwordot" class="form-control" value="{{$anotacionOt->passwordot}}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="reparadoconexito">Reparado</label>
                                                <input type="text" id="reparadoconexito" class="form-control" value="{{$anotacionOt->reparaexito->reparadoconexito}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="categoriareparacion">Categoria Reparacion</label>
                                                <input type="text" id="categoriareparacion" class="form-control" value="{{$anotacionOt->categoria->categoriareparacion}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputName">Tecnico a Cargo</label>
                                                <input type="text" id="Tecnico" class="form-control" value="{{$anotacionOt->user->name}}" readonly>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Detalles">Detalles / Marcas / Roturas</label>
                                            <textarea id="Detalles" class="form-control" rows="4" readonly>{{$anotacionOt->detalles}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Sintoma">Sintomas / Reparaciones</label>
                                            <textarea id="Sintoma" class="form-control" rows="4" readonly>{{$anotacionOt->sintoma}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Presupuesto">Presupuesto</label>
                                            <input type="number" id="Presupuesto" class="form-control" value="{{$anotacionOt->presupuesto}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaingreso">Fecha de Ingreso</label>
                                            <input type="datetime-local" id="fechaingreso" class="form-control" value="{{$anotacionOt->fechaingreso}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fechaentrega">Fecha de Entrega</label>
                                            <input type="date" id="fechaentrega" class="form-control" value="{{$anotacionOt->fechaentrega}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="encargadorecepcion">Encargado Recepcion</label>
                                            <input type="text" id="encargadorecepcion" class="form-control" value="{{$anotacionOt->recibidopor_id}}" readonly>
                                        </div>
                                    </div>
                                </div>


                        <!-- Boton modal para edicion de orden -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".editaorden"><b>Editar</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>




           @include('modalformularios.modalupdateorden')







            <!-- Informacion de cliente -->

            <div class="col-md-6">

                <div class="card card-info  collapsed-card">
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
                                        <input type="text" id="Apellido" class="form-control" value="{{$anotacionOt->cliente->apellido}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" id="Nombre" class="form-control" value="{{$anotacionOt->cliente->nombre}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="number" id="Celular" class="form-control" value="{{$anotacionOt->cliente->telefono}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Telefono">Telefono</label>
                                        <input type="number" id="Telefono" class="form-control" value="{{$anotacionOt->cliente->celular}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Mail">Mail</label>
                                        <input type="email" id="Mail" class="form-control" value="{{$anotacionOt->cliente->mail}}" readonly>
                                    </div>
                            </div>
                        </div>


                        <!-- Boton modal para edicion de cliente -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".editacliente"><b>Editar</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            @include('modalformularios.modalupdatecliente')













            <!-- Informacion de equipo -->

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
                                        <input type="text" id="Categoria" class="form-control" value="{{$anotacionOt->equipo->tipodeequipo->tipodeequipo}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Modelo">Modelo</label>
                                        <input type="text" id="Modelo" class="form-control" value="{{$anotacionOt->equipo->modelo}}" readonly>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="text" id="Password" class="form-control" value="{{$anotacionOt->equipo->password}}" readonly>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Cargador">Cargador</label>
                                        <input type="text" id="Cargador" class="form-control"

                                        @if($anotacionOt->equipo->cargador == 0)
                                        value= 'Sin cargador'
                                        @else
                                        value= 'Con cargador'
                                        @endif readonly>

                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Bateria">Bateria</label>
                                        <input type="text" id="Bateria" class="form-control readonly"

                                        @if($anotacionOt->equipo->bateria == 0)
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

                                                @if($anotacionOt->equipo->bolsofunda == 0)
                                                    value= 'Sin bolso/funda'
                                                @else
                                                    value='Con bolso/funda'
                                                @endif readonly>

                                    </div>
                            </div>
                        </div>



                        <!-- Boton modal para edicion de equipo -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".editaequipo"><b>Editar</b>
                                </button>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>


        @include('modalformularios.modalupdateequipo')





            <!-- SECCION ANOTACIONES -->

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




                    <!-- /.Modal que se acciona para carga de anotaciones -->

                    <div class="modal fade anotacionot" tabindex="-1" role="dialog" aria-labelledby="anotacionot" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                    <div class="card card-warning">
                                                    <form METHOD="post" action="{{ route('annotations.store') }}" class="form-horizontal" autocomplete="off">
                                                    {{csrf_field()}}

                                                    <!-- Seccion Titular -->




                                                            <div class="card-header">
                                                                <h3 class="card-title"><b>Ingresar a Orden de Trabajo</b></h3>
                                                            </div>



                                                            <!-- Seccion contenido Anotacion> -->

                                                            <div class="card-body">

                                                                <div class="form-group" style="display: none">
                                                                    <label for="orden">Orden de Trabajo</label>

                                                                    <input name="orden" id="orden" type="text" class="form-control" value="{{$anotacionOt->ot_id}}">


                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="anotacion">Anotacion</label>

                                                                    <textarea class="form-control" rows="4" placeholder="Anotacion ..." name="anotacion" id="anotacion"></textarea>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tecnico_id">Pincode</label>

                                                                    <input name="pincode" id="pincode" type="password" class="form-control" placeholder="Pin ...">


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


                                                @foreach($anotaciones as $anotacion)
                                        <tr
                                                    @if(isset($anotacion->cliente_id) && $anotacion->visiblecliente == 1) bgcolor="#ffb6c1"
                                                    @elseif(isset($anotacion->user_id) && ($anotacion->visiblecliente == 1)) bgcolor="#8fbc8f"
                                                    @elseif(isset($anotacion->user_id) && ($anotacion->visiblecliente == 0)) bgcolor="#d3d3d3"

                                                    @endif>
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




@endsection


@section("scriptextra")


    <!-- jQuery -->
    <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>


@endsection
