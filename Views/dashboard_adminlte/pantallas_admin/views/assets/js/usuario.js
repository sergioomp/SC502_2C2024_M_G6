/* Función para limpieza de los formularios */
function limpiarForms() {
  $('#usuario_add').trigger('reset');
  $('#usuario_update').trigger('reset');
}

/* Función para cancelación del uso del formulario de modificación */
function cancelarForm() {
  limpiarForms();
  $('#formulario_add').show();
  $('#formulario_update').hide();
}

/* Función para cargar el listado en el DataTable */
function listarUsuariosTodos() {
  $('#tbllistado').DataTable({
    processing: true, // Activamos el procesamiento de DataTables
    serverSide: true, // Paginación y filtrado del lado del servidor
    dom: 'Bfrtip', // Definimos los elementos del control de tabla
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../controllers/UsuarioController.php?op=listar_para_tabla',
      type: 'GET',
      dataType: 'json',
      error: function (e) {
        console.log(e.responseText);
        toastr.error('Error al cargar los datos.');
      },
      dataSrc: 'aaData', // Usamos dataSrc para manejar los datos devueltos
    },
    destroy: true, // Permite destruir la instancia de DataTable anterior
    pageLength: 5, // Número de registros a mostrar por página
  });
}

/* Función Principal */
$(function () {
  $('#formulario_update').hide();
  listarUsuariosTodos();
});

/* CRUD */

/* Añadir usuario */
$('#usuario_add').on('submit', function (event) {
  event.preventDefault();
  $('#btnRegistar').prop('disabled', true);
  var formData = new FormData($(this)[0]);
  $.ajax({
    url: '../controllers/UsuarioController.php?op=insertar',
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      switch (datos) {
        case '1':
          toastr.success('Usuario registrado exitosamente');
          $('#usuario_add')[0].reset();
          $('#tbllistado').DataTable().ajax.reload();
          break;
        case '2':
          toastr.error('El correo ya existe. Corrija e inténtelo nuevamente.');
          break;
        case '3':
          toastr.error('Hubo un error al tratar de ingresar los datos.');
          break;
        default:
          toastr.error('Error desconocido: ' + datos);
          break;
      }
      $('#btnRegistar').removeAttr('disabled');
    },
    error: function (xhr, status, error) {
      toastr.error('Error al registrar el usuario.');
      $('#btnRegistar').removeAttr('disabled');
    }
  });
});

/* Función para activación de usuarios */
function activar(id) {
  bootbox.confirm('¿Está seguro de activar el usuario?', function (result) {
    if (result) {
      $.post(
        '../controllers/UsuarioController.php?op=activar',
        { idUser: id },
        function (data) {
          switch (data) {
            case '1':
              toastr.success('Usuario activado');
              $('#tbllistado').DataTable().ajax.reload();
              break;
            case '0':
              toastr.error('Error: El usuario no puede activarse. Consulte con el administrador.');
              break;
            default:
              toastr.error('Error desconocido: ' + data);
              break;
          }
        },
        'text'
      ).fail(function() {
        toastr.error('Error al activar el usuario.');
      });
    }
  });
}

/* Función para desactivación de usuarios */
function desactivar(id) {
  bootbox.confirm('¿Está seguro de desactivar el usuario?', function (result) {
    if (result) {
      $.post(
        '../controllers/UsuarioController.php?op=desactivar',
        { idUser: id },
        function (data) {
          switch (data) {
            case '1':
              toastr.success('Usuario desactivado');
              $('#tbllistado').DataTable().ajax.reload();
              break;
            case '0':
              toastr.error('Error: El usuario no puede desactivarse. Consulte con el administrador.');
              break;
            default:
              toastr.error('Error desconocido: ' + data);
              break;
          }
        },
        'text'
      ).fail(function() {
        toastr.error('Error al desactivar el usuario.');
      });
    }
  });
}

/* Habilitación del formulario de modificación al presionar el botón en la tabla */
$('#tbllistado tbody').on('click', 'button[id="modificarUsuario"]', function () {
  var data = $('#tbllistado').DataTable().row($(this).parents('tr')).data();
  limpiarForms();
  $('#formulario_add').hide();
  $('#formulario_update').show();
  $('#EId').val(data[0]);
  $('#Eemail').val(data[1]);
  $('#Enombre').val(data[2]);
  $('#Eimage').val(data[3]);
  $('#Etelefono').val(data[4]);
  return false;
});

/* Función para modificación de datos de usuario */
$('#usuario_update').on('submit', function (event) {
  event.preventDefault();
  bootbox.confirm('¿Desea modificar los datos?', function (result) {
    if (result) {
      var formData = new FormData($('#usuario_update')[0]);
      $.ajax({
        url: '../controllers/UsuarioController.php?op=editar',
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
              $('#tbllistado').DataTable().ajax.reload();
              limpiarForms();
              $('#formulario_update').hide();
              $('#formulario_add').show();
              break;
            case '2':
              toastr.error('Error: Correo no pertenece al usuario.');
              break;
            default:
              toastr.error('Error desconocido: ' + datos);
              break;
          }
        },
        error: function (xhr, status, error) {
          toastr.error('Error al actualizar el usuario.');
        }
      });
    }
  });
});
