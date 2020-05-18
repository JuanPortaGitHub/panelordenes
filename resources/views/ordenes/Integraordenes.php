@extends('layouts.layoutsecciones')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Carga Orden de Trabajo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->

    <section class="content">

        <form METHOD="post" action="{{ route('ordenes.store') }}" class="form-horizontal">
            {{csrf_field()}}

            <!-- Seccion Titular Cliente -->

            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos Cliente</b></h3>
                </div>


                <!-- Seccion contenido Cliente -->

                <div class="card-body">
                    <div class="form-group row">
                        <label for="apellidocliente" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-10">
                            <input name="apellidocliente" type="text" class="form-control" placeholder="Apellido ..."" >

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombrecliente" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input name="nombrecliente" type="text" class="form-control" placeholder="Nombre ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="celularcliente" class="col-sm-2 col-form-label">Celular</label>
                        <div class="col-sm-10">
                            <input name="celularcliente" type="text" class="form-control" placeholder="Celular ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefonocliente" class="col-sm-2 col-form-label">Telefono</label>
                        <div class="col-sm-10">
                            <input name="telefonocliente" type="text" class="form-control" placeholder="Telefono ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mailcliente" class="col-sm-2 col-form-label">Mail</label>
                        <div class="col-sm-10">
                            <input name="mailcliente" type="email" class="form-control" placeholder="Mail ...">
                        </div>
                    </div>

                </div>


                <!-- Seccion Titular Equipo -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Equipo</b></h3>
                    </div>
                </div>

                <!-- Seccion datos Equipo -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="categoriaequipo" class="col-sm-2 col-form-label">Categoria</label>
                        <div class="col-sm-10">
                            <input name="categoriaequipo" type="text" class="form-control" placeholder="Categoria ..."" >

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="modeloequipo" class="col-sm-2 col-form-label">Modelo Equipo</label>
                        <div class="col-sm-10">
                            <input name="modeloequipo" type="text" class="form-control" placeholder="Modelo Equipo ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passwordequipo" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="passwordequipo" type="text" class="form-control" placeholder="Password ...">
                        </div>
                    </div>
                    <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input name="cargador" type="checkbox" class="form-check-input" id="cargador">
                            <label class="form-check-label" for="cargador">Cargador</label>
                        </div>
                        <div class="form-check">
                            <input name="bateria" type="checkbox" class="form-check-input" id="bateria">
                            <label class="form-check-label" for="bateria">Bateria</label>
                        </div>
                        <div class="form-check">
                            <input name="bolsofunda" type="checkbox" class="form-check-input" id="bolsofunda">
                            <label class="form-check-label" for="bolsofunda">Bolso o Funda</label>
                        </div>
                    </div>
                </div>


                <!-- Seccion Titular Orden de Trabajo -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Reparacion</b></h3>
                    </div>
                </div>

                <!-- Seccion datos Orden de trabajo -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="sucursal" class="col-sm-2 col-form-label">Sucursal</label>
                        <div class="col-sm-10">
                            <select name="sucursal" class="form-control" placeholder="Sucursal ...">
                                @foreach ($sucursales as $sucursal)
                                <option value="{{ $sucursal['id'] }}">{{ $sucursal['sucursal'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-sm-10">
                            <select name="estado" class="form-control" disabled="disabled" placeholder="Indicar Estado de la Orden ...">
                                @foreach ($estados as $estado)
                                <option value="{{ $estado['id'] }}">{{ $estado['estadoot'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmacion" class="col-sm-2 col-form-label">Confirmacion</label>
                        <div class="col-sm-10">
                            <select name="confirmacion" class="form-control" placeholder="Presupuestar o Confirmada ...">
                                @foreach ($confirmacions as $confirmacion)
                                <option value="{{ $confirmacion['id'] }}">{{ $confirmacion['estadoconfirmacion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="recibidopor" class="col-sm-2 col-form-label">Recibido por:</label>
                        <div class="col-sm-10">
                            <input name="recibidopor" type="text" class="form-control" placeholder="Indicar quien hizo la recepcion ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tiporeparacion" class="col-sm-2 col-form-label">Tipo Reparacion</label>
                        <div class="col-sm-10">
                            <select name="tiporeparacion" class="form-control" placeholder="Indicar Hardware o Software ...">

                                <option value="Software">Software</option>
                                <option value="Hardware">Hardware</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombretecnico" class="col-sm-2 col-form-label">Tecnico Encargado</label>
                        <div class="col-sm-10">
                            <select name="nombretecnico" class="form-control" placeholder="Indicar Tecnico a cargo ...">
                                @foreach ($tecnicos as $tecnico)
                                <option value="{{ $tecnico['id'] }}">{{ $tecnico['nombretecnico'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="necesitarepuesto" class="col-sm-2 col-form-label">Repuesto</label>
                        <div class="col-sm-10">
                            <select name="necesitarepuesto" class="form-control" placeholder="Indicar repuesto ...">
                                @foreach ($estadoderepuestos as $estadoderepuesto)
                                <option value="{{ $estadoderepuesto['id'] }}">{{ $estadoderepuesto['estadoderepuesto'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="detalles" class="col-sm-2 col-form-label">Detalles / Roturas / Marcas</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Detalles, roturas y marcas del equipo ..." name="detalles"></textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sintoma" class="col-sm-2 col-form-label">Sintomas / Diagnostico</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Sintoma y diagnostico de corresponder ..." name="sintoma" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fechaingreso" class="col-sm-2 col-form-label">Fecha Ingreso</label>
                        <div class="col-sm-10">
                            <input name="fechaingreso" type="datetime-local" class="form-control" disabled=disabled value="{{now()->format('Y-m-d\TH:i')}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fechaentrega" class="col-sm-2 col-form-label">Fecha Entrega</label>
                        <div class="col-sm-10">
                            <input name="fechaentrega" type="date" class="form-control" value={{ $fechaentrega }} >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="presupuesto" class="col-sm-2 col-form-label">Presupuesto</label>
                        <div class="col-sm-10">
                            <input name="Presupuesto" type="text" class="form-control" placeholder="Presupuesto ...">
                        </div>
                    </div>

                </div>




                <!-- Botones de Formulario -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Ingresar</button>
                    <button type="submit" class="btn btn-default float-right">Borrar</button>
                </div>
            </div>



        </form>
    </section>


</div>



<!-- /.content-wrapper -->

@endsection



@section("scriptextra")








<!-- jQuery -->
<script src="../../adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../adminlte/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>



@endsection
