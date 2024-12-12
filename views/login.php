<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <script>
        const base_url = '<?php echo BASE_URL?>'
      </script>
    <style>
      body,
      html {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)),
          url("img/carro.jpg") no-repeat center center fixed;
        background-size: 100%;
        animation: moveBackground 10s infinite alternate;
      }
      @keyframes moveBackground {
        0% {
          background-position: left top;
        }
        25% {
          background-position: center top;
        }
        50% {
          background-position: left top;
        }
        75% {
          background-position: center bottom;
        }
        100% {
          background-position: left top;
        }
      }
      .login-container {
        background: linear-gradient(
          60deg,
          rgb(50, 188, 223) 25%,
          rgb(15, 15, 241) 75%
        );
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        width: 350px;
        text-align: center;
      }
      .login-container img {
        width: 100px;
        height: 100px;
        margin-bottom: 1rem;
      }
      .login-container input[type="text"],
      .login-container input[type="password"] {
        background: #f1f1f1;
        border: none;
        border-radius: 25px;
        padding: 0.5rem 1rem;
        width: 100%;
        margin-bottom: 1rem;
      }
      .login-container button {
        background: linear-gradient(to right, #56ccf2, #2f80ed);
        border: none;
        border-radius: 25px;
        color: white;
        padding: 0.5rem 1rem;
        width: 100%;
      }
      .login-container button:hover {
        background: linear-gradient(
          60deg,
          rgb(255, 255, 255) 25%,
          rgb(247, 79, 79) 75%
        );
      }
      .login-container a {
        color: #0026ff;
        text-decoration: none;
      }
      .form-check-label {
        margin-left: 0.5rem;
      }
      .form-check {
        display: flex;
        align-items: center;
        justify-content: start;
      }
      img {
        border-radius: 20px 0px 0px 20px;
      }
    </style>
  </head>
  <body>
    <div class="container" style="display: flex; justify-content: center">
      <div class="img" style="width: 350px; border-radius: 0px 20px 20px 0px">
        <img src="./views/img/fondo_login.png" alt="" width="350" height="470px" />
      </div>

      <div class="login-container" style="border-radius: 0px 20px 20px 0px">
        
        <h2>INICIAR SESION</h2>
        <p style="color: #f1f1f1;">usuario: 75958792</p>
        <p style="color: #f1f1f1;">contraseña: 75958792</p>
        <img src="./views/img/usuario.png" alt="Usuario" />
        <form action="" id="frmIniciar">
          <div class="mb-3 p-1">
            <input
              type="text"
              id="usuario"
              name="usuario"
              class="form-control"
              placeholder="Ingrese su usuario"
              required
            />
          </div>
          <div class="mb-3 p-1">
            <input
              type="password"
              id="password"
              name="password"
              class="form-control"
              placeholder="Ingrese su contraseña"
              required
            />
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" />
            <label class="form-check-label" for="remember">Recordar</label>
            <a href="#" class="ms-auto">Crear cuenta</a>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL ?>views/js/functions_login.js"></script>
</html>