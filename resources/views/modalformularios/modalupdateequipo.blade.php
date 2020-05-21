

<!-- Modal de edicion de cliente -->

<div class="modal fade editaequipo" tabindex="-1" role="dialog" aria-labelledby="editaequipo" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="card card-warning">
                <form METHOD="post" action="{{ route('equipos.update',$anotacionOt->equipo->id) }}" class="form-horizontal" autocomplete="off">
                    {{csrf_field()}}
                    <!-- ESTO ES PARA EL UPDATE NOMAS -->
                    @method('PUT')
                    <!-- Seccion Titular -->




                    <div class="card-header">
                        <h3 class="card-title"><b>Editar informacion de equipo</b></h3>
                    </div>



                    <!-- Seccion contenido Anotacion> -->

                    <div class="card-body">

                        <div class="form-group" style="display: none">
                            <label for="idequipo">Cliente ID</label>
                            <input name="idequipo" id="idequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="categoriaequipo">Categoria</label>
                            <input name="categoriaequipo" id="categoriaequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->tipodeequipo_id}}" required>
                        </div>
                        <div class="form-group">
                            <label for="modeloequipo">Modelo</label>
                            <input name="modeloequipo" id="modeloequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->modelo}}" required>
                        </div>
                        <div class="form-group">
                            <label for="passwordequipo">Password</label>
                            <input name="passwordequipo" id="passwordequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->password}}" required>
                        </div>
                        <div class="form-group">
                            <label for="cargadorequipo">Cargador</label>
                            <input name="cargadorequipo" id="cargadorequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->cargador}}" required>
                        </div>
                        <div class="form-group">
                            <label for="bateriaequipo">Bateria</label>
                            <input name="bateriaequipo" id="bateriaequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->bateria}}" required>
                        </div>
                        <div class="form-group">
                            <label for="bolsoequipo">Bolso o funda</label>
                            <input name="bolsoequipo" id="bolsoequipo" type="text" class="form-control" value="{{$anotacionOt->equipo->bolsofunda}}" required>
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


