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
                <td>${item.id_venta}</td>
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