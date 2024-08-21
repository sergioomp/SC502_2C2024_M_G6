document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.querySelector('form');
    const idRol = formulario.querySelector('select[name="id_rol"]'); // Campo select para id_rol
    const nombre = formulario.querySelector('input[name="nombre"]');
    const telefonico = formulario.querySelector('input[name="telefonico"]');
    const direccion = formulario.querySelector('input[name="direccion"]');
    const correo = formulario.querySelector('input[name="correo"]');
    const password = formulario.querySelector('input[name="password"]');
    const rutaImagen = formulario.querySelector('input[name="ruta_imagen"]'); // Campo opcional para ruta_imagen

    formulario.addEventListener('submit', function(event) {
        let valido = true;

        limpiarErrores();

        if (idRol.value.trim() === '') {
            mostrarError(idRol, 'El rol es obligatorio.');
            valido = false;
        }

        if (nombre.value.trim() === '') {
            mostrarError(nombre, 'El nombre es obligatorio.');
            valido = false;
        }

        if (telefonico.value.trim() === '') {
            mostrarError(telefonico, 'El número de teléfono es obligatorio.');
            valido = false;
        } else if (!/^\d+$/.test(telefonico.value)) {
            mostrarError(telefonico, 'El número de teléfono debe contener solo números.');
            valido = false;
        }

        if (direccion.value.trim() === '') {
            mostrarError(direccion, 'La dirección es obligatoria.');
            valido = false;
        }

        if (correo.value.trim() === '') {
            mostrarError(correo, 'El correo electrónico es obligatorio.');
            valido = false;
        } else if (!validarCorreo(correo.value)) {
            mostrarError(correo, 'El correo electrónico no es válido.');
            valido = false;
        }

        if (password.value.trim() === '') {
            mostrarError(password, 'La contraseña es obligatoria.');
            valido = false;
        } else if (password.value.length < 6) {
            mostrarError(password, 'La contraseña debe tener al menos 6 caracteres.');
            valido = false;
        }

        if (!valido) {
            event.preventDefault();
        }
    });

    function mostrarError(elemento, mensaje) {
        const error = document.createElement('div');
        error.classList.add('error');
        error.textContent = mensaje;
        elemento.parentElement.appendChild(error);
    }

    function limpiarErrores() {
        const errores = formulario.querySelectorAll('.error');
        errores.forEach(error => error.remove());
    }

    function validarCorreo(correo) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(correo);
    }
});
