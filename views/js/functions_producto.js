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

        console.log(respuesta);
             
    } catch (error) {
        console.log("error al cargar categoria"+ error);
    }

}

