async function listar_compras() {
    try {
        let respuesta = await fetch(base_url+'controller/compra.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila_"+item.id;
                cont+=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th>
                <td>${item.producto.nombre}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.fecha_compra}</td>
                <td>${item.trabajador.razon_social}</td>
                <td>${item.options}</td>`;

                document.querySelector('#tbl_compras').appendChild(nueva_fila)
            });
        }
        console.log(json);
    } catch (error) {
        console.log("oops salio error"+error);
    }
}

if (document.querySelector('#tbl_compras')) {
    listar_compras();
}



async function registrar_compra(){
    let producto = document.querySelector('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha_compra = document.querySelector('#fecha_compra').value;
    let trabajador = document.querySelector('#id_trabajador').value;

    if (producto == "" || cantidad == "" || precio == "" || fecha_compra == "" || trabajador == "") {
        alert("Error: campos vacíos");
        return;
    }

    try {
        // Capturamos datos del formulario HTML
        const datos = new FormData(frmRegistrarCompra);
        
        // Enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=registrar', {
            method: 'POST', 
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Ocurrió un error: " + e);
    }
}

async function listar_productos(){
    try {
        let respuesta = await fetch(base_url + 'controller/listar_producto.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';

            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
            });
            document.getElementById('id_producto').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (error) {
        console.log("Error al cargar productos: " + error);
    }
}

async function listar_trabajadores(){
    try {
        let respuesta = await fetch(base_url + 'controller/Trabajador.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';

            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
            });
            document.getElementById('id_trabajador').innerHTML = contenido_select;
        } else {
            console.log("No se encontraron trabajadores.");
        }

        console.log(json);
    } catch (error) {
        console.log("Error al cargar trabajadores: " + error);
    }
}
