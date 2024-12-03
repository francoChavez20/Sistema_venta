



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
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script>
        const base_url = '<?php echo BASE_URL?>'
      </script>
        <title>Document</title>
      </head>
      <body>
        <style>
          :root {
    --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

*, *::before, *::after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

nav {
    display: block;
}

body {
    margin: 0;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #515151;
    text-align: left;
    background-color: #e9edf4;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

a {
    color: #3f84fc;
    text-decoration: none;
    background-color: transparent;
}

a:hover {
    color: #0458eb;
    text-decoration: underline;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Nunito", sans-serif;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}

h1, .h1 {
    font-size: 2.5rem;
    font-weight: normal;
}

.card {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0;
}

.card-body {
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    text-align: center;
}

.dashboard {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    min-height: 100vh;
}

.dashboard-app {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    margin-top: 84px;
}

.dashboard-content {
    -webkit-box-flex: 2;
    -webkit-flex-grow: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    padding: 25px;
}

.dashboard-nav {
    min-width: 238px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    overflow: auto;
    background-color: #373193;
}

.dashboard-compact .dashboard-nav {
    display: none;
}

.dashboard-nav header {
    min-height: 84px;
    padding: 8px 27px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.dashboard-nav header .menu-toggle {
    display: none;
    margin-right: auto;
}

.dashboard-nav a {
    color: #515151;
}

.dashboard-nav a:hover {
    text-decoration: none;
}

.dashboard-nav {
    background-color: #443ea2;
}

.dashboard-nav a {
    color: #fff;
}

.brand-logo {
    font-family: "Nunito", sans-serif;
    font-weight: bold;
    font-size: 20px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #515151;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.brand-logo:focus, .brand-logo:active, .brand-logo:hover {
    color: #dbdbdb;
    text-decoration: none;
}

.brand-logo i {
    color: #d2d1d1;
    font-size: 27px;
    margin-right: 10px;
}

.dashboard-nav-list {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-item {
    min-height: 56px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    letter-spacing: 0.02em;
    transition: ease-out 0.5s;
}

.dashboard-nav-item i {
    width: 36px;
    font-size: 19px;
    margin-left: -40px;
}

.dashboard-nav-item:hover {
    background: rgba(255, 255, 255, 0.04);
}

.active {
    background: rgba(0, 0, 0, 0.1);
}

.dashboard-nav-dropdown {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-dropdown.show {
    background: rgba(255, 255, 255, 0.04);
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle {
    font-weight: bold;
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle:after {
    -webkit-transform: none;
    -o-transform: none;
    transform: none;
}

.dashboard-nav-dropdown.show > .dashboard-nav-dropdown-menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.dashboard-nav-dropdown-toggle:after {
    content: "";
    margin-left: auto;
    display: inline-block;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid rgba(81, 81, 81, 0.8);
    -webkit-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}

.dashboard-nav .dashboard-nav-dropdown-toggle:after {
    border-top-color: rgba(255, 255, 255, 0.72);
}

.dashboard-nav-dropdown-menu {
    display: none;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.dashboard-nav-dropdown-item {
    min-height: 40px;
    padding: 8px 20px 8px 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    transition: ease-out 0.5s;
}

.dashboard-nav-dropdown-item:hover {
    background: rgba(255, 255, 255, 0.04);
}

.menu-toggle {
    position: relative;
    width: 42px;
    height: 42px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #443ea2;
}

.menu-toggle:hover, .menu-toggle:active, .menu-toggle:focus {
    text-decoration: none;
    color: #875de5;
}

.menu-toggle i {
    font-size: 20px;
}

.dashboard-toolbar {
    min-height: 84px;
    background-color: #dfdfdf;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 8px 27px;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
}

.nav-item-divider {
    height: 1px;
    margin: 1rem 0;
    overflow: hidden;
    background-color: rgba(236, 238, 239, 0.3);
}

@media (min-width: 992px) {
    .dashboard-app {
        margin-left: 238px;
    }

    .dashboard-compact .dashboard-app {
        margin-left: 0;
    }
}


@media (max-width: 768px) {
    .dashboard-content {
        padding: 15px 0px;
    }
}

@media (max-width: 992px) {
    .dashboard-nav {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 1070;
    }

    .dashboard-nav.mobile-show {
        display: block;
    }
}

@media (max-width: 992px) {
    .dashboard-nav header .menu-toggle {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}

@media (min-width: 992px) {
    .dashboard-toolbar {
        left: 238px;
    }

    .dashboard-compact .dashboard-toolbar {
        left: 0;
    }
}
        </style>
      <div class='dashboard'>
    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
                                                                                   class="brand-logo"><i
                class="fas fa-anchor"></i> <span>Sistema de <br> productos</span></a></header>

        <nav class="dashboard-nav-list">
          <a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
            Inicio </a><a
                href="#" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> productos
        </a>
        <a
                href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a>

            <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-photo-video"></i> Media </a>
                
            </div>
          <a
                    href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Welcome back Jim</h1>
                    </div>
                    <div class='card-body'>
                        <p>Your account type is: Administrator</p>
                    </div>
                </div>
            </div>
        </div>

      