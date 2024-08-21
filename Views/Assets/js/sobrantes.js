document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.querySelector('#formSobrante');
    const idPatrocinador = formulario.querySelector('input[name="id_patrocinador"]');
    const descripcion = formulario.querySelector('textarea[name="descripcion"]');
    const cantidad = formulario.querySelector('input[name="cantidad"]');
    const fechaCreacion = formulario.querySelector('input[name="fecha_creacion"]');
    const estado = formulario.querySelector('select[name="estado"]');

    formulario.addEventListener('submit', function(event) {
        event.preventDefault();
        let valido = true;

        limpiarErrores();

        if (idPatrocinador.value.trim() === '') {
            mostrarError(idPatrocinador, 'El ID del patrocinador es obligatorio.');
            valido = false;
        }

        if (descripcion.value.trim() === '') {
            mostrarError(descripcion, 'La descripción es obligatoria.');
            valido = false;
        }

        if (cantidad.value.trim() === '' || isNaN(cantidad.value) || cantidad.value <= 0) {
            mostrarError(cantidad, 'La cantidad debe ser un número positivo.');
            valido = false;
        }

        if (fechaCreacion.value.trim() === '') {
            mostrarError(fechaCreacion, 'La fecha de creación es obligatoria.');
            valido = false;
        }

        if (estado.value.trim() === '') {
            mostrarError(estado, 'El estado es obligatorio.');
            valido = false;
        }

        if (valido) {
            const formData = new FormData(formulario);

            fetch('../controller/sobrantesController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.exito) {
                    mostrarMensaje(data.msg, 'success');
                } else {
                    mostrarMensaje(data.msg, 'danger');
                }
            })
            .catch(error => {
                mostrarMensaje('Error al insertar el sobrante.', 'danger');
            });
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

    function mostrarMensaje(mensaje, tipo) {
        const responseDiv = document.querySelector('#response');
        responseDiv.innerHTML = `<div class="alert alert-${tipo}">${mensaje}</div>`;
    }
});
