@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->





            <div class="col-md-12">






        <p></p>






        <!-- FORMULARIO DE CARGA PROVEEDOR -->

        <section class="content">

            <form METHOD="post" action="{{ route('providers.store') }}" class="form-horizontal">
            {{csrf_field()}}


                <div class="row">
                    <div class="col-md-6">




                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Carga Proveedor Nuevo</b></h3>
                    </div>



                    <div class="card-body">



                        <div class="form-group row">
                            <label for="cuitprov" class="col-sm-2 col-form-label">CUIT</label>
                            <div class="col-sm-10">
                                <input name="cuitprov" id="cuitprov" type="number" class="form-control" required>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="condivaprov" class="col-sm-2 col-form-label">Condicion IVA</label>
                            <div class="col-sm-10">
                                <select name="condivaprov" id="condivaprov" class="form-control" required>
                                    <option></option>
                                    @foreach ($condivas as $condiva)
                                        <option value="{{ $condiva['id'] }}">{{ $condiva['condicion'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="razonsocialprov" class="col-sm-2 col-form-label">Razon Social</label>
                            <div class="col-sm-10">
                                <input name="razonsocialprov" id="razonsocialprov" type="text" class="form-control" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vendedorprov" class="col-sm-2 col-form-label">Vendedor</label>
                            <div class="col-sm-10">
                                <input name="vendedorprov" id="vendedorprov" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celularprov" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input name="celularprov" id="celularprov" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefonorprov" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input name="telefonorprov" id="telefonorprov" type="number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mailprov" class="col-sm-2 col-form-label">Mail</label>
                            <div class="col-sm-10">
                                <input name="mailprov" id="mailprov" type="text" class="form-control">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-warning"><b>Carga Proveedor Nuevo</b></button>
                                <button type="reset" class="btn btn-warning"><b>Limpiar</b>
                                </button>
                            </div>
                        </div>


                    </div>


                </div>





                </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </form>
            <!-- CIERRE DE FORMULARIO CARGA PROVEEDOR -->
        </section>
            </div>
    </div>











    <!-- /.content-wrapper -->






@endsection


@section("scriptextra")














<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



@endsection








