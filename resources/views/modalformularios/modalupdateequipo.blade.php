

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
                            <select name="categoriaequipo" class="form-control" required>
                                <option selected value="{{$anotacionOt->equipo->tipodeequipo['id']}}">{{ $anotacionOt->equipo->tipodeequipo['tipodeequipo']}}</option>
                                @foreach ($tipodeequipos as $tipodeequipo)
                                    <option value="{{ $tipodeequipo['id'] }}">{{ $tipodeequipo['tipodeequipo'] }}</option>
                                @endforeach

                            </select>
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
                            <select name="cargadorequipo" class="form-control" required>
                                <option selected value="{{$anotacionOt->equipo['cargador']}}">
                                    @if($anotacionOt->equipo->cargador==0) Sin cargador
                                    @elseif($anotacionOt->equipo->cargador==1) Con cargador
                                    @endif</option>

                                    <option value=0>Sin cargador</option>
                                    <option value=1>Con cargador</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bateriaequipo">Bateria</label>
                            <select name="bateriaequipo" class="form-control" required>
                                <option selected value="{{$anotacionOt->equipo['bateria']}}">
                                    @if($anotacionOt->equipo->bateria==0) Sin bateria
                                    @elseif($anotacionOt->equipo->bateria==1) Con bateria
                                    @endif</option>

                                <option value=0>Sin bateria</option>
                                <option value=1>Con bateria</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bolsoequipo">Bolso o funda</label>
                            <select name="bolsoequipo" class="form-control" required>
                                <option selected value="{{$anotacionOt->equipo['bolsofunda']}}">
                                    @if($anotacionOt->equipo->bolsofunda==0) Sin bolso/funda
                                    @elseif($anotacionOt->equipo->bolsofunda==1) Con bolso/funda
                                    @endif</option>

                                <option value=0>Sin bolso/funda</option>
                                <option value=1>Con bolso/funda</option>

                            </select>
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


