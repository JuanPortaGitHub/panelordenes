<!-- Informacion de Orden -->

<div class="col-md-6">

    <div class="card card-primary collapsed-card">
        <div class="card-header">
            <h3 class="card-title">Datos Orden Nº <b>{{$anotacionOt->ot_id}}</b></h3>

            <div class="card-tools">

                <button type="button" class="btn btn-tool" data-card-widget="collapse" id="btnlessinfoot"><i class="fas fa-plus"></i>
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
                        <input type="text" id="fechaingreso" class="form-control" value="{{ \Carbon\Carbon::parse($anotacionOt->fechaingreso)->format('d-m-y H:i') }}" readonly>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="fechaentrega">Fecha de Entrega</label>
                        <input type="text" id="fechaentrega" class="form-control" value="{{ \Carbon\Carbon::parse($anotacionOt->fechaentrega)->format('d-m-y') }}" readonly>
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

    <!-- /.Parte visible incial (se esconde cuando se pide mas informacion -->
    <div class="card-body" id="datosinicialesot">


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="estadoot">ESTADO</label>
                    <input type="text" id="estadoot" class="form-control" value="{{$anotacionOt->estado->estadoot}}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="Presupuesto">Presupuesto</label>
                    <input type="number" id="Presupuesto" class="form-control" value="{{$anotacionOt->presupuesto}}" readonly>
                </div>
            </div>
        </div>
    </div>

</div>
