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
    <div class="row" style="margin-left: 350px;">

        <div class="col-9">
            <h2>Monedas</h2>
            <div class="caja" style="border: 1px solid #ccc; padding: 20px; margin-bottom: 20px; border-radius: 5px; background-color: #FFF3CD;">
                <p style="text-align: center;">Total:</p>
                <h4 style="text-align: center;">25 monedas</h4>
                <button class="btn-ganar" style="margin-left: 380px; background-color: rgb(255, 255, 9); border: none; padding: 5px 10px; border-radius: 5px;">Ganar más monedas</button>
                <h5>Monedas diarias</h5>
                <div class="coins-row" style="text-align: center; padding: 10px 0;">
                    <div><span class="mone">💰</span><br> <strong>Lunes</strong><br>10</div>
                    <div><span class="mone">💰</span><br> <strong>Martes</strong><br>20</div>
                    <div><span class="mone">💰</span><br> <strong>Miércoles</strong><br>30</div>
                    <div><span class="mone">💰</span><br> <strong>Jueves</strong><br>40</div>
                    <div><span class="mone">💰</span><br> <strong>Viernes</strong><br>50</div>
                    <div><span class="mone">💰</span><br> <strong>Sábado</strong><br>60</div>
                    <div><span class="mone">💰</span><br><strong>Domingo</strong><br>70</div>
                </div>
                <a href="index.html"><button class="btn-canjear" style="background-color: red; color: white; border: none; padding: 10px; width: 100%; margin-top: 10px;">Canjear</button></a>
            </div>
        </div>
    </div>
    <style>
        .coins-row div {
            display: inline-block;
            margin: 0 10px;
        }
    </style>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>