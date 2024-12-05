



<!-- Content Wrapper. Contains page content 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script>
        const base_url = '<?php //echo BASE_URL?>'
      </script>
    </head>
  <body>
    <div class="container-fluid">
      <nav
        class="navbar row col-12"
        style="background: linear-gradient(blue, rgb(231, 38, 70))">
        <div class="menu mx-5" style="display: flex;">
          <a class="navbar-brand" href="#">
            <img src="./views/img/logo.png" alt="Bootstrap" width="120" height="50" />
          </a>
          <div class="container-fluid mx-5">
            <form class="d-flex m-2" role="search">
              <input
                style="width: 700px"
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-danger mx-3" type="submit">
                Buscar
              </button>
            </form>
          </div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="margin-right: 180px; " href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./views/img/noti.png" alt="" height="35"></a>
            <ul class="dropdown-menu" style="background: #9b9b9b;">
                <li><a class="dropdown-item" href="<?php //echo BASE_URL?>ofertas">
                  <div class="card mb-3" style="max-width: 540px; ">
                  <div class="row g-0" style="width: 300px; height: 140px; border: 2px solid black;">
                    <div class="col-md-4">
                      <img src="./views/img/oferta1.PNG" class="img-fluid rounded-start" alt="..." >
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" >
                        <h5 class="card-title">OFERTAS DEL 40%</h5>
                        <p class="card-text">Ofertas de hasta el 40% <br> en ropa deportiva</p>
                        <p class="card-text"><small class="text-body-secondary"> 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div></a></li>
                <li><a class="dropdown-item" href="<?php //echo BASE_URL?>ofertas"><div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0" style="width: 300px; height: 140px; border: 2px solid black;">
                    <div class="col-md-4">
                      <img src="./views/img/oferta2.PNG" class="img-fluid rounded-start" alt="..." style="margin-top: 20px; margin-left: 10px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" >
                        <h5 class="card-title">OFERTAS del 40%</h5>
                        <p class="card-text">Ofertas de hasta el 40% <br> en zapatillas</p>
                        <p class="card-text"><small class="text-body-secondary"> 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div></a></li>
                <li><a class="dropdown-item" href="<?php //echo BASE_URL?>ofertas"><div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0" style="width: 300px; height: 140px; border: 2px solid black;">
                    <div class="col-md-4">
                      <img src="./views/img/oferta3.PNG" class="img-fluid rounded-start" alt="..." style="margin-top: 20px; margin-left: 10px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" >
                        <h5 class="card-title">OFERTAS DEL 50%</h5>
                        <p class="card-text">Ofertas de hasta el 50% <br> en muebles</p>
                        <p class="card-text"><small class="text-body-secondary"> 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div></a>
                <li><a class="dropdown-item" href="<?php //echo BASE_URL?>ofertas"><div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0" style="width: 300px; height: 140px; border: 2px solid black;">
                    <div class="col-md-4">
                      <img src="./views/img/oferta4.PNG" class="img-fluid rounded-start" alt="..." style="margin-top: 20px; margin-left: 10px;">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body" >
                        <h5 class="card-title">OFERTAS DEL 20%</h5>
                        <p class="card-text">Ofertas de hasta el 20% <br> en ollas</p>
                        <p class="card-text"><small class="text-body-secondary">3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div></a></li>
                
  
  
  
            </ul>
        </li>
        </div>
      </nav>

      <nav class="navbar row col-12 navbar-expand " style="background-color: red; padding-left: 100px; justify-content: center;" >
        <div class="container-fluid " >
          <a class="navbar-brand" href="#">
            <img src="./views/img/barra.png" width="40" height="34" />
          </a>
          
          <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-left: 300px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item" style="margin-right: 70px;">
                <a class="nav-link active mx-5" style=" width: 110px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;"  aria-current="page" href="<?php //echo BASE_URL?>producto"
                  >INICIO</a
                >
              </li>
              <li class="nav-item mx-5" >
                <a class="nav-link" 
                style=" margin-right: 70px; width: 110px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;" href="<?php //echo BASE_URL?>ofertas">OFERTAS</a>
              </li>
              <li class="nav-item dropdown mx-5">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  style=" margin-right: 70px; width: 130px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;" 
                >
                  CATEGORIAS
                </a>
                <ul class="dropdown-menu" style="background:linear-gradient(blue, rgb(38, 225, 231))">
                  <li style="background:linear-gradient(blue, rgb(38, 225, 231))"><a class="dropdown-item" href="<?php //echo BASE_URL?>mujer">👗Damas</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li style="background:linear-gradient(blue, rgb(38, 225, 231))"><a class="dropdown-item" href="<?php //echo BASE_URL?>varon">👔Caballeros</a></li>
                 
                </ul>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link"  style=" width: 110px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;"  href="<?php //echo BASE_URL?>carrito">Carrito</a>
              </li>
            </ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="margin-right: 180px;" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./views/img/usuario.png" alt="" height="35"></a>
              <ul class="dropdown-menu" style="background: #5fe6f8;">
                  <li><a class="dropdown-item" href="<?php //echo BASE_URL?>perfil">Perfil</a></li>
                  <li><a class="dropdown-item" href="<?php // echo BASE_URL?>direccion">Direccion</a></li>
                  <li><a class="dropdown-item" href="<?php // echo BASE_URL?>pedido">pedidos</a>
                  <li><a class="dropdown-item" href="<?php //echo BASE_URL?>ayuda">Centro de ayuda</a></li>
                  <li><a class="dropdown-item" href="<?php //echo BASE_URL?>menu/siuu">Panel de administrador</a></li>
                  <li><button><a class="dropdown-item" onclick="cerrar_sesion();">Cerrar Sesión</a></button></li>
  
  
  
              </ul>
          </li>
          </div>
        </div>
      </nav class="col-12">-->
      <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel de administrador </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- sweetalert2 para alertas -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo BASE_URL;?>public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="<?php echo BASE_URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

    <script>
        const base_url = '<?php echo BASE_URL?>'
      </script>

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
        <a href="<?php echo BASE_URL;?>inicio" class="nav-link">Panel de administrador</a>
      </li>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; top: 0; bottom: 0; left: 0; width: 250px; overflow-y: auto;">
    <!-- Brand Logo -->
    <a href="<?php echo BASE_URL;?>inicio" class="brand-link">
      <img src="<?php echo BASE_URL;?>views/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CPanel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo BASE_URL; ?>/public/templeates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php // echo $usuario['nombre'].'  '.$usuario['apellido']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL;?>ver-productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>lista de productos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Categorias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL;?>ver-categoria" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>lista de categorias</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Proveedores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL;?>ver-proveedor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>lista de proveedores</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                 Compras
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL;?>ver-compras" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>lista de compras</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL;?>ver-usuario" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado Usuario</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                        <a class="nav-link mt-4" onclick="cerrar_sesion();" style="background-color: #ca0a0b">
                            <i class="nav-icon fas fa-door-closed"></i>
                            <p>
                                Cerrar Sesión
                            </p>
                        </a>
                    </li>
                    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  