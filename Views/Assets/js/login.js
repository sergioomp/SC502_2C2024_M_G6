$(document).ready(function () {
    $('#miformulario').on('submit', function (e) {
        e.preventDefault(); // Previene el envío tradicional del formulario

        var formData = new FormData(this);

        fetch('../controller/loginController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.exito) {
                window.location.href = './index.php'; // Redirige a la página de índice si la inserción fue exitosa
            } else {
                alert(data.msg); // Muestra un mensaje de error si la inserción falló
            }
        })
        .catch(error => {
            console.error('Error:', error); // Muestra el error en la consola si ocurre un problema
            alert('Se presentó un error al procesar la solicitud.'); // Mensaje genérico para el usuario
        });
    });
});
