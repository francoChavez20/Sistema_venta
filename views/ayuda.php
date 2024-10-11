<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direcciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>

<body>

    <div class="img">
        <img style="width: 100%;" src="img/barra_noti.png" alt="">
        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg"
                style="margin-left:20px; margin-top: -80px; color: rgb(0, 0, 0); " width="36" height="36"
                fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
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
                <a class="nav-link active" style="color: black;" href="<?php echo BASE_URL ?>perfil">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="<?php echo BASE_URL ?>direccion">Direcciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="<?php echo BASE_URL ?>pedido">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="<?php echo BASE_URL ?>moneda">Mis monedas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="<?php echo BASE_URL ?>ayuda">Centro de ayuda</a>
            </li>
        </ul>
    </div>
    <div class="row" style="margin-left: 300px;">

        <div class="col-9 ">
            <h2>Centro de ayuda</h2>
            <div class="text-center mb-3">
                <input type="text" class="form-control" placeholder="¿Hola! ¿en qué podemos ayudarte?">
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-link m-3" style="color: red;">¿Cuándo recibiré mi pedido?</a>
                <a href="#" class="btn btn-link m-3" style="color: red;">¿Puedo devolver un producto?</a>
            </div>
            <div class="temas">
                <h5>Temas</h5>
                <div class="row">
                    <div class="col-md-3"><button class="btn btn-light btn-block" style="border: 2px solid black;">Reembolso</button></div>
                    <div class="col-md-3"><button class="btn btn-light btn-block" style="border: 2px solid black;">Esperando entrega</button></div>
                    <div class="col-md-3"><button class="btn btn-light btn-block" style="border: 2px solid black;">Administración</button></div>
                    <div class="col-md-3"><button class="btn btn-light btn-block" style="border: 2px solid black;">PostVenta</button></div>
                </div>
            </div>
            <div class="preguntas" style="color: red; margin-top: 20px;">
                <h5 style="margin-top: 30px;">Preguntas frecuentes</h5>
                <div>
                    <p>¿Cómo podría verificar mi reembolso?</p>
                    <p>¿Por qué se canceló mi pedido?</p>
                    <p>¿Cómo cancelar mi pedido?</p>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>