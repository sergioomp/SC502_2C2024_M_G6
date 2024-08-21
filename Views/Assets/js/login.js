$(document).ready(function () {
    $('#miformulario').on('submit', function (e) {
        e.preventDefault(); 

        var formData = new FormData(this);

        fetch('../controller/loginController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.exito) {
                window.location.href = './index.php'; 
            } else {
                alert(data.msg); 
            }
        })
        .catch(error => {
            console.error('Error:', error); 
            alert('Se presentó un error al procesar la solicitud.'); 
        });
    });
});
