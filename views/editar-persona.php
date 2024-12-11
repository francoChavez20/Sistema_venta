<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Persona</title>
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
            background-color: #f0f2f5;
        }

        .form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px; /* Ampliado para acomodar las columnas */
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Contenedor para las filas de los campos */
        .form-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        /* Campos individuales en columnas */
        .form-row > div {
            flex: 1 1 calc(50% - 10px); /* Dos columnas con espacio */
            margin-right: 10px;
        }

        .form-row > div:last-child {
            margin-right: 0; /* Sin margen en el último */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        select:focus {
            border-color: #4CAF50;
            outline: none;
            background-color: #f1f9f1;
        }

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
    </style>
</head>
<body>
    <div class="form-container">
        <form class="form" action="" id="frmActualizar">
        <input type="hidden" name="id_persona" id="id_persona">
            <h2>Actualizar</h2>

            <!-- Filas del formulario -->
            <div class="form-row">
                <div>
                    <label for="nro_identidad">Número de Identidad</label>
                    <input type="text" id="nro_identidad" name="nro_identidad" placeholder="Número de Identidad" required>
                </div>
                <div>
                    <label for="razon_social">Razón Social</label>
                    <input type="text" id="razon_social" name="razon_social" placeholder="Razón Social" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>
                </div>
                <div>
                    <label for="correo">Correo</label>
                    <input type="text" id="correo" name="correo" placeholder="Correo" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="departamento">Departamento</label>
                    <input type="text" id="departamento" name="departamento" placeholder="Departamento" required>
                </div>
                <div>
                    <label for="provincia">Provincia</label>
                    <input type="text" id="provincia" name="provincia" placeholder="Provincia" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="distrito">Distrito</label>
                    <input type="text" id="distrito" name="distrito" placeholder="Distrito" required>
                </div>
                <div>
                    <label for="cod_postal">Código Postal</label>
                    <input type="text" id="cod_postal" name="cod_postal" placeholder="Código Postal" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
                </div>
                <div>
                    <label for="rol">Rol</label>
                    <input type="text" id="rol" name="rol" placeholder="Rol" readonly>
                </div>
            </div>


            <!-- Botón de envío -->
            <button type="button" class="button" onclick="actualizar_persona();">Enviar</button>
        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo BASE_URL ?>views/js/functions_personas.js"></script>
    <script>
    const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina[1];?>;
    editar_Persona(id_p);
    </script>
</body>
</html>
