<!DOCTYPE html>
<html>
<head>
    <title>Orden de Trabajo</title>
    <style>
        thead {color:black;}
        tbody {color:black;}
        tfoot {color:black;}

        table, th, td {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            width: auto;
            height: 100%;
            font-size: smaller;
            border-collapse: collapse;
            table-layout: fixed;

        }
        .holder {
            width: auto;
            display: inline-block;

        }

        .holder img {
            alignment: center;
            vertical-align: baseline;
            border: 4px white
        }
        tr.spaceUnder>td {
            padding-bottom: 2em;
        }

    </style>
</head>
<body>

<table>
    <thead>



    <tr style="border-bottom: 4px solid black;">
        <td colspan="2" style= "font-size:large"><b>ORDEN DE TRABAJO</b></td>


        <td style="text-align: left; font-size: x-large"> <b>Nº {{$orden->ot_id}} </b></td>
        <td style="text-align: right; font-size: small"><b>Contraseña: </b>{{$orden->passwordot}}</td>
    </tr>


    <tr>
        <td style="text-align: right" colspan="2"> <div class="holder">
                <img src="/../adminlte/img/logostickerhotspot.jpg" width="300px">
            </div></td>

        <td colspan="2" style="white-space: pre"><b>HotSpot Servicio Técnico
Rondeau 189 - (0351) 4220777
Dr. Achaval Rodriguez 14 - (0351) 4256090
www.hotspotcomputacion.com</b>
        </td>

    </tr>

    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><b>Nombre: </b>{{$orden->cliente->nombre}} {{$orden->cliente->apellido}}</td>
        <td><b>Telefono: </b>{{$orden->cliente->telefono}}</td>
        <td></td>

    </tr>
    <tr style="border-bottom: 4px solid black;">
        <td colspan="2"><b>Celular: </b>{{$orden->cliente->celular}}</td>
        <td colspan="2"><b>Email: </b>{{$orden->cliente->mail}}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><b>Categoria: </b></td>
        <td>{{$orden->equipo->tipodeequipo->tipodeequipo}}</td>
        <td><b>Password: </b></td>
        <td>{{$orden->equipo->password}}</td>
    </tr>
    <tr>
        <td><b>Equipo: </b></td>
        <td>{{$orden->equipo->modelo}}</td>
        <td><b>Presupuesto: </b></td>
        <td>
            <table>
                <tr>
                    <td style="background-color: lightgrey; font-family: Verdana; font-size: small">$ {{$orden->presupuesto}}</td>
                    <td></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr style="border-bottom: 4px solid black;">
        <td></td>
        <td style="white-space: nowrap"><b>
                @if($orden->equipo->cargador == 0)
                    Sin cargador
                @else
                    Con cargador
                @endif</b></td>
        <td style="white-space: nowrap"><b>
                @if($orden->equipo->bateria == 0)
                    Sin bateria
                @else
                    Con bateria
                @endif</b></td>
        <td style="white-space: nowrap"><b>
                @if($orden->equipo->bolsofunda == 0)
                    Sin bolso/funda
                @else
                    Con bolso/funda
                @endif</b></td>
    </tr>
    <tr>
        <td colspan="3"><b>DETALLES / MARCAS / ROTURAS</b></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3" style="height: 60px">{{$orden->detalles}}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3"><b>SINTOMAS / DIAGNOSTICO</b></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" style="height: 60px">{{$orden->sintoma}}</td>
        <td></td>
    </tr>
    <tr>
    <tr>
        <td colspan="2" style="alignment: center"><b>Fecha de ingreso: </b>{{$orden->fechaingreso}}</td>

        <td ></td>
        <td style="text-align: center">-------------------------</td>
    </tr>
    <tr class="spaceUnder">
        <td colspan="2"><b>FECHA ESTIMADA (APROX): {{$orden->fechaentrega}}</b></td>

        <td ></td>
        <td style="text-align: center">Firma Cliente</td>
    </tr>


    </tbody>
    <tfoot>
    <tr style="border-top: 1px solid black;">
        <td colspan="4" style="font-size: xx-small">IMPORTANTE: 1- El cliente declara con su firma que los datos ingresados corresponden con lo entragado y con el trabajo a realizar 2- La fecha de reparacion es siempre estimativa. 3- En trabajos de software, el cliente tiene un plazo de 48hs para realizar reclamos de garantia sin costo. Sino se considera de conformidad. 4- Para retirar el equipo, el cliente debera presentar esta orden de trabajo. Pasados los 30 días a partir de la fecha de recepcion, se facturará un cargo diario en concepto de deposito. En caso de no ser retirado dentro de los 90 días a partir de la fecha, será considerado abandonado en los terminos de los articulos 2375/2524/2525 del Código Civil.</td>
    </tr>
    <tr style="border-top: 1px solid black">
        <td colspan="4" style="text-align: center; background-color: lightgrey">Ingresa a <b>www.hotspotcomputacion.com/estadodeorden</b></td>

    </tr>
    <tr>
        <td colspan="4" style="text-align: center; background-color: lightgrey"> con tu <b>Nº orden</b> y <b>contraseña</b> para consultar y recibir las novedades de tu equipo</td>

    </tr>
    </tfoot>
