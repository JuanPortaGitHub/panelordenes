
<!DOCTYPE html>

<html lang="es">
<head>


    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('jquery-ui-1.12.1/jquery-ui.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery-ui-1.12.1/jquery-3.5.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>HotSpot | Ordenes de Trabajo</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/../adminlte/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>






    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->


            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest



      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/../adminlte/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/../adminlte/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/../adminlte/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::route('ordenes.index')}}" class="brand-link">
      <img src="/../adminlte/img/logosolo2.png" alt="HotSpot" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text" style="font-family: Verdana"><b>HotSpot</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3">
          <form class="navbar-form navbar-left" role="search" action="{{url('searchredirect')}}">
              <div class="form-group">
                  <input type="number" class="form-control" name='search' id="search" placeholder="Buscar nro. orden..." />
              </div>

          </form>



      </div>



          <div class="dropdown show">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Elegir usuario
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @foreach ($users as $user)
                      <a class="dropdown-item" href="{{route('ordenes.panelusuario', $user->id)}}"><p style="color: black"><b>{{$user->name}}</b></p></a>
                  @endforeach

              </div>
          </div>





      <!-- Sidebar Menu -->

        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('ordenes.panelusuario', $user_id=Auth::user()->id)}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Panel Usuario</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="{{ URL::route('ordenes.create')}}" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Carga Ordenes</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="listadeordenesdetrabajo" href="{{ URL::route('ordenes.index')}}" class="nav-link active" >
                  <i class="nav-icon fas fa-table"></i>
                  <p>Listado de Ordenes</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="{{ URL::route('clientes.index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Listado Clientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::route('anotaciones.lista')}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Anotaciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::route('providers.index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Listado Proveedores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::route('productos.index')}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Listado Productos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::route('facturacion.create')}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Crear Factura</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Panel Admin</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
        <li class="nav-item">
        </li>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>









    <!-- Main content -->

	@yield("content")











  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Menu</h5>

        <div class="dropdown show">

            <div>
                <form class="navbar-form navbar-left" role="search" action="{{url('searchredirect')}}">
                    <div class="form-group">
                        <input type="number" class="form-control" name='search' placeholder="Buscar nro. orden..." />
                    </div>

                </form>
            </div>

            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Elegir usuario
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach ($users as $user)
                    <a class="dropdown-item" href="{{route('ordenes.panelusuario', $user->id)}}"><p style="color: black"><b>{{$user->name}}</b></p></a>
                @endforeach

            </div>
        </div>

            <a href="{{route('ordenes.panelusuario', $user_id=Auth::user()->id)}}">
                <p>Panel Usuario</p>
            </a>

            <a href="{{ URL::route('ordenes.create')}}">
                <p>Carga Ordenes</p>
            </a>

            <a href="{{ URL::route('ordenes.index')}}">
                <p>Listado de Ordenes</p>
            </a>

            <a href="{{ URL::route('clientes.index')}}">
                <p>Listado Clientes</p>
            </a>


    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="www.hotspotcomputacion.com">HotSpot Servicio Técnico</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->





<script>
document.addEventListener ("keydown", function (e) {

if (e.altKey  &&  e.which === 83) {
document.getElementById("search").focus();
}

if (e.altKey  &&  e.which === 85) {
    document.getElementById("dropdownMenuLink").click();
}

if (e.altKey  &&  e.which === 79) {
    document.getElementById("listadeordenesdetrabajo").click();
}

});
</script>




@yield("scriptextra")












</body>
</html>
