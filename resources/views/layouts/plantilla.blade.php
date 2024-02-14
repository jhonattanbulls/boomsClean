<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title') </title>

	<link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">


</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

      <header class="main-header">

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <div class="app-menu">
            <ul class="header-megamenu nav">
                <li class="btn-group nav-item">
                    <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                        <i data-feather="menu"></i>
                    </a>
                </li>

            </ul>
          </div>


        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
              <div class="multinav">
              <div class="multinav-scroll" style="height: 97%;">
                  <!-- sidebar menu-->
                  <ul class="sidebar-menu" data-widget="tree">
                      <li class="header fs-10 m-0 text-uppercase">Inicio</li>
                      <li class="treeview">
                      <a href="#">
                        <i data-feather="home"></i>
                        <span>Inicio</span>
                        <span class="pull-right-container">
                          {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                        </span>
                      </a>
                      <ul class="treeview-menu">
                            <li><a href="/"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inicio</a></li>
                            </ul>
                    </li>
                    <li class="header fs-10 m-0 text-uppercase">Usuarios</li>
                    <li class="treeview">
                      <a href="#">
                        <i data-feather="users"></i>
                        <span>Clientes</span>
                        <span class="pull-right-container">
                          {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                        </span>
                      </a>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('clients.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crear cliente</a></li>
                        <li><a href="{{ route('clients.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Listado de clientes</a></li>
                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i data-feather="headphones"></i>
                        <span>Vendedores</span>
                        <span class="pull-right-container">

                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="{{ route('sellers.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crear vendedor</a></li>
                      <li><a href="{{ route('sellers.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Listado de vendedores</a></li>
                    </ul>
                    </li>

                    <li class="header  fs-10 m-0">Facturación</li>
                    <li class="treeview">
                      <a href="#">
                        <i data-feather="lock"></i>
                        <span>Productos</span>
                        <span class="pull-right-container">
                          {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('products.create') }}"  class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crear producto</a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}"  class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Listado de productos</a>
                        </li>

                      </ul>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i data-feather="lock"></i>
                        <span>Pedidos</span>
                        <span class="pull-right-container">
                          {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li>
                            <a href="{{ route('invoices.create') }}"  class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crear pedido</a>
                           </li>
                        <li>
                            <a href="{{ route('invoices.index') }}"  class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lista de pedidos</a>
                        </li>
                      </ul>
                    </li>

                  </ul>


              </div>
            </div>
        </section>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->

       <footer class="main-footer">
          &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.BoomsClean.com/">BoomsClean</a>. All Rights Reserved.
      </footer>
      <!-- Side panel -->


      <!-- /.control-sidebar -->

      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>


    </div>
    <!-- ./wrapper -->

        <!-- Page Content overlay -->



        <script src="{{ asset('js/vendors.min.js') }}"></script>
        <script src="{{ asset('js/pages/chat-popup.js') }}"></script>
        <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

        <script src="{{ asset('js/demo.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
        <script src="{{ asset('js/pages/chart-widgets.js') }}"></script>



    </body>

</html>
