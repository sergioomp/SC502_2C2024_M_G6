<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/from_registros.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <title>EcoEats - Registro</title>
</head>
<body>
    <header>
        <?php include './header.php'; ?>
    </header>

    <div class="form-container">
        <form class="row g-3" method="POST" action="../controller/RegistroController.php" id="registroForm">
            <h1 class="text-center">Registrarse</h1>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="ruta_imagen" class="form-label">Ruta de Imagen</label>
                    <input type="text" class="form-control" id="ruta_imagen" name="ruta_imagen">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./Assets/js/registro.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</body>
</html>