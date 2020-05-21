

<!-- Modal de edicion de cliente -->

<div class="modal fade editaorden" tabindex="-1" role="dialog" aria-labelledby="editaorden" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="card card-warning">
                <form METHOD="post" action="{{ route('ordenes.update',$anotacionOt->id) }}" class="form-horizontal" autocomplete="off">
                    {{csrf_field()}}
                    <!-- ESTO ES PARA EL UPDATE NOMAS -->
                    @method('PUT')
                    <!-- Seccion Titular -->




                    <div class="card-header">
                        <h3 class="card-title"><b>Editar informacion de Orden de Trabajo</b></h3>
                    </div>



                    <!-- Seccion contenido Anotacion> -->

                    <div class="card-body">

                        <div class="form-group" style="display: none">
                            <label for="idcliente">Orden ID</label>
                            <input name="idcliente" id="idcliente" type="text" class="form-control" value="{{$anotacionOt->id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="estadoorden">ESTADO</label>
                            <input name="estadoorden" id="estadoorden" type="text" class="form-control" value="{{$anotacionOt->estado_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="categoriaorden">Categoria</label>
                            <input name="categoriaorden" id="categoriaorden" type="text" class="form-control" value="{{$anotacionOt->area_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="reparadoorden">Reparado</label>
                            <input name="reparadoorden" id="reparadoorden" type="text" class="form-control" value="{{$anotacionOt->reparaexito_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="tecnicoorden">Tecnico a cargo</label>
                            <input name="tecnicoorden" id="tecnicoorden" type="text" class="form-control" value="{{$anotacionOt->user_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaentregaorden">Fecha de entrega</label>
                            <input name="fechaentregaorden" id="fechaentregaorden" type="date" class="form-control" value="{{$anotacionOt->fechaentrega}}" required>
                        </div>
                        <div class="form-group">
                            <label for="presupuestoorden">Presupuesto</label>
                            <input name="presupuestoorden" id="presupuestoorden" type="number" class="form-control" value="{{$anotacionOt->presupuesto}}" required>
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


