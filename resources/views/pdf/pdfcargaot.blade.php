<!DOCTYPE html>
<html>
<head>
    <title>Orden de Trabajo</title>
    <style>


        table, th, td {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            width: auto;
            font-size: xx-small;
            border-collapse: collapse;


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
            padding-bottom: 1em;
        }

    </style>
</head>


<table style="border-collapse: collapse">


    <tbody>

    <tr style="border-bottom: 4px solid black;">
        <td colspan="2" style= "font-size:large"><b>ORDEN DE TRABAJO</b></td>
        <td style="text-align: center; font-size: x-large; font-family: Helvetica, sans-serif"> {{$orden->area->areas}} <b><span style="font-size: x-large" >Nº {{$orden->ot_id}}</span> </b></td>
        <td style="text-align: right; font-size: small"><b>Contraseña: </b>{{$orden->passwordot}}</td>
    </tr>


    <tr>

        <td style="text-align: right; border-top: 2pt solid black"> </td>
        <td style="text-align: right; border-top: 2pt solid black">
            <img src="adminlte/img/logosolo2.png" width="75px">
        </td>

        <td colspan="2" style="white-space: pre; font-size: x-small; border-top: 2pt solid black"><b>HotSpot Servicio Técnico
Rondeau 189 - (0351) 4220777
Dr. Achaval Rodriguez 14 - (0351) 4256090

www.hotspotcomputacion.com</b>
        </td>

    </tr>



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
    <tr style="border-bottom: 4px solid black">
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
        <td style="border-top: 2pt solid black"><b>Categoria: </b></td>
        <td style="border-top: 2pt solid black">{{$orden->equipo->tipodeequipo->tipodeequipo}}</td>
        <td style="border-top: 2pt solid black"><b>Password: </b></td>
        <td style="border-top: 2pt solid black">{{$orden->equipo->password}}</td>
    </tr>
    <tr>
        <td><b>Equipo: </b></td>
        <td>{{$orden->equipo->modelo}}</td>
        <td><b>Presupuesto: </b></td>



        <td style="background-color: lightgrey; font-family: Verdana; font-size: x-small"><b>$ {{$orden->presupuesto}}</b></td>

    </tr>
    <tr style="border-bottom: 4px solid black;">
        <td style="border-bottom: 2pt solid black"></td>
        <td style="white-space: nowrap;border-bottom: 2pt solid black"><b>
                @if($orden->equipo->cargador == 0)
                    Sin cargador
                @else
                    Con cargador
                @endif</b></td>
        <td style="white-space: nowrap;border-bottom: 2pt solid black"><b>
                @if($orden->equipo->bateria == 0)
                    Sin bateria
                @else
                    Con bateria
                @endif</b></td>
        <td style="white-space: nowrap;border-bottom: 2pt solid black"><b>
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
        <td> </td>
    </tr>
    <tr>
        <td colspan="3"><b>SINTOMAS / DIAGNOSTICO</b></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3" style="height: 60px">{{$orden->sintoma}}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2" style="alignment: center"><b>Fecha de ingreso: </b>{{ \Carbon\Carbon::parse($orden->fechaingreso)->format('d/m/y H:i') }}</td>

        <td ></td>
        <td style="text-align: center">-------------------------</td>
    </tr>
    <tr class="spaceUnder">
        <td colspan="2"><b>FECHA ENTREGA ESTIMADA (APROX): {{ \Carbon\Carbon::parse($orden->fechaentrega)->format('d/m/y') }}</b></td>

        <td ></td>
        <td style="text-align: center">Firma Cliente</td>
    </tr>




    <tr style="border-top: 1px solid black;">
        <td colspan="4" style="font-size: xx-small;border-bottom: 1pt solid black;border-top: 1pt solid black">IMPORTANTE: 1- El cliente declara con su firma que los datos ingresados corresponden con lo entragado y con el trabajo a realizar 2- La fecha de reparacion es siempre estimativa. 3- En trabajos de software, el cliente tiene un plazo de 48hs para realizar reclamos de garantia sin costo. Sino se considera de conformidad. 4- Para retirar el equipo, el cliente debera presentar esta orden de trabajo. Pasados los 30 días a partir de la fecha de recepcion, se facturará un cargo diario en concepto de deposito. En caso de no ser retirado dentro de los 90 días a partir de la fecha, será considerado abandonado en los terminos de los articulos 2375/2524/2525 del Código Civil.</td>
    </tr>
    <tr style="border-top: 1px solid black">
        <td colspan="4" style="text-align: center; background-color: lightgrey">Ingresa a <b>www.hotspotcomputacion.com/orden/estado</b></td>

    </tr>
    <tr>
        <td colspan="4" style="text-align: center; background-color: lightgrey"> con tu <b>Nº orden</b> y <b>contraseña</b> para consultar y recibir las novedades de tu equipo</td>

    </tr>
    <tr>
        <td colspan="4" style="text-align: center; padding-bottom: 3em"></td>

    </tr>
    </tbody>
