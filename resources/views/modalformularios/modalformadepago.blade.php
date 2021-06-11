
<!-- /.Modal forma de pago -->

<div class="modal fade cargafactura" tabindex="-1" role="dialog" aria-labelledby="cargaot" aria-hidden="true" id="carga">
    <div class="modal-dialog modal-lg">
        <div id="loading-screen" style="display: none; position: absolute; left: 50%; top: 50%;
                z-index: 1000;
                height: 80px;
                width: 80px;">
            <img src="../adminlte/img/5-0.gif" height="40">
            <b>Cargando...</b>
        </div>
        <div class="modal-content" id="contenido">

            <div class="card card-warning">






                <div class="card-header">
                    <h3 class="card-title"><b>Ingresar Pago</b></h3>
                </div>

                <!-- Seccion Titular IMPORTANTE EL ENVIO DE FORMULARIO SE HACE ABAJO CON UN AJAX MODIFICAR AHI-->


                <!-- Seccion contenido> -->





                <div class="card-body">



                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td style="width: 30%"><b>Monto a Cancelar</b></td>
                            <td style="width: 50%"></td>
                            <td id="montoacancelar" style="width: 20%"><b>0.00</b></td>
                        </tr>
                    </table>



                    <table class="table table-hover text-nowrap" id="Detallepago">

                        <tbody>







                        </tbody>



                    </table>




                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td style="width: 30%">Pagado</td>
                            <td style="width: 50%"></td>
                            <td id="totalmontopagado" style="width: 20%"><b>0.00</b></td>
                        </tr>
                    </table>

                    <table class="table table-hover text-nowrap">
                        <tr>
                            <td style="width: 30%"><b>Saldo</b></td>
                            <td style="width: 50%"></td>
                            <td id="saldoacancelar" style="width: 20%"><b>0.00</b></td>
                        </tr>
                    </table>


            </div>
                <div class="card-body">

                    <div class="form-group row">
                        <label for="formadepago" class="col-sm-2 col-form-label form-control-sm">Forma de Pago</label>
                        <div class="col-sm-10">
                            <select name="formadepago" id="formadepago" class="form-control form-control-sm" required>

                                @foreach ($formaspagos as $formaspago)
                                    <option value="{{$formaspago->id}}">{{$formaspago->nombre}}</option>
                                @endforeach



                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="infoextrapago" name="infoextrapago" style="display:none">
                        <select name="tipotarjeta" id="tipotarjeta" class="form-control form-control-sm" required>

                            @foreach ($formaspagostarjetas as $formaspagostarjeta)
                                <option value="{{$formaspagostarjeta->recargo}}">{{$formaspagostarjeta->nombre}}</option>
                            @endforeach

                        </select>
                    </div>


                    <div id="cuadrofinanciaciontarjeta" style="display: none">

                        <table class="table table-sm" id="cuadrofinanciacion">
                            <thead>



                            <tr>

                                <th>Forma</th>
                                <th>Nro cuotas</th>
                                <th>Recargo</th>


                            </tr>
                            </thead>


                            @foreach ($formaspagostarjetas as $formaspagostarjeta)
                                <tr>

                                    <td>{{$formaspagostarjeta->nombre}}</td>
                                    <td>{{$formaspagostarjeta->financiacion}}</td>
                                    <td>{{$formaspagostarjeta->recargo}}%</td>


                                </tr>

                            @endforeach



                        </table>

                    </div>

                    <div class="form-group row">
                        <label for="montocancelado" class="col-sm-2 col-form-label form-control-sm">Monto Pago</label>
                        <div class="col-sm-10">
                            <input name="montocancelado" id="montocancelado" class="form-control form-control-sm" value="" required>

                        </div>
                    </div>

                    <div class="form-group row" id="divmontofinanciado" style="display: none">
                        <label for="montofinanciado" class="col-sm-2 col-form-label form-control-sm">Monto Financiado</label>
                        <div class="col-sm-10">
                            <input name="montofinanciado" id="montofinanciado" class="form-control form-control-sm" value="" required readonly>

                        </div>
                    </div>


                    <div class="form-group row">
                        <button type="button" class="btn btn-warning" onclick="agregarFilaPago()">
                            <b>Agregar pago</b>
                        </button>
                        <button type="button" class="btn-warning" onclick="eliminarFilaPago()"><b>Eliminar Pago</b></button>
                    </div>

                    <div class="form-group">
                        <label for="tecnico_id">Pincode</label>
                        <input name="pincode" id="pincode" type="password" class="form-control" placeholder="Pin ...">
                    </div>


                    <!-- Botones de Formulario -->
                    <div class="card-footer">
                        <div id="botoningreso">
                            <button  class="btn btn-info" id="ajaxsubmit">Ingresar</button>
                            <button  class="btn btn-info" id="consola">Consola</button>
                        </div>


                    </div>
                </div>
            </div>
            <div class="alert alert-danger" style="display:none"></div>


        </div>

        </div>
    </div>


<!-- /.FIN de modal forma de pago -->

<script>

    jQuery(document).ready(function(){
        jQuery('#consola').click(function(e){

            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            datospagos=[]; //creo array

            $("tr.filapago").each(function() {
                objeto= {tipopago : $(this).find("td.idtipopago").text(),
                    formapago : $(this).find("td.formapago").text(),
                    montopagado : $(this).find("td.montopagado").text()};

                datospagos.push(objeto);

            });


            datosformulario  = $('#formcomplete').serialize(); // store json string
            JSON.stringify(datospagos);

            console.log(datospagos);

        });
    });



