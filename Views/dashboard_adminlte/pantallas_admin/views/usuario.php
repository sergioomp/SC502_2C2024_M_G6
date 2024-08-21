<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.css">
</head>
<body>
    <div class="row">
        <!-- Formulario de creación de Usuario -->
        <div class="col-md-12" id="formulario_add">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Agregar un Usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form name="usuario_add" id="usuario_add" method="POST">
                                <input type="hidden" id="existeUsuario" name="existeUsuario">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="correo">Correo</label>
                                            <input type="email" class="form-control" id="correo"
                                                name="correo" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" id="nombre"
                                                name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="telefono">Teléfono</label>
                                            <input type="text" class="form-control" id="telefono"
                                                name="telefono" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="direccion">Dirección</label>
                                            <input type="text" class="form-control" id="direccion"
                                                name="direccion" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input type="password" class="form-control" id="password"
                                                name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="id_rol">Rol</label>
                                            <select name="id_rol" id="id_rol" class="form-control" required>
                                                <!-- Opciones de roles -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ruta_imagen">Ruta Imagen</label>
                                            <input type="text" class="form-control" id="ruta_imagen"
                                                name="ruta_imagen">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="submit" id="btnRegistrar" class="btn btn-success"
                                            value="Registrar">
                                        <input type="reset" class="btn btn-warning"
                                            value="Borrar datos">
                                    </div>
                                    <button class='btn btn-success activar'>Activar</button>
                                    <button class='btn btn-danger desactivar'>Desactivar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulario de modificación de Usuario -->
        <div class="col-md-12" id="formulario_update">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Modificar un Usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form name="usuario_update" id="usuario_update" method="POST">
                                <input type="hidden" class="form-control" id="EId" name="id_usuario">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Ecorreo">Correo</label>
                                            <input type="email" class="form-control" id="Ecorreo"
                                                name="correo" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Enombre">Nombre</label>
                                            <input type="text" class="form-control" id="Enombre"
                                                name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Etelefono">Teléfono</label>
                                            <input type="text" class="form-control" id="Etelefono"
                                                name="telefono" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Edireccion">Dirección</label>
                                            <input type="text" class="form-control" id="Edireccion"
                                                name="direccion" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Eruta_imagen">Ruta Imagen</label>
                                            <input type="text" class="form-control" id="Eruta_imagen"
                                                name="ruta_imagen">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Eid_rol">Rol</label>
                                            <select name="id_rol" id="Eid_rol" class="form-control" required>
                                                <!-- Opciones de roles -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="submit" class="form-control btn btn-warning"
                                            value="Modificar">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="button" class="form-control btn btn-info"
                                            value="Cancelar" onclick="cancelarForm()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Listado de usuarios -->
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Usuarios existentes</h3>
                </div>
                <div class="card-body p-0">
                    <div class="row mt-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <table id="tbllistado" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Ruta Imagen</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfooter>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Ruta Imagen</th>
                                    <th>Opciones</th>
                                </tfooter>
                            </table>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="plugins/DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/bootbox/bootbox.min.js"></script>
    <script src="plugins/toastr/toastr.js"></script>
    <script src="assets/js/usuario.js"></script>
</body>
</html>