</table>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>


<table>
    <thead>



    <tr style="border-bottom: 4px solid black;">
        <td colspan="2" style= "font-size:large"><b>ORDEN DE TRABAJO</b></td>


        <td style="text-align: left; font-size: x-large"> <b>Nº {{$orden->ot_id}}</b></td>
        <td style="text-align: right; font-size: small"><b>Contraseña: </b>{{$orden->passwordot}}</td>
    </tr>


    <tr>
        <td style="text-align: right" colspan="2"> <div class="holder">
                <img src="/../adminlte/img/logostickerhotspot.jpg" width="300px">
            </div></td>

        <td colspan="2" style="white-space: pre"><b>HotSpot Servicio Técnico
Rondeau 189 - (0351) 4220777
Dr. Achaval Rodriguez 14 - (0351) 4256090
www.hotspotcomputacion.com</b>
        </td>

    </tr>

    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"><b>Nombre: </b>{{$orden->cliente->nombre}} {{$orden->cliente->apellido}}</td>
        <td><b>Telefono: </b>{{$orden->cliente->telefono}}</td>
        <td></td>

    </tr>
    <tr style="border-bottom: 4px solid black;">
        <td colspan="2"><b>Celular: </b>{{$orden->cliente->celular}}</td>
        <td colspan="2"><b>Email: </b>{{$orden->cliente->mail}}</td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><b>Categoria: </b></td>
        <td>{{$orden->equipo->tipodeequipo->tipodeequipo}}</td>
        <td><b>Password: </b></td>
        <td>{{$orden->equipo->password}}</td>
    </tr>
    <tr>
        <td><b>Equipo: </b></td>
        <td>{{$orden->equipo->modelo}}</td>
        <td><b>Presupuesto: </b></td>
        <td >
            <table>
                <tr>
                    <td style="background-color: lightgrey; font-family: Verdana; font-size: small">$ {{$orden->presupuesto}}</td>
                    <td></td>
                </tr>
            </table>
        </td>

    </tr>
    <tr style="border-bottom: 4px solid black;">
        <td></td>
        <td style="white-space: nowrap"><b>
                @if($orden->equipo->cargador == 0)
                    Sin cargador
                @else
                    Con cargador
                @endif</b></td>
        <td style="white-space: nowrap"><b>
                @if($orden->equipo->bateria == 0)
                    Sin bateria
                @else
                    Con bateria
                @endif</b></td>
        <td style="white-space: nowrap"><b>
                @if($orden->equipo->bolsofunda == 0)
                    Sin bolso/funda
                @else
                    Con bolso/funda
                @endif</b></td>
    </tr>
    <tr>
        <td colspan="3"><b>DETALLES / MARCAS / ROTURAS</b></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3" style="height: 60px">{{$orden->detalles}}</td>
        <td>Recibi conforme el dia: </td>
    </tr>
    <tr>
        <td colspan="3"><b>SINTOMAS / DIAGNOSTICO</b></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3" style="height: 60px">{{$orden->sintoma}}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2" style="alignment: center"><b>Fecha de ingreso: </b>{{$orden->fechaingreso}}</td>

        <td ></td>
        <td style="text-align: center">-------------------------</td>
    </tr>
    <tr class="spaceUnder">
        <td colspan="2"><b>FECHA ESTIMADA (APROX): {{$orden->fechaentrega}}</b></td>

        <td ></td>
        <td style="text-align: center">Firma Cliente</td>
    </tr>


    </tbody>
    <tfoot>
    <tr style="border-top: 1px solid black;">
        <td colspan="4" style="font-size: xx-small">IMPORTANTE: 1- El cliente declara con su firma que los datos ingresados corresponden con lo entragado y con el trabajo a realizar 2- La fecha de reparacion es siempre estimativa. 3- En trabajos de software, el cliente tiene un plazo de 48hs para realizar reclamos de garantia sin costo. Sino se considera de conformidad. 4- Para retirar el equipo, el cliente debera presentar esta orden de trabajo. Pasados los 30 días a partir de la fecha de recepcion, se facturará un cargo diario en concepto de deposito. En caso de no ser retirado dentro de los 90 días a partir de la fecha, será considerado abandonado en los terminos de los articulos 2375/2524/2525 del Código Civil.</td>
    </tr>
    <tr style="border-top: 1px solid black">
        <td colspan="4" style="text-align: center; background-color: lightgrey">Ingresa a <b>www.hotspotcomputacion.com/estadodeorden</b></td>

    </tr>
    <tr>
        <td colspan="4" style="text-align: center; background-color: lightgrey"> con tu <b>Nº orden</b> y <b>contraseña</b> para consultar y recibir las novedades de tu equipo</td>

    </tr>
    </tfoot>
</table>

</body>
</html>
