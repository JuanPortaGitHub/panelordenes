

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
                            <label for="apellidocliente">Apellido</label>
                            <input name="apellidocliente" id="apellidocliente" type="text" class="form-control" value="{{$anotacionOt->cliente->apellido}}" required>
                        </div>
                        <div class="form-group">
                            <label for="nombrecliente">Nombre</label>
                            <input name="nombrecliente" id="nombrecliente" type="text" class="form-control" value="{{$anotacionOt->cliente->nombre}}" required>
                        </div>
                        <div class="form-group">
                            <label for="celularcliente">Celular</label>
                            <input name="celularcliente" id="celularcliente" type="text" class="form-control" value="{{$anotacionOt->cliente->celular}}" required>
                        </div>
                        <div class="form-group">
                            <label for="telefonocliente">Telefono</label>
                            <input name="telefonocliente" id="telefonocliente" type="text" class="form-control" value="{{$anotacionOt->cliente->telefono}}" required>
                        </div>
                        <div class="form-group">
                            <label for="mailcliente">Mail</label>
                            <input name="mailcliente" id="mailcliente" type="text" class="form-control" value="{{$anotacionOt->cliente->mail}}" required>
                        </div>
                        <!-- Botones de Formulario -->
                        <div class="card-footer" >
                            <button type="submit" class="btn btn-info">Editar</button>
                            <button type="reset" class="btn btn-info">Borrar Cambios</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


