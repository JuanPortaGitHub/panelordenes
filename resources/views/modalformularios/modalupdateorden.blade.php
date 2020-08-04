

<!-- Modal de edicion de cliente -->

<div class="modal fade editaorden" tabindex="-1" role="dialog" aria-labelledby="editaorden" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div>
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
                        <div class="form-group" style="display: none">
                            <label for="estadoorden">ESTADO</label>
                            <select name="estadoorden" class="form-control" required>
                                <option selected value="{{$anotacionOt->estado['id']}}">{{ $anotacionOt->estado['estadoot']}}</option>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado['id'] }}">{{ $estado['estadoot'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoriaorden">Categoria</label>

                            <select name="categoriaorden" class="form-control" required>
                                <option selected value="{{$anotacionOt->area['id']}}">{{ $anotacionOt->area['areas']}}</option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area['id'] }}">{{ $area['areas'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group" style="display: none">
                            <label for="reparadoorden">Reparado</label>
                            <select name="reparadoorden" class="form-control" required>
                                <option selected value="{{$anotacionOt->reparaexito['id']}}">{{ $anotacionOt->reparaexito['reparadoconexito']}}</option>
                                @foreach ($reparados as $reparado)
                                    <option value="{{ $reparado['id'] }}">{{ $reparado['reparadoconexito'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tecnicoorden">Tecnico a cargo</label>
                            <select name="tecnicoorden" class="form-control" required>
                                <option selected value="{{$anotacionOt->user['id']}}">{{ $anotacionOt->user['name']}}</option>
                                @foreach ($tecnicos as $tecnico)
                                    <option value="{{ $tecnico['id'] }}">{{ $tecnico['name'] }}</option>
                                @endforeach

                            </select>
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

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


