<!-- Informacion de equipo -->

<div class="card card-secondary collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Datos Equipo</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" id="btnlessinfoequipo" data-toggle="tooltip" title="Collapse">
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

<!-- /.Parte visible incial (se esconde cuando se pide mas informacion -->
<div class="card-body" id="datosinicialesequipo">


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="Categoria">Categoria</label>
                <input type="text" id="Categoria" class="form-control" value="{{$anotacionOt->equipo->tipodeequipo->tipodeequipo}}" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Modelo">Modelo</label>
                <input type="text" id="Modelo" class="form-control" value="{{$anotacionOt->equipo->modelo}}" readonly>
            </div>
        </div>
    </div>
</div>
