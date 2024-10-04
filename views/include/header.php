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
  </head>
  <body>
    <div class="container-fluid">
      <nav
        class="navbar bg-body-tertiary"
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
            <a class="nav-link dropdown-toggle" style="margin-right: 180px; " href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./views/IMG/noti.png" alt="" height="35"></a>
            <ul class="dropdown-menu" style="background: #9b9b9b;">
                <li><a class="dropdown-item" href="index.html">
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
                <li><a class="dropdown-item" href="carrito.html"><div class="card mb-3" style="max-width: 540px;">
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
                <li><a class="dropdown-item" href="lo mas vendido.html"><div class="card mb-3" style="max-width: 540px;">
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
                <li><a class="dropdown-item" href="historial.html"><div class="card mb-3" style="max-width: 540px;">
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

      <nav class="navbar navbar-expand " style="background-color: red; padding-left: 100px; justify-content: center;" >
        <div class="container-fluid " >
          <a class="navbar-brand" href="#">
            <img src="./views/img/barra.png" width="40" height="34" />
          </a>
          
          <div class="collapse navbar-collapse " id="navbarSupportedContent" style="padding-left: 300px;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item" style="margin-right: 70px;">
                <a class="nav-link active mx-5" style=" width: 110px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;"  aria-current="page" href="<?php echo BASE_URL?>producto"
                  >INICIO</a
                >
              </li>
              <li class="nav-item mx-5" >
                <a class="nav-link" 
                style=" margin-right: 70px; width: 110px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;" href="<?php echo BASE_URL?>ofertas">OFERTAS</a>
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
                  <li style="background:linear-gradient(blue, rgb(38, 225, 231))"><a class="dropdown-item" href="<?php echo BASE_URL?>mujer">👗Damas</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li style="background:linear-gradient(blue, rgb(38, 225, 231))"><a class="dropdown-item" href="<?php echo BASE_URL?>varon">👔Caballeros</a></li>
                 
                </ul>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link"  style=" width: 110px; background: linear-gradient(blue, rgb(38, 225, 231));
                border: 2px solid black; text-align: center;"  href="<?php echo BASE_URL?>carrito">Carrito</a>
              </li>
            </ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="margin-right: 180px;" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="IMG/usuario.png" alt="" height="35"></a>
              <ul class="dropdown-menu" style="background: #5fe6f8;">
                  <li><a class="dropdown-item" href="<?BASE_URL?>usuario">Perfil</a></li>
                  <li><a class="dropdown-item" href="direccion.html">Direccion</a></li>
                  <li><a class="dropdown-item" href="pedido.html">pedidos</a>
                  <li><a class="dropdown-item" href="ayuda.html">Centro de ayuda</a></li>
                  <li><a class="dropdown-item" href="login.html">Cerrar Sesión</a></li>
  
  
  
              </ul>
          </li>
          </div>
        </div>
      </nav>
