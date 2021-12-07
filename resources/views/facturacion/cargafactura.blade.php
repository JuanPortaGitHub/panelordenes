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
                                            <input name="busquedacliente" id="busquedacliente" type="text" class="form-control form-control-sm" placeholder="Busca por DNI/CUIT o apellido de cliente ...">

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
                                            <input name="idclient" id="idclient" type="text" class="form-control form-control-sm" placeholder="ID ...">

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
                                            <button type="button" id="cargacliente" class="btn btn-warning" data-toggle="modal" data-target=".cargacliente"><b>Carga cliente nuevo</b>
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
                                        <label for="facturar" class="col-sm-2 col-form-label form-control-sm">FACTURAR</label>
                                        <div class="col-sm-10">
                                            <select name="facturar" id="facturar" class="form-control form-control-sm" required>
                                                    <option value=1>NO</option>
                                                    <option value=0>SI</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="local" class="col-sm-2 col-form-label form-control-sm">SUCURSAL</label>
                                        <div class="col-sm-10">
                                            <select name="local" id="local" class="form-control form-control-sm" required>

                                                @foreach ($locales as $local)
                                                    <option value="{{ $local['id'] }}">{{ $local['sucursal'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="fechafactura" class="col-sm-2 col-form-label form-control-sm">Fecha Factura</label>
                                        <div class="col-sm-10">
                                            <input name="fechafactura" id="fechafactura" type="datetime-local" class="form-control form-control-sm" value="{{now()->format('Y-m-d\TH:i')}}" readonly required>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tipofactura" class="col-sm-2 col-form-label form-control-sm">Tipo Factura</label>
                                        <div class="col-sm-10">
                                            <input name="tipofactura" id="tipofactura" type="text" class="form-control form-control-sm" value="A" readonly required>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="nrolocalfactura" class="col-sm-2 col-form-label form-control-sm">Nro.</label>
                                        <div class="col-sm-3">
                                            <input name="nrolocalfactura" id="nrolocalfactura" type="text" readonly class="form-control form-control-sm" value = {{str_pad($factura->nrolocalfactura, 4, "0", STR_PAD_LEFT)}} required>
                                        </div>
                                        -
                                        <div class="col-sm-3">
                                            <input name="nrofactura" id="nrofactura" type="text" readonly class="form-control form-control-sm" value = {{str_pad($factura->numfactura +1, 8, "0", STR_PAD_LEFT)}} required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cotizaciondolar" class="col-sm-2 col-form-label form-control-sm">Dolar</label>
                                        <div class="col-sm-10">
                                            <input name="cotizaciondolar" id="cotizaciondolar" type="text" class="form-control form-control-sm" value = 100 readonly required>
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
                                            <td><input  id="busquedaproducto1" name="busquedaproducto[]" class="form-control form-control-sm" type="text" placeholder="Busca por cod o descripcion" required></td>
                                            <td><input  id="articuloproducto1" name="articuloproducto[]" class="form-control form-control-sm" type="text" readonly required></td>
                                            <td><input  id="descripcionproducto1" name="descripcionproducto[]" class="form-control form-control-sm" type="text" required></td>
                                            <td><input  id="cantprod1" name="cantprod[]" class="form-control form-control-sm" type="number" oninput="actualizasubtotal()" required></td>
                                            <td style="display:none;">
                                                <input  id="idprod1" name="idprod[]" type="text" class="form-control" placeholder="ID ...">


                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text form-control-sm">$</span>
                                                    </div>
                                                    <input  id="precioprod1" name="precioprod[]" class="form-control form-control-sm" type="number" step=".01"  oninput="actualizasubtotal()" required>

                                                </div></td>
                                            <td>
                                                <div class="input-group mb-3">

                                                    <input id="descprod1" name="descprod[]" class="form-control form-control-sm" type="text" oninput="actualizasubtotal()" value = 0  required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text form-control-sm">%</span>
                                                    </div>
                                                </div>

                                            </td>
                                            <td id="subtotalarticulo1"></td>
                                            <td id="ivaprod1"></td>
                                            <td id="valorivaprod211"></td>
                                            <td id="valorivaprod1051"></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <div style="margin-left: 20px"><button type="button" id="botonAgregarFila" class="btn btn-info" onclick="agregarFila()">Agregar Producto</button></div>
                                    <div style="margin-left: 20px"><button type="button" id="botonEliminarFila" class="btn-warning" onclick="eliminarFila()">Eliminar Fila</button></div>
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

                                <button type="button" class="btn btn-warning" id="abremodal" onclick="abrirmodal()">
                                    <b>Cargar Factura</b>
                                </button>

                                <button type="reset" class="btn btn-default float-right">Limpiar</button>

                            </div>
                        </div>
                        <!-- /.col -->
                    </div>







                    @include('modalformularios.modalformadepago')



                </form>
            </section>
        </div>
    </div>
    <!-- CIERRE DE FORMULARIO CARGA FACTURA -->






    <!-- /.content-wrapper -->






@endsection


@section("scriptextra")


    <script type="text/javascript">

        function abrirmodal(){



            if(document.forms['formcomplete']['busquedaproducto'+i].value === ""){
                alert ('Falta cargar articulo');
            }else if(document.forms['formcomplete']['descripcionproducto'+i].value === ""){
                alert ('Falta cargar descripción');
            }else if(document.forms['formcomplete']['cantprod'+i].value === ""){
                alert ('Falta cargar cantidad');
            }else if(document.forms['formcomplete']['precioprod'+i].value === ""){
                alert ('Falta cargar precio de producto');
            }else if(document.forms['formcomplete']['descprod'+i].value === ""){
                alert ('Indicar si tiene descuento');
            }else{


            if($('#apellidocliente').val()==""){

                alert("Cargar Cliente");
                return;}
           else if($('#articuloproducto1').val()==""){

                alert("Falta cargar articulo")

            }else {
               if($('#articuloproducto'+[i]).val()=="")
               alert("Borrar fila sin articulo");
               else{

                   document.forms['formcomplete']['busquedaproducto'+i].readOnly = true;
                   document.forms['formcomplete']['cantprod'+i].readOnly = true;
                   document.forms['formcomplete']['descripcionproducto'+i].readOnly = true;
                   document.forms['formcomplete']['precioprod'+i].readOnly = true;
                   document.forms['formcomplete']['descprod'+i].readOnly = true;
                   document.getElementById("botonEliminarFila").disabled = true;
                   document.getElementById("botonAgregarFila").disabled = true;
                   document.getElementById("cargacliente").disabled = true;
                   document.getElementById("local").readOnly = true;
                   document.getElementById("busquedacliente").disabled = true;

                   if (confirm('¿Autorizar con AFIP?')) {
                       document.getElementById('facturar').value = [0];
                   } else {
                       document.getElementById('facturar').value = [1];
                   }
                   $('#carga').modal('show');

               }
               }
        }
            }
    </script>




    <!-- Script autocompletar campos cliente en base a apellido -->
    <script type="text/javascript">







        var p=1;


        var i = 1;


        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){

            $( "#busquedacliente").autocomplete({
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
            document.getElementById("montoacancelar").innerText = sumValFinal.toFixed(2) || 0.00;
            document.getElementById("saldoacancelar").innerText = sumValFinal.toFixed(2) || 0.00;
            document.getElementById("montocancelado").value = sumValFinal.toFixed(2) || 0.00;



        }












        function agregarFila(){



            if(document.forms['formcomplete']['busquedaproducto'+i].value === ""){

                alert ('Falta cargar articulo');

            }else if(document.forms['formcomplete']['busquedaproducto'+i].value === ""){

                alert ('Falta cargar descripción');

            }else if(document.forms['formcomplete']['cantprod'+i].value === ""){

                alert ('Falta cargar cantidad');

            }else if(document.forms['formcomplete']['precioprod'+i].value === ""){

                alert ('Falta cargar precio de producto');

            }else if(document.forms['formcomplete']['descprod'+i].value === ""){

                alert ('Indicar si tiene descuento');

            }else{


                document.forms['formcomplete']['busquedaproducto'+i].readOnly = true;
                document.forms['formcomplete']['cantprod'+i].readOnly = true;
                document.forms['formcomplete']['descripcionproducto'+i].readOnly = true;
                document.forms['formcomplete']['precioprod'+i].readOnly = true;
                document.forms['formcomplete']['descprod'+i].readOnly = true;

                i++;

                $('#productosfactura').append('<tr id="filaproductoagregado" name="filaproductoagregado'+i+'">' +
                    '<td id="nroproducto">'+i+'</td>' +
                    '<td><input  id="busquedaproducto'+i+'" name="busquedaproducto[]" class="form-control form-control-sm" type="text" placeholder="Busca por cod o descripcion" required></td>' +
                    '<td><input  id="articuloproducto'+i+'" name="articuloproducto[]" class="form-control form-control-sm" type="text" readonly required></td>' +
                    '<td><input  id="descripcionproducto'+i+'" name="descripcionproducto[]" class="form-control form-control-sm" type="text" required></td>' +
                    '<td><input  id="cantprod'+i+'" name="cantprod[]" class="form-control form-control-sm" type="number" oninput="actualizasubtotal()" required></td>' +
                    '<td style="display:none;">' +
                    '<input  id="idprod'+i+'" name="idprod[]" type="text" class="form-control" placeholder="ID ...">' +
                    '</td>' +
                    '<td>' +
                    '<div class="input-group mb-3">' +
                    '<div class="input-group-prepend">' +
                    '<span class="input-group-text form-control-sm">$</span>\<' +
                    '/div>' +
                    '<input  id="precioprod'+i+'" name="precioprod[]" class="form-control form-control-sm" type="number" oninput="actualizasubtotal()" required>' +
                    '</div></td>' +
                    '<td>' +
                    '<div class="input-group mb-3">' +
                    '<input id="descprod'+i+'" name="descprod[]" class="form-control form-control-sm" type="text" value = 0 oninput="actualizasubtotal()" required>' +
                    '<div class="input-group-append">' +
                    '<span class="input-group-text form-control-sm">%</span>' +
                    '</div>' +
                    '</div>' +
                    '</td>' +
                    '<td id="subtotalarticulo'+i+'"></td>' +
                    '<td id="ivaprod'+i+'"></td>' +
                    '<td id="valorivaprod21'+i+'"></td>' +
                    '<td id="valorivaprod105'+i+'"></td>' +
                    '</tr>');


                busquedadeproducto();
                document.getElementById("busquedaproducto"+i).focus();

            }
            actualizasubtotal(i);
            totalesfactura();
        }












        function eliminarFila(){
            var table = document.getElementById("productosfactura");
            var rowCount = table.rows.length;



            //console.log(rowCount);

            if(rowCount == 2){
                alert('No se eliminar');
            }
            else{

                i=i-1;

                table.deleteRow(rowCount -1);

                document.getElementById('busquedaproducto'+i).readOnly = false;
                document.getElementById('descripcionproducto'+i).readOnly = false;
                document.getElementById('cantprod'+i).readOnly = false;
                document.getElementById('precioprod'+i).readOnly = false;
                document.getElementById('descprod'+i).readOnly = false;
            }

            totalesfactura();

        }


        function busquedadeproducto(){


            $( "#busquedaproducto"+i ).autocomplete({




                source: function( request, response ) {
                    // Fetch data
                    $.ajax({
                        url:"{{route('productos.getProductosCod')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                            _token: CSRF_TOKEN,
                            search: request.term,
                        },
                        success: function( data ) {

                            response( data );
                        }
                    });

                },



                select: function (event, ui) {
                    var cotizacion =document.getElementById('cotizaciondolar').value;
                    // Set selection
                    $('#busquedaproducto'+i).val(ui.item.label); // display the selected text
                    $('#busquedaproducto'+i).val(ui.item.codigoproducto); // save selected id to input
                    $('#articuloproducto'+i).val(ui.item.articuloproducto); // save selected id to input
                    $('#descripcionproducto'+i).val(ui.item.descripcionproducto); // save selected id to input
                    var calculo = ui.item.costproducto*(1 + ui.item.margproducto / 100)*cotizacion;
                    $('#precioprod'+i).val(calculo.toFixed(2)); // CALCULA PRECIO EN BASE A COSTO, DOLAR Y MARGEN
                    $('#ivaprod'+i).html(ui.item.ivaproducto); // save selected id to input
                    $('#idprod'+i).val(ui.item.idproducto); // save selected id to input
                    $('#cantprod'+i).val("");
                    $('#cantprod'+i).focus();
                    actualizasubtotal();
                    return false;

                }

            });


        }



        function actualizasubtotal(){


            var ivaprod = document.getElementById('ivaprod'+i).innerText;


            var cantprodsuma = parseFloat(document.forms['formcomplete']['cantprod'+i].value)|| 0;  //el "|| 0" es para que cualquier valor null ponga 0, sino ponia "NaN"
            var precioprodsuma = parseFloat(document.forms['formcomplete']['precioprod'+i].value)|| 0;
            var descprodsuma = parseFloat(document.forms['formcomplete']['descprod'+i].value)/100|| 0;



            //Para poner el valor del subtotal articulo
            var resultadosubtotal = (cantprodsuma * precioprodsuma * (1 - descprodsuma)).toFixed(2);
            document.getElementById('subtotalarticulo'+i).innerText = resultadosubtotal;

            //Consulta y calcula el monto iva de acuerdo al tipo de iva
            if(ivaprod == 21){

                document.getElementById('valorivaprod21'+i).innerText = (resultadosubtotal/1.21*0.21).toFixed(2); //Pone valor a columna iva del producto
                document.getElementById('valorivaprod105'+i).innerText = 0; //Pone valor a columna iva del producto


            }
            if(ivaprod == 10.50){

                document.getElementById('valorivaprod105'+i).innerText = (resultadosubtotal/1.105*0.105).toFixed(2); //Pone valor a columna iva del producto
                document.getElementById('valorivaprod21'+i).innerText = 0; //Pone valor a columna iva del producto



            }

            totalesfactura();

        }




    </script>







    <!-- jQuery -->

    <!-- Bootstrap 4 -->
    <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../adminlte/js/adminlte.min.js"></script>



@endsection








