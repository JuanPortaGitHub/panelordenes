<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ordenes de Trabajo - HotSpot</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/adminlte/img/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/../css/util.css">
    <link rel="stylesheet" type="text/css" href="/../css/main.css">
    <!--===============================================================================================-->



</head>
<body>






<div class="limiter" >

    <div class="container-login100" style="background-image: url('/../../images/Fondo.png');">

        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">







                <form action="{{ route('consultaorden') }}" class="login100-form validate-form flex-sb flex-w" >
                    {{csrf_field()}}
                    <span class="login100-form-title p-b-32" style="text-align: center">
                        <b>HotSpot</b>
					</span>
					<span class="login100-form-title p-b-32" style="text-align: center">

                        <b>Ordenes de Trabajo</b>
					</span>
                    <p class="login-box-msg" style="text-align: center">Ingrese el nº de orden y contraseña para obtener información y hacer consultas sobre la reparación de su equipo</p>

                    <span class="txt1 p-b-11">
						Nro de orden
					</span>
                    <div class="wrap-input100 validate-input m-b-36">
                        <input class="input100" type="text" name="ot_id" id="ot_id">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
						Contraseña
					</span>
                    <div class="wrap-input100 validate-input m-b-12">
						<span class="btn-show-pass">

						</span>
                        <input class="input100" type="text" name="passwordot" id="passwordot" >
                        <span class="focus-input100"></span>
                    </div>



                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Ingreso
                        </button>
                    </div>

                </form>



                @if(count($errors))
                    <div class="alert alert-danger" style="text-align: center">


                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach


                    </div>

                @endif


            </div>
            <!-- /.login-card-body -->
        </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/../vendor/bootstrap/js/popper.js"></script>
<script src="/../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/../vendor/daterangepicker/moment.min.js"></script>
<script src="/../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/../js/main.js"></script>

</body>
