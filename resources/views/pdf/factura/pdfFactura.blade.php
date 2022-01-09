<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Factura</title>
    <style>

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;

        }

        body {
            position: relative;

            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
            font-family: Arial, Helvetica, sans-serif;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-top: 2px solid  #5D6975;
            border-bottom: 2px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
            font-family: Arial, Helvetica, sans-serif;
        }

        #project {
            float: left;
        }



        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {


        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="clearfix">

    <table >

        <tr >
            <td rowspan="5" style="background-color: white; text-align: right; padding-right: 20px"><img src="adminlte/img/logosolo2.png" width="75px"></td>
            <td style="background-color: white; text-align: left">HotSpot Servicio Técnico SAS</td>
            <td style="background-color: white; text-align: right">@if($factura->CAE) Factura @else Comprobante Interno @endif</td>
        </tr>
        <tr>
            <td style="background-color: white; text-align: left">IVA Responsable Inscripto</td>
            <td style="background-color: white; text-align: right">Nº {{$factura->nrolocalfactura}} - @if($factura->CAE){{str_pad($factura->nroAFIPfactura , 8, "0", STR_PAD_LEFT)}} @else {{$factura->numfactura}} @endif</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">CUIT: 30-71728799-8</td>
            <td style="background-color: white; text-align: right">Rondeau 189 | Dr. Achaval Rodriguez 14</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">Ingreso Brutos: 0000000</td>
            <td style="background-color: white; text-align: right">(0351) 4220777 - (0351) 4256090</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">Inicio de Actividades: asdasdas</td>
            <td style="background-color: white; text-align: right">www.hotspotserviciotecnico.com</td>

        </tr>



    </table>

    <h1> <b>@if($factura->CAE) {{$factura->tipoAfip}} @else X @endif </b></h1>


    <table >

        <tr>
            <td style="background-color: white; text-align: left"> {{$factura->cliente->apellido}} {{$factura->cliente->nombre}}</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">{{$factura->cliente->condiciondeiva->condicion}}</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">{{$factura->cliente->dnicuit}}</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">{{$factura->cliente->telefono}}</td>

        </tr>
        <tr>
            <td style="background-color: white; text-align: left">{{$factura->cliente->direccion}}</td>

        </tr>




    </table>



</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">CODIGO</th>
            <th class="qty">CANTIDAD</th>
            <th class="desc">DESCRIPCION</th>
            <th class="unit">IVA</th>
            <th class="unit">DESCUENTO</th>
            <th class="total">PRECIO</th>
            <th class="total">SUBTOTAL</th>
        </tr>
        </thead>
        <tbody>
        @if($factura->detallefactura)
            @foreach($factura->detallefactura as $item)
        <tr>
            <td class="service" style="text-align: center">{{$item->id}}</td>
            <td class="qty">{{$item->cantidad}}</td>
            <td class="desc">{{$item->descripcion}}</td>
            <td class="unit">{{$item->productofactura->ivaproduct}}</td>
            <td class="unit">{{$item->descuento}} %</td>
            <td class="total">@if( $factura->tipoAfip == 'B' || null) {{round($item->precio,2)}} @else {{round(($item->precio / (1+$item->productofactura->ivaproduct/100))  * (1-($item->descuento)/100),2)}} @endif</td>
            <td class="total">@if( $factura->tipoAfip == 'B' || null) {{round($item->precio  * $item->cantidad * (1-($item->descuento)/100),2)}} @else  {{round(($item->precio / (1+$item->productofactura->ivaproduct/100)  * ($item->cantidad) * (1-($item->descuento)/100)),2)}} @endif</td>
        </tr>
            @endforeach
        @endif

        <tr>
            <td colspan="6" style="padding-top: 20px"><b>SUBTOTAL</b></td>
            <td class="total" style="padding-top: 20px"><b>
                    @if( $factura->tipoAfip == 'B' || null)

                    @php
                        $suma =0;
                    @endphp
                    @foreach($factura->detallefactura as $productos)
                        @php

                            $productos=$suma += $productos->cantidad * $productos->precio * (1-($productos->descuento)/100);
                        @endphp
                    @endforeach

                    $ {{round($productos,2)}}

                    @else
                        @php
                            $suma =0;
                        @endphp
                        @foreach($factura->detallefactura as $productos)
                            @php

                                $productos=$suma += $productos->cantidad * $productos->precio * (1-($productos->descuento)/100 ) / (1+$productos->productofactura->ivaproduct/100);
                            @endphp
                        @endforeach

                        $ {{round($productos,2)}}
                    @endif



                </b></td>
        </tr>
        <tr>
            <td colspan="6" style="padding-top: 20px">@if( $factura->tipoAfip == 'A')<b>IVA</b>@endif</td>
            <td class="total" style="padding-top: 20px">@if( $factura->tipoAfip == 'A')<b>
                    @php
                    $suma =0;
                    @endphp
                    @foreach($factura->detallefactura as $productos)
                        @php

                                $productos=$suma += ($productos->cantidad * $productos->precio * (1-($productos->descuento)/100 ) / (1+$productos->productofactura->ivaproduct/100))*($productos->productofactura->ivaproduct/100);
                        @endphp
                    @endforeach

                    $ {{round($productos, 2)}}</b>@endif</td>

        </tr>
        <tr>
            <td colspan="6" class="grand total" style="padding-top: 20px"><b>FINAL</b></td>
            <td class="grand total" style="padding-top: 20px"><b> @php
                        $suma =0;
                    @endphp
                    @foreach($factura->detallefactura as $productos)
                        @php

                            $productos=$suma += $productos->cantidad * $productos->precio * (1-($productos->descuento)/100 );
                        @endphp
                    @endforeach

                    $ {{round($productos,2)}}</b></td>
        </tr>
        </tbody>
    </table>
    <div id="notices" style="padding-top: 30px">
        <div class="notice">Observaciones:</div>
    </div>
</main>
<footer>
    <table>
        <tr>
            <td style="background-color: white">@if ($factura->CAE) CAE: {{$factura->CAE}} @endif</td>
            <td style="background-color: white"><b>www.hotspotcomputacion.com</b></td>
            <td style="background-color: white"></td>
        </tr>
        <tr>
            <td style="background-color: white">@if ($factura->CAE) VENCIMIENTO CAE:  {{$factura->VencimientoCAE}} @endif</td>
            <td style="background-color: white"></td>
            <td style="background-color: white"></td>
        </tr>

    </table>

</footer>

</body></html>
