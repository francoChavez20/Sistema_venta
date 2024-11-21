async function listar_producto() {
    try {
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
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
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                /<td>${item.id_proveedor}</td>
                <td></td>`;

                document.querySelector('#tbl_producto').appendChild(nueva_fila)
            });
        }
        console.log(json);
    } catch (error) {
        console.log("oops salio error"+error);
    }
}

if (document.querySelector('#tbl_producto')) {
    listar_producto();
}



async function registrar_producto(){
let codigo = document.getElementById('codigo').value ;
let nombre = document.querySelector('#nombre').value;
let detalle = document.querySelector('#detalle').value;
let precio= document.querySelector('#precio').value;
let stock = document.querySelector('#stock').value;
let categoria = document.querySelector('#categoria').value;
let fecha_v = document.querySelector('#fecha_v').value;
let imagen = document.querySelector('#imagen').value;
let proveedor = document.querySelector('#proveedor').value;
if (codigo=="" || nombre=="" || detalle=="" || precio=="" || stock=="" || categoria=="" || fecha_v=="" || imagen=="" || proveedor =="") {
    
    alert("error, campos vacios");
    return;
}
try{
    // capturamos datos del formulario html
    const datos = new FormData(frmRegistrar);
    //enviar datos hacia el controlador
    let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
        method: 'POST', 
        mode: 'cors',
        cache:'no-cache',
        body: datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro",json.mensaje,"succes");
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
        json = await respuesta.json();
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
            document.getElementById('categoria').innerHTML =
            contenido_select;

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


