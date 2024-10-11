<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>

<body>
  
  <div class="img">
    <img style="width: 100%;" src="img/barra_noti.png" alt="">
    <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
        style="margin-left:20px; margin-top: -80px; color: rgb(0, 0, 0); " width="36" height="36" fill="currentColor"
        class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
      </svg></a>
  </div>

  <div class="menu_superior"
    style="height: 100vh; position: fixed;width: 250px; padding-top: 20px; background-color: #b8b6b6;">
    <div class="text-center" style="color: black;">
      <img src="./views/img/usuario.png" class="rounded-circle" alt="User" width="100">
      <h4>Mi Cuenta</h4>
      <p>¡Hola!</p>
      <a href="<?php echo BASE_URL?>login" style="color: red;" class="btn btn-link">Cerrar sesión</a>
    </div>
    <ul class="nav flex-column mt-4">
      <li class="nav-item">
        <a class="nav-link active" style="color: black;" href="<?php echo BASE_URL?>perfil">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: black;" href="<?php echo BASE_URL?>direccion">Direcciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: black;" href="<?php echo BASE_URL?>pedido">Pedidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: black;" href="<?php echo BASE_URL?>moneda">Mis monedas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: black;" href="<?php echo BASE_URL?>ayuda">Centro de ayuda</a>
      </li>
    </ul>
  </div>


  <div class="contenedor" style="margin-left: 270px; padding: 20px;">
    <h2>Perfil</h2>
    <p>Actualiza tus datos de sesión, correo y contraseña</p>
    <div class="card">
      <div class="card-body">
        <form>
          <div class="form-row d-flex">
            <div class="form-group col-md-5 mx-3">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="form-group col-md-5 mx-3">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" placeholder="Apellido">
            </div>
          </div>
          <div class="form-row d-flex">
            <div class="form-group col-md-5 mx-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-5 mx-3">
              <label for="genero">Género</label>
              <input type="text" class="form-control" id="genero" placeholder="Género">
            </div>
          </div>
          <div class="form-row d-flex">
            <div class="form-group col-md-5 mx-3">
              <label for="fechaNacimiento">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="fechaNacimiento">
            </div>
            <div class="form-group col-md-5 mx-3">
              <label for="telefono">Teléfono</label>
              <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
            </div>
          </div>
          <div class="form-group col-md-5 mx-3">
            <label for="documento">Documento de identidad</label>
            <input style="width: 400px;" type="text" class="form-control" id="documento"
              placeholder="Documento de identidad">
          </div>
          <button style=" margin: 20px; background: red;" type="submit" class="btn btn-edit">Editar datos</button>
        </form>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  

</html>







