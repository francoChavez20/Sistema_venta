async function mostrar_venta() {
    try {
        let respuesta = await fetch(base_url+'controller/Ventas.php?tipo=listar');
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
                <td>${item.fecha_hora}</td>
                <td>${item.id_cliente}</td>
                <td>${item.id_vendedor}</td>
              
                <td>${item.options}</td>`;

                document.querySelector('#tbl_ventas').appendChild(nueva_fila)
            });
        }
        console.log(json);
    } catch (error) {
        console.log("oops salio error"+error);
    }
}

if (document.querySelector('#tbl_ventas')) {
    mostrar_venta();
}