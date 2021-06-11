@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->





            <div class="col-md-12">






        <p></p>






        <!-- FORMULARIO DE EDICION PRODUCTO -->

        <section class="content">

            <form METHOD="post" action="{{ route('productos.update',$product->id) }}" class="form-horizontal">
            {{csrf_field()}}
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">




                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Editar Producto</b></h3>
                    </div>



                    <div class="card-body">



                        <div class="form-group row">
                            <label for="codigoproducto" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <input name="codigoproducto" id="codigoproducto" type="text" class="form-control" value="{{$product->cod}}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="articuloproducto" class="col-sm-2 col-form-label">Artículo</label>
                            <div class="col-sm-10">
                                <input name="articuloproducto" id="articuloproducto" type="text" class="form-control" value="{{$product->art}}" required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcionproducto" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input name="descripcionproducto" id="descripcionproducto" type="text" class="form-control" value="{{$product->description}}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="costoproducto" class="col-sm-2 col-form-label">Costo Iva inc.</label>
                            <div class="col-sm-10">
                                <input name="costoproducto" id="costoproducto" type="number" class="form-control" value="{{$product->costproduct}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="margenproducto" class="col-sm-2 col-form-label">Margen Utilidad</label>
                            <div class="col-sm-10">
                                <input name="margenproducto" id="margenproducto" type="text" class="form-control" value="{{$product->margin}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="precioproducto" class="col-sm-2 col-form-label">Precio IVA inc.</label>
                            <div class="col-sm-10">
                                <input name="precioproducto" id="precioproducto" type="number" class="form-control" value="{{$product->priceproduct}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ivaproducto" class="col-sm-2 col-form-label">IVA</label>
                            <div class="col-sm-10">
                                <select name="ivaproducto" id="ivaproducto" class="form-control" required>
                                    <option selected value={{$product->ivaproduct}}>{{$product->ivaproduct}}</option>
                                    <option>21</option>
                                    <option>10.5</option>

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-warning"><b>Actualizar Producto</b>
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

            <form action="{{ route('productos.destroy', $product->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Borrar</button>
            </form>
            <!-- CIERRE DE FORMULARIO CARGA PRODUCTO -->
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








