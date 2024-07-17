document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('gridCheck');
    const button = document.getElementById('registerButton');
  
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            button.classList.remove('disabled');
            button.removeAttribute('disabled'); // Asegura que el botón esté habilitado
        } else {
            button.classList.add('disabled');
            button.setAttribute('disabled', 'disabled'); // Deshabilita el botón
        }
    });
  
    // Evita que el formulario se envíe si el checkbox no está marcado
    button.addEventListener('click', function(event) {
        if (!checkbox.checked) {
            event.preventDefault();
        }
    });
});
