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
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
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
