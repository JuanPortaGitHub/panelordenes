
<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HotSpot | Consulta de ordenes de Trabajo</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        html, body {
            width: 60%;
            height: 100%;
            margin: 0;
            padding: 0;

        }
        </style>
</head>

<body>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->







        <!-- FORMULARIO DE CONSULTA OT CLIENTE -->

        <section class="content">

            <form METHOD="get" target="_blank" action="{{ route('consultaorden') }}" class="form-horizontal" autocomplete="off">
            {{csrf_field()}}

            <!-- Seccion titular -->



                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"><b>Estado Orden De trabajo</b></h3>
                    </div>


                    <!-- Seccion contenido -->

                    <div class="card-body">



                        <div class="form-group row">
                            <label for="ot_id" class="col-form-label">Orden De Trabajo</label>
                            <div class="col-sm-12">
                                <input name="ot_id" id="ot_id" type="text" class="form-control" placeholder="Ingrese Nro de Orden ..." >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordot" class="col-form-label">Contraseña</label>
                            <div class="col-sm-12">
                                <input name="passwordot" id="passwordot" type="text" class="form-control" placeholder="Ingrese Contraseña de Ingreso ..." >

                            </div>
                        </div>
                        <!-- Botones de Formulario -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Buscar</button>

                        </div>

                    </div>
                </div>

            </form>
        </section>
            <!-- CIERRE DE FORMULARIO CONSULTA OT -->
    </div>

</body>
</html>
