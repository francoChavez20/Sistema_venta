<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Estilo</title>
    <style>
        /* Estilos para el contenedor del formulario */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }

        /* Estilos para el formulario */
        .form {
            background-color: #ffffff;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            font-family: Arial, sans-serif;
        }

        .form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        /* Estilos para los inputs y selects */
        input[type="text"],
        input[type="date"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        /* Estilos para el botón */
        .button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }

        /* Estilo de hover para los inputs y selects */
        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="file"]:focus,
        select:focus {
            border-color: #4CAF50;
            outline: none;
            background-color: #f1f9f1;
        }

        /* Estilos para el título */
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form class="form" action="" id="frmRegistrarCategoria">
            <h2>Registrar categoria</h2>
           
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div>
                <label for="detalle">Detalle</label>
                <input type="text" id="detalle" name="detalle" placeholder="Detalle" required>
            </div>
            
            <button type="button" class="button" onclick="registrar_categoria();">Enviar</button>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        </form>
    </div>
    <script src="<?php echo BASE_URL ?>views/js/functions_categoria.js"></script>
    <script src="<?php echo BASE_URL; ?>views/js/jquery-3.6.0.min.js"></script>
    
</body>
</html>
