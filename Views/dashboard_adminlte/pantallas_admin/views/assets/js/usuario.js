/*Funcion para limpieza de los formularios*/
function limpiarForms() {
  $('#usuario_add').trigger('reset');
  $('#usuario_update').trigger('reset');
}

/*Funcion para cancelacion del uso de formulario de modificación*/
function cancelarForm() {
  limpiarForms();
  $('#formulario_add').show();
  $('#formulario_update').hide();
}

/*Funcion para cargar el listado en el Datatable*/
function listarUsuariosTodos() {
  tabla = $('#tbllistado').dataTable({
    aProcessing: true, //actiavmos el procesamiento de datatables
    aServerSide: true, //paginacion y filtrado del lado del serevr
    dom: 'Bfrtip', //definimos los elementos del control de tabla
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../controllers/usuarioController.php?op=listar_para_tabla',
      type: 'get',
      dataType: 'json',
      error: function (e) {
        console.log(e.responseText);
      },
      bDestroy: true,
      iDisplayLength: 5,
    },
  });
}

/*Funcion Principal*/
$(function () {
  $('#formulario_update').hide();
  listarUsuariosTodos();
});

/*CRUD para agregar usuario*/
$('#usuario_add').on('submit', function (event) {
  event.preventDefault();
  $('#btnRegistrar').prop('disabled', true);
  var formData = new FormData($('#usuario_add')[0]);
  $.ajax({
    url: '../controllers/usuarioController.php?op=insertar',
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      switch (datos) {
        case '1':
          toastr.success('Usuario registrado exitosamente');
          $('#usuario_add')[0].reset();
          tabla.api().ajax.reload();
          break;

        case '2':
          toastr.error('El correo ya existe... Corrija e inténtelo nuevamente...');
          break;

        case '3':
          toastr.error('Hubo un error al tratar de ingresar los datos.');
          break;

        default:
          toastr.error(datos);
          break;
      }
      $('#btnRegistrar').removeAttr('disabled');
    },
  });
});

/*Funcion para activacion de usuarios*/
function activar(id) {
  bootbox.confirm('¿Está seguro de activar el usuario?', function (result) {
    if (result) {
      $.post(
        '../controllers/usuarioController.php?op=activar',
        { idUser: id },
        function (data, textStatus, xhr) {
          switch (data) {
            case '1':
              toastr.success('Usuario activado');
              tabla.api().ajax.reload();
              break;

            case '0':
              toastr.error(
                'Error: El usuario no puede activarse. Consulte con el administrador...'
              );
              break;

            default:
              toastr.error(data);
              break;
          }
        }
      );
    }
  });
}

/*Funcion para desactivacion de usuarios*/
function desactivar(id) {
  bootbox.confirm('¿Está seguro de desactivar el usuario?', function (result) {
    if (result) {
      $.post(
        '../controllers/usuarioController.php?op=desactivar',
        { idUser: id },
        function (data, textStatus, xhr) {
          switch (data) {
            case '1':
              toastr.success('Usuario desactivado');
              tabla.api().ajax.reload();
              break;

            case '0':
              toastr.error(
                'Error: El usuario no puede desactivarse. Consulte con el administrador...'
              );
              break;

            default:
              toastr.error(data);
              break;
          }
        }
      );
    }
  });
}

/*Habilitacion de formulario de modificacion al presionar el boton en la tabla*/
$('#tbllistado tbody').on(
  'click',
  'button[id="modificarUsuario"]',
  function () {
    var data = $('#tbllistado').DataTable().row($(this).parents('tr')).data();
    limpiarForms();
    $('#formulario_add').hide();
    $('#formulario_update').show();
    $('#EId').val(data[0]);
    $('#Enombre').val(data[1]);
    $('#Etelefono').val(data[2]);
    $('#Edireccion').val(data[3]);
    $('#Eemail').val(data[4]);
    $('#Eid_rol').val(data[5]);
    $('#Eruta_imagen').val(data[6]);
    return false;
  }
);

/*Funcion para modificacion de datos de usuario*/
$('#usuario_update').on('submit', function (event) {
  event.preventDefault();
  bootbox.confirm('¿Desea modificar los datos?', function (result) {
    if (result) {
      var formData = new FormData($('#usuario_update')[0]);
      $.ajax({
        url: '../controllers/usuarioController.php?op=editar',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
          switch (datos) {
            case '0':
              toastr.error('Error: No se pudieron actualizar los datos');
              break;
            case '1':
              toastr.success('Usuario actualizado exitosamente');
              tabla.api().ajax.reload();
              limpiarForms();
              $('#formulario_update').hide();
              $('#formulario_add').show();
              break;
            case '2':
              toastr.error('Error: Correo no pertenece al usuario.');
              break;
          }
        },
      });
    }
  });
});
