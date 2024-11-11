<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Persona</title>
    <style>
        /* Estilos para el contenedor del formulario */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
            background-color: #f0f2f5;
            
        }

        /* Estilos para el formulario */
        .form {
            background-color: #ffffff;
            margin: 200px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
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
        <form class="form" action="" id="frmRegistrarPersona">
            <h2>Registrar Persona</h2>
            
            <div>
                <label for="nro_identidad">Número de Identidad</label>
                <input type="text" id="nro_identidad" name="nro_identidad" placeholder="Número de Identidad" required>
            </div>
            <div>
                <label for="razon_social">Razón Social</label>
                <input type="text" id="razon_social" name="razon_social" placeholder="Razón Social" required>
            </div>
            <div>
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>
            </div>
            <div>
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" placeholder="Correo" required>
            </div>
            <div>
                <label for="departamento">Departamento</label>
                <input type="text" id="departamento" name="departamento" placeholder="Departamento" required>
            </div>
            <div>
                <label for="provincia">Provincia</label>
                <input type="text" id="provincia" name="provincia" placeholder="Provincia" required>
            </div>
            <div>
                <label for="distrito">Distrito</label>
                <input type="text" id="distrito" name="distrito" placeholder="Distrito" required>
            </div>
            <div>
                <label for="cod_postal">Código Postal</label>
                <input type="text" id="cod_postal" name="cod_postal" placeholder="Código Postal" required>
            </div>
            <div>
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
            </div>
            <div>
                <label for="rol">Rol</label>
                <input type="text" id="rol" name="rol" placeholder="Rol" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="text" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <div>
                <label for="estado">Estado</label>
                <input type="text" id="estado" name="estado" placeholder="Estado" required>
            </div>
            <div>
                <label for="fecha_reg">Fecha de Registro</label>
                <input type="date" id="fecha_reg" name="fecha_reg" required>
            </div>
            
            <button type="button" class="button" onclick="registrar_persona();">Enviar</button>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        </form>
    </div>
    <script src="<?php echo BASE_URL ?>views/js/functions_persona.js"></script>
</body>
</html>
