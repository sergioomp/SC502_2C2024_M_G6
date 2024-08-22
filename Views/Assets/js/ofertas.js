document.addEventListener("DOMContentLoaded", function() {
    fetch('.../controller/ofertasController.php?op=listarSobrantes')
        .then(response => response.json())
        .then(datos => {
            if (datos.error) {
                console.error(datos.error);
                return;
            }

            const contenedor = document.querySelector('section');
            contenedor.innerHTML = ''; 

            datos.forEach(data => {
                
                const divdata = document.createElement('div');
                divdata.classList.add('data');

                const divImgdata = document.createElement('div');
                divImgdata.classList.add('imgdata');
                const img = document.createElement('img');
                img.src = data[5]; 
                img.alt = data[1]; 
                divImgdata.appendChild(img);

           
                const divNombredata = document.createElement('div');
                divNombredata.classList.add('nombredata');
                divNombredata.textContent = data[1]; 

              
                const divCantidad = document.createElement('div');
                divCantidad.classList.add('cantidad');
                const labelCantidad = document.createElement('label');
                labelCantidad.setAttribute('for', `cantidad-${data[0]}`);
                labelCantidad.textContent = 'Cantidad';
                const inputCantidad = document.createElement('input');
                inputCantidad.type = 'number';
                inputCantidad.id = `cantidad-${data[0]}`; 
                inputCantidad.min = 0;
                inputCantidad.max = data[2];
                divCantidad.appendChild(labelCantidad);
                divCantidad.appendChild(inputCantidad);

                const botonAgregar = document.createElement('button');
                botonAgregar.classList.add('boton');
                botonAgregar.textContent = 'Agregar al carrito';

                divdata.appendChild(divImgdata);
                divdata.appendChild(divNombredata);
                divdata.appendChild(divCantidad);
                divdata.appendChild(botonAgregar);

                contenedor.appendChild(divdata);
            });
        })
        .catch(error => console.error('Error al obtener los datas:', error));
});
