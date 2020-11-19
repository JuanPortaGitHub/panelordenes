

<!-- Modal de edicion de cliente -->

<div class="modal fade cargacliente" tabindex="-1" role="dialog" aria-labelledby="cargacliente" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <section class="content">
                <form METHOD="post" action="{{ route('clientes.store') }}" class="form-horizontal" autocomplete="off">
                {{csrf_field()}}

                <!-- Seccion Titular Cliente -->



                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"><b>Datos Cliente</b></h3>
                        </div>


                        <!-- Seccion contenido Cliente -->

                        <div class="card-body">



                            <div class="form-group row">
                                <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                <div class="col-sm-10">
                                    <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido ..." required>

                                </div>
                            </div>
                            <div class="form-group row" style="display: none;">
                                <label for="idclient" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <input name="idcliente" id="idcliente" type="text" class="form-control" placeholder="ID ...">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre ..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-10">
                                    <input name="celular" id="celular" type="text" class="form-control" placeholder="Celular ..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-10">
                                    <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Telefono ..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mail" class="col-sm-2 col-form-label">Mail</label>
                                <div class="col-sm-10">
                                    <input name="mail" id="mail" type="text" class="form-control" placeholder="Mail ..." required>
                                </div>
                            </div>
                            <!-- Botones de Formulario -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Agregar</button>
                                <button type="reset" class="btn btn-default float-right">Limpiar</button>
                            </div>
                        </div>
                    </div>

                </form>
            </section>
        </div>
    </div>
</div>


