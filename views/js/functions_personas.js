async function listar_proveedor() {
    try {
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar');
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
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.provincia}</td>
                <td>${item.distrito}</td>
                <td>${item.cod_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>
                <td>${item.options}</td>`;

                document.querySelector('#tbl_proveedor').appendChild(nueva_fila)
            });
        }
        console.log(json);
    } catch (error) {
        console.log("oops salio error"+error);
    }
}
if (document.querySelector('#tbl_proveedor')) {
    listar_proveedor();
}






async function listar_usuarios() {
    try {
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar_usuario');
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
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.provincia}</td>
                <td>${item.distrito}</td>
                <td>${item.cod_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>
                <td>${item.options}</td>`;

                document.querySelector('#tbl_usuario').appendChild(nueva_fila)
            });
        }
        console.log(json);
    } catch (error) {
        console.log("oops salio error"+error);
    }
}

if (document.querySelector('#tbl_usuario')) {
    listar_usuarios();
}


async function registrar_usuarios() {
    // Capturamos los valores de los campos del formulario
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value
    

    // Verificación de campos vacíos
    if (
        nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" ||
        departamento == "" || provincia == "" || distrito == "" || cod_postal == "" ||
        direccion == "" || rol == "" || password == ""
    ) {
        alert("Error, campos vacíos");
        return;
    }

    try {
        // Capturamos los datos del formulario HTML
        const datos = new FormData(document.getElementById('frmRegistrarPersona'));
        
        // Enviar los datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

         json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}


async function editar_persona(id) {
    const formData = new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=ver',{
            method: 'POST',
            mode:'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#cod_postal').value = json.contenido.cod_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
          }else{
            window.location= base_url+"ver-usuario";
        }
        console.log(json);
    } catch (error) {
        console.log("opp ocurrio un error"+error)
    }
}

async function actualizar_persona() {
    const datos = new FormData(frmActualizar);
    try{
        
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=actualizar',{
            method: 'POST', 
            mode: 'cors',
            cache:'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Actualizacion",json.mensaje,"success");
        }else{
            swal("Actualizacion",json.mensaje,"error");
        }
    
        console.log(json);
    }catch(e){
       
    }
    

}









async function eliminar_persona(id) {
    swal({
        title: "¿Estás seguro de eliminar este usuario?",
        text: "No podrás recuperarlo",
        icon:"warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete)=>{
        if (willDelete) {
            fnt_eliminar(id);
        }

    })
}

async function fnt_eliminar(id) {
     const formdata = new FormData();
     formdata.append('id_usuario', id);
     try{
        
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=eliminar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formdata
        });

        let json = await respuesta.json();
        
        if (json.status) {
            swal("Eliminar", json.message || "Eliminado correctamente", "success");
            document.querySelector('#fila_' + id).remove();
        } else {
            swal("Eliminar", json.message || "No se pudo eliminar", "warning");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
        swal("Error", "no se puede eliminar por que esta afiliada a otro registro.", "error");
    }

}