$(document).ready(function () {
    $('#formSobrante').on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData($('#formSobrante')[0]);

        $.ajax({
            url: '../controller/sobrantesController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#response').html('<div class="alert alert-success">Sobrante insertado exitosamente!</div>');
            },
            error: function (err) {
                $('#response').html('<div class="alert alert-danger">Error al insertar el sobrante.</div>');
            }
        });
    });
});
