async function mostrar_pago() {
    try {
        let respuesta = await fetch(base_url+'controller/Pago.php?tipo=listar');
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
                <td>${item.venta.codigo}</td>
                <td>${item.fecha}</td>
                <td>${item.monto}</td>
                <td>${item.metodo_pago}</td>
              
                <td>${item.options}</td>`;

                document.querySelector('#tbl_pago').appendChild(nueva_fila)
            });
        }
        console.log(json);
    } catch (error) {
        console.log("oops salio error"+error);
    }
}

if (document.querySelector('#tbl_pago')) {
    mostrar_pago();
}


async function registrar_pago(){
    let venta = document.querySelector('#id_venta').value;
    let fecha = document.querySelector('#fecha').value;
    let monto = document.querySelector('#monto').value;
    let metodo = document.querySelector('#metodo').value;
    

    if (venta == "" || fecha == "" || monto == "" || metodo == "") {
        alert("Error: campos vacíos");
        return;
    }

    try {
        // Capturamos datos del formulario HTML
        const datos = new FormData(frmRegistrarPago);
        
        // Enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Pago.php?tipo=registrar', {
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
async function listar_venta(){
    try {
        let respuesta = await fetch(base_url + 'controller/Ventas.php?tipo=listar');
        let json = await respuesta.json();

        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';

            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.codigo + '</option>';
            });
            document.getElementById('id_venta').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (error) {
        console.log("Error al cargar productos: " + error);
    }
}