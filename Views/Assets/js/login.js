function limpiarForms() {
    $('#loginform').trigger('reset');
   
  }

  $(document).ready(function () {
    $('#miformulario').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($('#miformulario')[0])
        $.ajax({
            url: '../controller/loginController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log("usuario guardado correctamente");
            },
            error: function (err) {

                console.log("usuario NOO guardado correctamente");
            }
        });
    })
});