</table>





<table style="border-collapse: collapse">


    <tbody>

    <tr style="border-bottom: 4px solid black;">
        <td colspan="2" style= "font-size:large"><b>ORDEN DE TRABAJO</b></td>
        <td style="text-align: center; font-size: x-large; font-family: Helvetica, sans-serif"> {{$orden->area->areas}} <b><span style="font-size: x-large" >Nº {{$orden->ot_id}}</span> </b></td>
        <td style="text-align: right; font-size: small"><b>Contraseña: </b>{{$orden->passwordot}}</td>
    </tr>


    <tr>

        <td style="text-align: right; border-top: 2pt solid black"> </td>
        <td style="text-align: right; border-top: 2pt solid black">
            <img src="adminlte/img/logosolo2.png" width="75px">
        </td>

        <td colspan="2" style="white-space: pre; font-size: x-small; border-top: 2pt solid black"><b>HotSpot Servicio Técnico
Rondeau 189 - (0351) 4220777
Dr. Achaval Rodriguez 14 - (0351) 4256090

www.hotspotcomputacion.com</b>
        </td>

    </tr>



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
    <tr style="border-bottom: 4px solid black">
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
        <td style="border-top: 2pt solid black"><b>Categoria: </b></td>
        <td style="border-top: 2pt solid black">{{$orden->equipo->tipodeequipo->tipodeequipo}}</td>
        <td style="border-top: 2pt solid black"><b>Password: </b></td>
        <td style="border-top: 2pt solid black">{{$orden->equipo->password}}</td>
    </tr>
    <tr>
        <td><b>Equipo: </b></td>
        <td>{{$orden->equipo->modelo}}</td>
        <td><b>Presupuesto: </b></td>



        <td style="background-color: lightgrey; font-family: Verdana; font-size: x-small"><b>$ {{$orden->presupuesto}}</b></td>

    </tr>
    <tr style="border-bottom: 4px solid black;">
        <td style="border-bottom: 2pt solid black"></td>
        <td style="white-space: nowrap;border-bottom: 2pt solid black"><b>
                @if($orden->equipo->cargador == 0)
                    Sin cargador
                @else
                    Con cargador
                @endif</b></td>
        <td style="white-space: nowrap;border-bottom: 2pt solid black"><b>
                @if($orden->equipo->bateria == 0)
                    Sin bateria
                @else
                    Con bateria
                @endif</b></td>
        <td style="white-space: nowrap;border-bottom: 2pt solid black"><b>
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
        <td> </td>
    </tr>
    <tr>
        <td colspan="3"><b>SINTOMAS / DIAGNOSTICO</b></td>
        <td>Recibí conforme el día:</td>
    </tr>
    <tr>
        <td colspan="3" style="height: 60px">{{$orden->sintoma}}</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2" style="alignment: center"><b>Fecha de ingreso: </b>{{ \Carbon\Carbon::parse($orden->fechaingreso)->format('d/m/y H:i') }}</td>

        <td ></td>
        <td style="text-align: center">-------------------------</td>
    </tr>
    <tr class="spaceUnder">
        <td colspan="2"><b>FECHA ESTIMADA (APROX): {{ \Carbon\Carbon::parse($orden->fechaentrega)->format('d/m/y') }}</b></td>

        <td ></td>
        <td style="text-align: center">Firma Cliente</td>
    </tr>




    <tr style="border-top: 1px solid black;">
        <td colspan="4" style="font-size: xx-small;border-bottom: 1pt solid black;border-top: 1pt solid black">IMPORTANTE: 1- El cliente declara con su firma que los datos ingresados corresponden con lo entragado y con el trabajo a realizar 2- La fecha de reparacion es siempre estimativa. 3- En trabajos de software, el cliente tiene un plazo de 48hs para realizar reclamos de garantia sin costo. Sino se considera de conformidad. 4- Para retirar el equipo, el cliente debera presentar esta orden de trabajo. Pasados los 30 días a partir de la fecha de recepcion, se facturará un cargo diario en concepto de deposito. En caso de no ser retirado dentro de los 90 días a partir de la fecha, será considerado abandonado en los terminos de los articulos 2375/2524/2525 del Código Civil.</td>
    </tr>
    <tr style="border-top: 1px solid black">
        <td colspan="4" style="text-align: center; background-color: lightgrey">Ingresa a <b>www.hotspotcomputacion.com/orden/estado</b></td>

    </tr>
    <tr>
        <td colspan="4" style="text-align: center; background-color: lightgrey"> con tu <b>Nº orden</b> y <b>contraseña</b> para consultar y recibir las novedades de tu equipo</td>

    </tr>
    </tbody>
</table>

</body>
</html>
