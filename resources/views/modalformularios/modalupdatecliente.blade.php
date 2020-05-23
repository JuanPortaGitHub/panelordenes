

<!-- Modal de edicion de cliente -->

<div class="modal fade editacliente" tabindex="-1" role="dialog" aria-labelledby="editacliente" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="card card-warning">
                <form METHOD="post" action="{{ route('clientes.update',$anotacionOt->cliente->id) }}" class="form-horizontal" autocomplete="off">
                    {{csrf_field()}}
                    <!-- ESTO ES PARA EL UPDATE NOMAS -->
                    @method('PUT')
                    <!-- Seccion Titular -->




                    <div class="card-header">
                        <h3 class="card-title"><b>Editar informacion de cliente</b></h3>
                    </div>



                    <!-- Seccion contenido Anotacion> -->

                    <div class="card-body">

                        <div class="form-group" style="display: none">
                            <label for="idcliente">Cliente ID</label>
                            <input name="idcliente" id="idcliente" type="text" class="form-control" value="{{$anotacionOt->cliente->id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input name="apellido" id="apellido" type="text" class="form-control" value="{{$anotacionOt->cliente->apellido}}" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input name="nombre" id="nombre" type="text" class="form-control" value="{{$anotacionOt->cliente->nombre}}" required>
                        </div>
                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input name="celular" id="celular" type="text" class="form-control" value="{{$anotacionOt->cliente->celular}}" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input name="telefono" id="telefono" type="text" class="form-control" value="{{$anotacionOt->cliente->telefono}}" required>
                        </div>
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input name="mail" id="mail" type="text" class="form-control" value="{{$anotacionOt->cliente->mail}}" required>
                        </div>
                        <!-- Botones de Formulario -->
                        <div class="card-footer" >
                            <button type="submit" class="btn btn-info">Editar</button>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


