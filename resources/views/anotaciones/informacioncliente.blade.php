<!-- Informacion de cliente -->

<div class="col-md-6">

    <div class="card card-secondary collapsed-card">
        <div class="card-header">
            <h3 class="card-title">Datos Cliente</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" id="btnlessinfocliente" data-toggle="tooltip" title="Collapse">
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
    <!-- /.Parte visible incial (se esconde cuando se pide mas informacion -->
    <div class="card-body" id="datosinicialescliente">


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
    </div>

