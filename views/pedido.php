<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
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


    <div class="row" style="margin-left: 400px;">

        <div class="col-6">
            <h2>Mis pedidos</h2>
            <div class=" col-12 row">

                <div class="col-3 m-2" style="width: 190px; border: 1px solid #2b2a2a; border-radius: 5px;">
                    <h5>Pedidos en <br> curso</h5>
                    <select>
                        <option>Últimos 30 días</option>
                        <option>Últimos 60 días</option>
                        <option>Últimos 90 días</option>
                    </select>
                    <p>0 Pedidos realizados</p>
                    <p class="btn btn-outline-danger">Consultas</p>
                </div>

                <div class="col-3 m-2" style="width: 190px; border: 1px solid #2b2a2a; border-radius: 5px;">
                    <h5>Pedidos entregados</h5>
                    <select>
                        <option>Últimos 30 días</option>
                        <option>Últimos 60 días</option>
                        <option>Últimos 90 días</option>
                    </select>
                    <p>0 Pedidos realizados</p>
                    <p class="btn btn-outline-danger">Consultas</p>
                </div>
                <div class="col-3 m-2 " style="width: 190px; border: 1px solid #2b2a2a; border-radius: 5px;">
                    <h5>Pedidos cancelados</h5>
                    <select>
                        <option>Últimos 30 días</option>
                        <option>Últimos 60 días</option>
                        <option>Últimos 90 días</option>
                    </select>
                    <p>0 Pedidos realizados</p>
                    <p class="btn btn-outline-danger">Consultas</p>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>