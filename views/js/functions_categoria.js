async function registrar_categoria(){
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
   
    if (nombre=="" || detalle=="" ) {
        
        alert("error, campos vacios");
        return;
    }
    try{
        // capturamos datos del formulario html
        const datos = new FormData(frmRegistrarCategoria);
        //enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/registrar_categoria.php?tipo=registrar',{
            method: 'POST', 
            mode: 'cors',
            cache:'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro",json.mensaje,"success");
        }else{
            swal("Registro",json.mensaje,"error");
        }
    
        console.log(json);
    }catch(e){
        console.log("oops ocurrio un error"+e);
    }
    
    }
    
    async function listar_categoria(){
        try {
            let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
            let json = await respuesta.json();
            if (json.status) {
                let datos =  json.contenido;
                let contenido_select = '<option value="">Seleccione</option>';
    
                datos.forEach(element => {
                    contenido_select += '<option value="' + element.id +'">' + element.nombre + '</option>';
    
                    //se trabaja con jquery
                    /*$('#categoria').append($('<option />',{
                        text:`${element.nombre}`,
                        value:`${element.id}`
                    }));*/
                    
                });
                document.getElementById('categoria').innerHTML = contenido_select;
    
            }
    
    
            console.log(respuesta);
                 
        } catch (error) {
            console.log("error al cargar categoria"+ error);
        }
    
    }
    
    
    
    async function listar_proveedor() {
        try {
    
            let respuesta = await fetch(base_url + 'controller/proveedor.php?tipo=listar');
            let json = await respuesta.json();
    
            if (json.status) {
                let datos = json.contenido;
                let contenido_select = '<option value="">Seleccione</option>';
    
                
                datos.forEach(element => {
                    contenido_select += `<option value="${element.id}">${element.razon_social}</option>`;
                    
                    // Si deseas trabajar con jQuery, puedes utilizar esta sección
                    /*
                    $('#categoria').append($('<option />', {
                        text: `${element.nombre}`,
                        value: `${element.id}`
                    }));
                    */
                });
                document.getElementById('proveedor').innerHTML = contenido_select;
            } else {
                console.log("No se encontraron proveedores.");
            }
    
            console.log(json); 
                 
        } catch (error) {
            console.log("Error al cargar proveedor: " + error);
        }
    }
    
    
    