</script>




<script>

    jQuery(document).ready(function(){
    jQuery('#ajaxsubmit').click(function(e){
        $('#contenido').hide();
        $('#loading-screen').show();
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        datospagos=[]; //creo array

        $("tr.filapago").each(function() {
            objeto= {tipopago : $(this).find("td.idtipopago").text(),
            formapago : $(this).find("td.formapago").text(),
            montopagado : $(this).find("td.montopagado").text()};

            datospagos.push(objeto);

        });


        datosformulario  = $('#formcomplete').serialize(); // store json string


        jQuery.ajax({
            url: "{{ route('facturacion.store') }}",
            method: 'post',
            data:  datosformulario + '&' + "datospagos=" + JSON.stringify(datospagos),

            success: function(result){
                $('#loading-screen').hide();
                if(result.errors)
                {
                    $('#contenido').show();
                    jQuery('.alert-danger').html('');

                    jQuery.each(result.errors, function(key, value){
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
                else
                {
                    jQuery('.alert-danger').hide();
                    location.reload(); //refresca la pagina
                }
            }});
    });
    });

</script>





<script>
function agregarFilaPago(){

    //ver si ya estatodo pago
    var saldopendiente = document.getElementById("saldoacancelar").innerText;

        if(saldopendiente == 0){
            alert('La factura ya esta cancelada')
            }else{

                    //capturar el pago
                        var formapago = document.getElementById("formadepago");
                        var textoformapago = document.getElementById("formadepago")[document.getElementById("formadepago").selectedIndex].text;
                        var tipotarjeta = document.getElementById("tipotarjeta")[document.getElementById("tipotarjeta").selectedIndex].text;
                        var idtipopago = document.getElementById("formadepago")[document.getElementById("formadepago").selectedIndex].value;
                        var pago = document.getElementById("montocancelado").value;



                        if(pago == ''){
                            alert ('No se ha ingresado valor');
                        }
                        if(formapago.value == 2){


                            $('#Detallepago').append('<tr class="filapago" id="filapago'+p+'">\n' +
                                '                        <td class="idtipopago" id="idtipopago'+p+'">'+idtipopago+'</td>\n' +
                                '                        <td class="formapago" id="formapago'+p+'">'+textoformapago+' '+tipotarjeta+'</td>\n' +
                                '                        <td class="tipotarjeta" id="tipotarjeta'+p+'" style="display: none">'+tipotarjeta+'</td>\n' +
                                '                        <td class="montopagado" id="montopagado'+p+'">'+pago+'</td>\n' +
                                '\n' +
                                '                    </tr>');

                            p++;

                        }
                        else{

                            $('#Detallepago').append('<tr class="filapago" id="filapago'+p+'">\n' +
                                '                        <td class="idtipopago" id="idtipopago'+p+'">'+idtipopago+'</td>\n' +
                                '                        <td class="formapago" id="formapago'+p+'">'+textoformapago+'</td>\n' +
                                '                        <td style="display: none"></td>\n' +
                                '                        <td class="montopagado" id="montopagado'+p+'">'+pago+'</td>\n' +
                                '\n' +
                                '                    </tr>');

                            p++;

                        }



                        totalpagos();
                        calculamontofinan();
                    }

}



function eliminarFilaPago(){
    var table = document.getElementById("Detallepago");
    var rowCount = table.rows.length;


    //console.log(rowCount);

if(p==1){

    alert('No hay pago que eliminar')

}else{

        p=p-1;

        table.deleteRow(rowCount -1);

}
    totalpagos();
    calculamontofinan();
}



function totalpagos() {


    var table = document.getElementById("Detallepago");

    //Obtengo el saldo actual

    saldoapagar = document.getElementById("montototalfinal").innerText ;


    //Para sumar total pagado
    totalpagado = 0;
    for (var x=0; x < (table.rows.length); x++) totalpagado = totalpagado + parseFloat(table.rows[x].cells[3].innerHTML);

    document.getElementById("totalmontopagado").innerText  = totalpagado;

    var tasatarjeta = 1+(document.getElementById("tipotarjeta").value/100);
    document.getElementById("montofinanciado").value=document.getElementById("montocancelado").value*tasatarjeta;

    //Actualizo saldo actual

    saldoapagar= saldoapagar-totalpagado;

    document.getElementById("saldoacancelar").innerText  = saldoapagar;

    document.getElementById("montocancelado").value  = saldoapagar;



}

$(function() {
    $('#formadepago').change(function(){


        if($('#formadepago').val() == '2') {

            $('#infoextrapago').show();

            $('#cuadrofinanciaciontarjeta').show();
            $('#divmontofinanciado').show();
            calculamontofinan();

        } else {
            $('#infoextrapago').hide();

            $('#cuadrofinanciaciontarjeta').hide();
            $('#divmontofinanciado').hide();

        }
    });
});


function calculamontofinan() {
    var tasatarjeta = 1+(document.getElementById("tipotarjeta").value/100);
    document.getElementById("montofinanciado").value=document.getElementById("montocancelado").value*tasatarjeta;



}


$(function() {
    $('#tipotarjeta').change(function(){

        calculamontofinan();

    });
});

$(function() {
    $('#montocancelado').change(function(){

        calculamontofinan();

    });
});




</script>
