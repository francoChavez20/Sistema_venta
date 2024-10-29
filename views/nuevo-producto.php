<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Estilo</title>
    <style>
      
        .form {
            
            background-color: white;
            margin: 60px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
           
        }
        div {
            margin-bottom: 15px;
            
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .button:hover {
            background-color: red;
        }
        
    </style>
</head>
<body>
    <div class="text">
    <form class="form" action="" id="frmRegistrar">
        <div>
            <label for="codigo">Código</label>
            <input type="text" id="codigo" name="codigo" placeholder="Código" required>
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div>
            <label for="detalle">Detalle</label>
            <input type="text" id="detalle" name="detalle" placeholder="Detalle" required>
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="text" id="precio" name="precio" placeholder="Precio" required>
        </div>
        <div>
            <label for="stock">Stock</label>
            <input type="text" id="stock" name="stock" placeholder="Stock" required>
        </div>
        <div>
            <label for="categoria">Categoría</label>
            <select name="categoria" id="categoria" required>
                <option>-- selecione --</option>
            </select>
            
        </div>
        <div>
            <label for="fecha_vencimiento">Fecha de Vencimiento</label>
            <input type="date" id="fecha_v" name="fecha_v" placeholder="Fecha de Vencimiento" required>
        </div>
        <div>
            <label for="imagen">Imagen</label>
            <input type="text" id="imagen" name="imagen" placeholder="URL de la imagen" required>
        </div>
        <div>
            <label for="proveedor">Proveedor</label>
            <input type="text" id="proveedor" name="proveedor" placeholder="Proveedor" required>
        </div>
        <button type="button" onclick="registrar_producto();">Enviar</button>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </form>
    </div>
    <script src="<?php echo BASE_URL?>views/js/functions_producto.js"></script>
    <script>listar_categoria();</script>
</body>
</html>
