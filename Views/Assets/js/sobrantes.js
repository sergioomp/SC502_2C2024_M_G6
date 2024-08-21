document.addEventListener("DOMContentLoaded", function() {
    

    fetch('.../controller/sobrantesController?op=listar_productos')
    .then(response => response.json())
    .then(productos => {
        const contenedor = document.querySelector('section');

        productos.forEach(producto => {

                //div de producto
            const divProducto = document.createElement('div');
            divProducto.classList.add('producto');



            const divImgProducto = document.createElement('div');
            divImgProducto.classList.add('imgProducto');
            const img = document.createElement('img');
            img.src = producto[5]; 
            img.alt = producto[1];
            divImgProducto.appendChild(img);

            
            const divNombreProducto = document.createElement('div');
            divNombreProducto.classList.add('nombreProducto');
            divNombreProducto.textContent = producto[1]; 

            
            const divCantidad = document.createElement('div');
            divCantidad.classList.add('cantidad');
            const labelCantidad = document.createElement('label');
            labelCantidad.setAttribute('for', 'cantidad');
            labelCantidad.textContent = 'Cantidad';
            const inputCantidad = document.createElement('input');
            inputCantidad.type = 'number';
            inputCantidad.id = `cantidad-${producto[0]}`; 
            inputCantidad.min = 0;
            inputCantidad.max = producto[2]; 
            divCantidad.appendChild(labelCantidad);
            divCantidad.appendChild(inputCantidad);

            const botonAgregar = document.createElement('button');
            botonAgregar.classList.add('boton');
            botonAgregar.textContent = 'Agregar al carrito';

            divProducto.appendChild(divImgProducto);
            divProducto.appendChild(divNombreProducto);
            divProducto.appendChild(divCantidad);
            divProducto.appendChild(botonAgregar);

            contenedor.appendChild(divProducto);
        });
    })
    .catch(error => console.error('Error al obtener los productos:', error));