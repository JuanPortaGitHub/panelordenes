@extends('layouts.layoutsecciones')

@section('content')









    <!-- Main content -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->





            <div class="col-md-12">

            <!-- Boton modal carga cliente -->

    @include('modalformularios.modalcargacliente')
    @include('modalformularios.modalcargaproductofactura')



        <p></p>






        <!-- FORMULARIO DE CARGA OT -->

        <section class="content">

            <form METHOD="post" action="{{ route('facturacion.store') }}" class="form-horizontal" id="formcomplete" name="formcomplete">
            {{csrf_field()}}


                <div class="row">
                    <div class="col-md-6">
            <!-- Seccion Titular Cliente -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos Cliente</b></h3>
                    </div>


                    <!-- Seccion contenido Cliente -->

                    <div class="card-body">


                        <div class="form-group row">
                            <label for="busquedacliente" class="col-sm-2 col-form-label form-control-sm">Buscar Cliente</label>
                            <div class="col-sm-10">
                                <input name="busquedacliente" id="busquedacliente" type="text" class="form-control form-control-sm" placeholder="Busca por apellido de cliente ...">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidocliente" class="col-sm-2 col-form-label form-control-sm">Apellido</label>
                            <div class="col-sm-10">
                                <input name="apellidocliente" id="apellidocliente" type="text" class="form-control form-control-sm" placeholder="Apellido ..." readonly required>

                            </div>
                        </div>
                        <div class="form-group row" style="display: none">
                            <label for="idclient" class="col-sm-2 col-form-label form-control-sm">ID</label>
                            <div class="col-sm-10">
                                <input name="idclient" id="idclient" type="text" class="form-control form-control-sm" placeholder="ID ..." required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombrecliente" class="col-sm-2 col-form-label form-control-sm">Nombre</label>
                            <div class="col-sm-10">
                                <input name="nombrecliente" id="nombrecliente" type="text" class="form-control form-control-sm" placeholder="Nombre ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celularcliente" class="col-sm-2 col-form-label form-control-sm">Celular</label>
                            <div class="col-sm-10">
                                <input name="celularcliente" id="celularcliente" type="text" class="form-control form-control-sm" placeholder="Celular ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="condivaclient" class="col-sm-2 col-form-label form-control-sm">Condicion IVA</label>
                            <div class="col-sm-10">
                                <input name="condivaclient" id="condivaclient" type="text" class="form-control form-control-sm"  readonly required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cuitcliente" class="col-sm-2 col-form-label form-control-sm">CUIT / DNI</label>
                            <div class="col-sm-10">
                                <input name="cuitcliente" id="cuitcliente" type="text" class="form-control form-control-sm" readonly required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefonocliente" class="col-sm-2 col-form-label form-control-sm">Telefono</label>
                            <div class="col-sm-10">
                                <input name="telefonocliente" id="telefonocliente" type="text" class="form-control form-control-sm" placeholder="Telefono ..." readonly required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mailcliente" class="col-sm-2 col-form-label form-control-sm">Mail</label>
                            <div class="col-sm-10">
                                <input name="mailcliente" id="mailcliente" type="email" class="form-control form-control-sm" placeholder="Mail ..." readonly>
                            </div>
                        </div>


                        <!-- Boton modal para edicion de equipo -->
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargacliente"><b>Carga cliente nuevo</b>
                                </button>
                            </div>
                        </div>


                    </div>
                    <!-- Cierra boton modal carga cliente -->

                </div>





                </div>
                    <div class="col-md-6">
                        <!-- Seccion Datos Factura -->



                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title"><b>Datos Factura</b> <i class="fas fa-square"></i> </h3>
                            </div>


                            <!-- Seccion contenido Cliente -->

                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="local" class="col-sm-2 col-form-label form-control-sm">SUCURSAL</label>
                                    <div class="col-sm-10">
                                        <select name="local" id="local" class="form-control form-control-sm" required>
                                            <option value=""></option>
                                            @foreach ($locales as $local)
                                                <option value="{{ $local['id'] }}">{{ $local['sucursal'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="fechafactura" class="col-sm-2 col-form-label form-control-sm">Fecha Factura</label>
                                    <div class="col-sm-10">
                                        <input name="fechafactura" id="fechafactura" type="datetime-local" class="form-control form-control-sm" value="{{now()->format('Y-m-d\TH:i')}}" required>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tipofactura" class="col-sm-2 col-form-label form-control-sm">Tipo Factura</label>
                                    <div class="col-sm-10">
                                        <input name="tipofactura" id="tipofactura" type="text" class="form-control form-control-sm" value="A" required>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="nrofactura" class="col-sm-2 col-form-label form-control-sm">Nro.</label>
                                    <div class="col-sm-10">
                                        <input name="nrofactura" id="nrofactura" type="text" class="form-control form-control-sm" value="0001-000000125" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cotizaciondolar" class="col-sm-2 col-form-label form-control-sm">Dolar</label>
                                    <div class="col-sm-10">
                                        <input name="cotizaciondolar" id="cotizaciondolar" type="text" class="form-control form-control-sm" value = 85 required>
                                    </div>
                                </div>





                            </div>
                            <!-- Cierra boton modal carga cliente -->

                        </div>





                    </div>
                </div>



                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Articulos</h3>

                                <div class="card-tools">

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" id="productosfactura">
                                    <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>COD</th>
                                        <th>ARTICULO</th>
                                        <th>DESCRIPCION</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO</th>
                                        <th>DTO</th>
                                        <th>SUBTOTAL</th>
                                        <th>IVA %</th>
                                        <th>IVA21</th>
                                        <th>IVA105</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr id="filaproductoagregado">
                                        <td id="nroproducto">1</td>
                                        <td><input  id="busquedaproducto" class="form-control form-control-sm" type="text" placeholder="Busca por cod o descripcion" required></td>
                                        <td><input  id="articuloproducto" name="articuloproducto" class="form-control form-control-sm" type="text" readonly required></td>
                                        <td><input  id="descripcionproducto" class="form-control form-control-sm" type="text" required></td>
                                        <td><input  id="cantprod" class="form-control form-control-sm" type="text" oninput="actualizasubtotal()" required></td>
                                        <td style="display:none;">
                                            <input  id="idprod" name="idprod" type="text" class="form-control" placeholder="ID ...">


                                        </td>
                                        <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text form-control-sm">$</span>
                                            </div>
                                            <input  id="precioprod" class="form-control form-control-sm" type="text" oninput="actualizasubtotal()" required>

                                        </div></td>
                                        <td>
                                            <div class="input-group mb-3">

                                                <input id="descprod" class="form-control form-control-sm" type="text" value = 0 oninput="actualizasubtotal()" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text form-control-sm">%</span>
                                                </div>
                                            </div>

                                        </td>
                                        <td id="subtotalarticulo"></td>
                                        <td id="ivaprod"></td>
                                        <td id="valorivaprod21"></td>
                                        <td id="valorivaprod105"></td>
                                    </tr>


                                    </tbody>
                                </table>
                                <div style="margin-left: 20px"><button type="button" class="btn btn-info" onclick="agregarFila()">Agregar Producto</button></div>
                                <div style="margin-left: 20px"><button type="button" class="btn-warning" onclick="eliminarFila()">Eliminar Fila</button></div>
                            </div>

                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>
                <!-- /.row -->


                <div class="row">

                    <div class="col-6">

                    </div>
                    <!-- /.col -->
                    <div class="col-6" >

                        <div class="table-responsive">
                            <table class="table" style="background-color: white">
                                <tbody>
                                <tr>
                                    <th>NETO 21%</th>
                                    <td id="sumneto21">0.00</td>
                                    <th>IVA 21%</th>
                                    <td id = "total21">0.00</td>

                                </tr>
                                <tr>
                                    <th>NETO 10.5%</th>
                                    <td id="sumneto105">0.00</td>
                                    <th>IVA 10.5%</th>
                                    <td id = "total105">0.00</td>

                                </tr>
                                <tr>
                                    <th>TOTAL NETO</th>
                                    <td id="totalneto">0.00</td>
                                    <th>TOTAL IVA</th>
                                    <td id="totalivas">0.00</td>

                                </tr>
                                <tr>
                                    <th colspan="2"><h3><b>TOTAL FACTURA</b></h3></th>
                                    <td id="montototalfinal" colspan="2" style="text-align: center"><h3><b>0.00</b></h3></td>

                                </tr>

                                </tbody></table>
                        </div>
                        <!-- Boton de Carga de Orden. Llama a modal para carga de pin -->
                        <div class="card-footer">

                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".cargafactura">
                                <b>Cargar Orden</b>
                            </button>
                            <button type="reset" class="btn btn-default float-right">Limpiar</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>





                <!-- Modal Carga de Pin -->
                <div class="modal fade cargafactura" tabindex="-1" role="dialog" aria-labelledby="cargaot" aria-hidden="true" id="carga">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">



                                    <!-- Seccion contenido Anotacion> -->

                                    <div class="card-body" id="cargapin">



                                        <div class="form-group">
                                            <label for="anotacion">Ingrese PIN</label>

                                            <input name="pincode" id="pincode" type="password" class="form-control" required placeholder="...">

                                        </div>


                                        <!-- Botones de Formulario -->
                                        <div class="card-footer" >
                                            <button type="submit" class="btn btn-info" id="ajaxsubmit">Ingresar</button>


                                        </div>
                                        <div class="alert alert-danger" style="display:none"></div>
                                    </div>
                            <div id="loading-screen" style="display: none; position: absolute; left: 50%; top: 50%;
                z-index: 1000;
                height: 80px;
                width: 80px;">
                                <img src="../adminlte/img/5-0.gif" height="40">
                                <b>Cargando...</b>
                            </div>



                        </div>
                    </div>
                </div>





            </form>
        </section>
            </div>
    </div>
            <!-- CIERRE DE FORMULARIO CARGA OT -->







    <!-- /.content-wrapper -->






@endsection


@section("scriptextra")








<!-- Script autocompletar campos cliente en base a apellido -->
<script type="text/javascript">








    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

        $( "#busquedacliente" ).autocomplete({
            source: function( request, response ) {
                // Fetch data
                $.ajax({
                    url:"{{route('clientes.getClientes')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function( data ) {

                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                $('#busquedacliente').val(ui.item.label); // display the selected text
                $('#apellidocliente').val(ui.item.apellidocliente); // save selected id to input
                $('#idclient').val(ui.item.idclient); // save selected id to input
                $('#nombrecliente').val(ui.item.nombrecliente); // save selected id to input
                $('#condivaclient').val(ui.item.condivacliente); // save selected id to input
                $('#cuitcliente').val(ui.item.cuitcliente); // save selected id to input
                $('#celularcliente').val(ui.item.celularcliente); // save selected id to input
                $('#telefonocliente').val(ui.item.telefonocliente); // save selected id to input
                $('#mailcliente').val(ui.item.mailcliente); // save selected id to input
                return false;
            }

        });




        busquedadeproducto();


    });


    function totalesfactura() {


        var table = document.getElementById("productosfactura");

        //Para sumar total columna 21
        sumVal21 = 0;
        for (var x=1; x < (table.rows.length); x++) sumVal21 = sumVal21 + parseFloat(table.rows[x].cells[10].innerHTML);
        TotNeto21 = sumVal21/0.21;
        document.getElementById("total21").innerText = sumVal21.toFixed(2) || 0.00;

        //Para sumar total columna 105
        sumVal105 = 0;
        for (var z=1; z < (table.rows.length); z++) sumVal105 = sumVal105 + parseFloat(table.rows[z].cells[11].innerHTML);
        TotNeto105 = sumVal105/0.105;
        document.getElementById("total105").innerText = sumVal105.toFixed(2) || 0.00;


        //Calculo de Totales netos al 21 y al 10.5


        document.getElementById("sumneto21").innerHTML = TotNeto21.toFixed(2) || 0.00;
        document.getElementById("sumneto105").innerHTML = TotNeto105.toFixed(2) || 0.00;

        //Calculo de totales de ivas y netos
        TotNetos = TotNeto21+TotNeto105;
        TotIvas = sumVal21+sumVal105;
        document.getElementById("totalneto").innerHTML = TotNetos.toFixed(2) || 0.00;
        document.getElementById("totalivas").innerHTML = TotIvas.toFixed(2) || 0.00;

        // Para poner monto final factura en base a columna de subtotales
        sumValFinal=0;
        for (var i=1; i < (table.rows.length); i++) sumValFinal = sumValFinal + parseFloat(table.rows[i].cells[8].innerHTML);
        document.getElementById("montototalfinal").innerHTML = "<h3><b>" + sumValFinal.toFixed(2) || 0.00+ "</b></h3>";


    }


    function actualizasubtotal(){


        var ivaprod = document.getElementById("ivaprod").innerText;

        var cantprodsuma = parseFloat(cantprod.value)|| 0;  //el "|| 0" es para que cualquier valor null ponga 0, sino ponia "NaN"
        var precioprodsuma = parseFloat(precioprod.value)|| 0;
        var descprodsuma = parseFloat(descprod.value)/100|| 0;



        //Para poner el valor del subtotal articulo
        var resultadosubtotal = (cantprodsuma * precioprodsuma * (1 - descprodsuma)).toFixed(2);
        document.getElementById("subtotalarticulo").innerText = resultadosubtotal;

        //Consulta y calcula el monto iva de acuerdo al tipo de iva
        if(ivaprod == 21){

            document.getElementById("valorivaprod21").innerText = (resultadosubtotal/1.21*0.21).toFixed(2); //Pone valor a columna iva del producto
            document.getElementById("valorivaprod105").innerText = 0; //Pone valor a columna iva del producto


        }
        if(ivaprod == 10.50){

            document.getElementById("valorivaprod105").innerText = (resultadosubtotal/1.105*0.105).toFixed(2); //Pone valor a columna iva del producto
            document.getElementById("valorivaprod21").innerText = 0; //Pone valor a columna iva del producto



        }

        totalesfactura();

    }

















    function agregarFila(){

        if(busquedaproducto.value==""){

            alert ('Falta cargar articulo');

        }else if(descripcionproducto.value==""){

            alert ('Falta cargar descripción');

        }else if(cantprod.value==""){

            alert ('Falta cargar cantidad');

        }else if(precioprod.value==""){

        alert ('Falta cargar precio de producto');

        }else if(descprod.value==""){

        alert ('Indicar si tiene descuento');

        }else{


        var table = document.getElementById("productosfactura");
        var fila = table.rows.length-1;

        var filaagrega = fila +1;

        var newbusquedaproducto = 'busquedaproducto'+fila;
        var newarticuloproducto= 'articuloproducto'+fila;
        var newdescripcionproducto= 'descripcionproducto'+fila;
        var newidprod= 'idprod'+fila;
        var newcantprod= 'cantprod'+fila;
        var newprecioprod= 'precioprod'+fila;
        var newdescprod= 'descprod'+fila;
        var newsubtotalprod= 'subtotalarticulo'+fila;
        var newivaprod= 'ivaprod'+fila;
        var newvalorivaprod21= 'valorivaprod21'+fila;
        var newvalorivaprod105= 'valorivaprod105'+fila;




        document.getElementById('busquedaproducto').readOnly = true;
        document.getElementById('busquedaproducto').setAttribute("name", newbusquedaproducto);
        document.getElementById('busquedaproducto').setAttribute("id", newbusquedaproducto);

        document.getElementById("articuloproducto").setAttribute("name", newarticuloproducto);
        document.getElementById("articuloproducto").setAttribute("id", newarticuloproducto);

        document.getElementById("descripcionproducto").readOnly = true;
        document.getElementById("descripcionproducto").setAttribute("name", newdescripcionproducto);
        document.getElementById("descripcionproducto").setAttribute("id", newdescripcionproducto);


        document.getElementById("idprod").readOnly = true;
        document.getElementById("idprod").setAttribute("name", newidprod);
        document.getElementById("idprod").setAttribute("id", newidprod);

        document.getElementById("cantprod").readOnly = true;
        document.getElementById("cantprod").setAttribute("name", newcantprod);
        document.getElementById("cantprod").setAttribute("id", newcantprod);

        document.getElementById("precioprod").readOnly = true;
        document.getElementById("precioprod").setAttribute("name", newprecioprod);
        document.getElementById("precioprod").setAttribute("id", newprecioprod);

        document.getElementById("descprod").readOnly = true;
        document.getElementById("descprod").setAttribute("name", newdescprod);
        document.getElementById("descprod").setAttribute("id", newdescprod);

        document.getElementById("subtotalarticulo").setAttribute("name", newsubtotalprod);
        document.getElementById("subtotalarticulo").setAttribute("id", newsubtotalprod);

        document.getElementById("ivaprod").setAttribute("name", newivaprod);
        document.getElementById("ivaprod").setAttribute("id", newivaprod);

        document.getElementById("valorivaprod21").setAttribute("name", newvalorivaprod21);
        document.getElementById("valorivaprod21").setAttribute("id", newvalorivaprod21);

        document.getElementById("valorivaprod105").setAttribute("name", newvalorivaprod105);
        document.getElementById("valorivaprod105").setAttribute("id", newvalorivaprod105);



        document.getElementById("productosfactura").insertRow(-1).innerHTML = "<td>"+filaagrega+"</td>\n" +
            "                                        <td><input name=\"busquedaproducto\" id=\"busquedaproducto\" class=\"form-control form-control-sm\" placeholder=\"Busca por cod o descripcion\" type=\"text\" required></td>\n" +
            "                                        <td><input name=\"articuloproducto\" id=\"articuloproducto\" class=\"form-control form-control-sm\" type=\"text\" readonly required></td>\n" +
            "                                        <td><input name=\"descripcionproducto\" id=\"descripcionproducto\" class=\"form-control form-control-sm\" type=\"text\" required></td>\n" +
            "                                        <td><input name=\"cantprod\" id=\"cantprod\" class=\"form-control form-control-sm\" type=\"text\" oninput=\"actualizasubtotal()\" required></td>\n" +
            "                                        <td style='display: none'><input  id=\"idprod\" type=\"text\" style='display: none' class=\"form-control\" placeholder=\"ID ...\"></td>\n" +
            "                                        <td>\n" +
            "\n" +
            "                                        <div class=\"input-group mb-3\">\n" +
            "                                            <div class=\"input-group-prepend\">\n" +
            "                                                <span class=\"input-group-text form-control-sm\">$</span>\n" +
            "                                            </div>\n" +
            "                                            <input name=\"precioprod\" id=\"precioprod\" class=\"form-control form-control-sm\" type=\"text\" oninput=\"actualizasubtotal()\" required>\n" +
            "\n" +
            "                                        </div></td>\n" +
            "                                        <td>\n" +
            "                                            <div class=\"input-group mb-3\">\n" +
            "\n" +
            "                                                <input name=\"descprod\" id=\"descprod\" class=\"form-control form-control-sm\" type=\"text\" value=0 oninput=\"actualizasubtotal()\" required>\n" +
            "                                                <div class=\"input-group-append\">\n" +
            "                                                    <span class=\"input-group-text form-control-sm\">%</span>\n" +
            "                                                </div>\n" +
            "                                            </div>\n" +
            "\n" +
            "                                        </td>\n" +
            "                                        <td id=\"subtotalarticulo\"></td>\n" +
            "                                        <td id=\"ivaprod\"></td>\n" +
            "                                        <td id=\"valorivaprod21\">0</td>\n" +
            "                                        <td id=\"valorivaprod105\">0</td>";




        busquedadeproducto();
        actualizasubtotal();
        document.getElementById("busquedaproducto").focus();

        }
    }












    function eliminarFila(){
        var table = document.getElementById("productosfactura");
        var rowCount = table.rows.length;
        var fila = table.rows.length-2;


        //console.log(rowCount);

        if(rowCount <= 1)
            alert('No se eliminar');
        else

        document.getElementById('busquedaproducto'+fila).setAttribute("name", 'busquedaproducto');
        document.getElementById('busquedaproducto'+fila).setAttribute("id", 'busquedaproducto');

        document.getElementById('articuloproducto'+fila).setAttribute("name", 'articuloproducto');
        document.getElementById('articuloproducto'+fila).setAttribute("id", 'articuloproducto');

        document.getElementById('descripcionproducto'+fila).setAttribute("name", 'descripcionproducto');
        document.getElementById('descripcionproducto'+fila).setAttribute("id", 'descripcionproducto');

        document.getElementById('idprod'+fila).setAttribute("name", 'idprod');
        document.getElementById('idprod'+fila).setAttribute("id", 'idprod');

        document.getElementById('cantprod'+fila).setAttribute("name", 'cantprod');
        document.getElementById('cantprod'+fila).setAttribute("id", 'cantprod');

        document.getElementById('precioprod'+fila).setAttribute("name", 'precioprod');
        document.getElementById('precioprod'+fila).setAttribute("id", 'precioprod');

        document.getElementById('descprod'+fila).setAttribute("name", 'descprod');
        document.getElementById('descprod'+fila).setAttribute("id", 'descprod');

        document.getElementById('subtotalarticulo'+fila).setAttribute("name", 'subtotalarticulo');
        document.getElementById('subtotalarticulo'+fila).setAttribute("id", 'subtotalarticulo');

        document.getElementById('ivaprod'+fila).setAttribute("name", 'ivaprod');
        document.getElementById('ivaprod'+fila).setAttribute("id", 'ivaprod');

        document.getElementById('valorivaprod21'+fila).setAttribute("name", 'valorivaprod21');
        document.getElementById('valorivaprod21'+fila).setAttribute("id", 'valorivaprod21');

        document.getElementById('valorivaprod105'+fila).setAttribute("name", 'valorivaprod105');
        document.getElementById('valorivaprod105'+fila).setAttribute("id", 'valorivaprod105');


            table.deleteRow(rowCount -1);

        document.getElementById('busquedaproducto').readOnly = false;
        document.getElementById('descripcionproducto').readOnly = false;
        document.getElementById('cantprod').readOnly = false;
        document.getElementById('precioprod').readOnly = false;
        document.getElementById('descprod').readOnly = false;


        actualizasubtotal();
        totalesfactura();

    }


    function busquedadeproducto(){

        $( "#busquedaproducto" ).autocomplete({



            source: function( request, response ) {
                // Fetch data
                $.ajax({
                    url:"{{route('productos.getProductosCod')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term
                    },
                    success: function( data ) {

                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                // Set selection
                $('#busquedaproducto').val(ui.item.label); // display the selected text
                $('#busquedaproducto').val(ui.item.codigoproducto); // save selected id to input
                $('#articuloproducto').val(ui.item.articuloproducto); // save selected id to input
                $('#descripcionproducto').val(ui.item.descripcionproducto); // save selected id to input
                $('#precioprod').val(cotizaciondolar * ui.item.costproducto*(1 + ui.item.margproducto / 100)); // CALCULA PRECIO EN BASE A COSTO, DOLAR Y MARGEN
                $('#ivaprod').html(ui.item.ivaproducto); // save selected id to input
                $('#idprod').val(ui.item.idproducto); // save selected id to input
                $('#cantprod').focus();
                return false;
            }

        });


    }


    jQuery('#ajaxsubmit').click(function(e){
        $('#cargapin').hide();
        $('#loading-screen').show();
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ route('facturacion.store') }}",
            method: 'post',
            data: {
                formcomplete: $('#formcomplete').serialize(), //array
                pincode: jQuery('#pincode').val(),
                fechafactura: jQuery('#fechafactura').val(),
                tipofactura: jQuery('#tipofactura').val(),
                nrofactura: jQuery('#nrofactura').val(),
                cotizaciondolar: jQuery('#cotizaciondolar').val(),
                local: jQuery('#local').val(),
                idclient: jQuery('#idclient').val(),



            },
            success: function(result){
                $('#loading-screen').hide();
                if(result.errors)
                {
                    $('#cargapin').show();
                    jQuery('.alert-danger').html('');

                    jQuery.each(result.errors, function(key, value){
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
                else
                {
                    jQuery('.alert-danger').hide();
                    jQuery('.anotacionot').hide();
                    location.reload();
                }
            }});
    });



</script>







<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/js/adminlte.min.js"></script>



@endsection








