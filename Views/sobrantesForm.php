<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <title>EcoEats - Registrar Sobrante</title>
</head>
<body>
    <header>
        <?php include './header.php'; ?>
    </header>

    <div class="container mt-5">
        <form class="row g-3" method="POST" action="../controller/sobrantesController.php" id="formSobrante" enctype="multipart/form-data">
            <h1 class="text-center">Registrar Sobrante</h1>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id_patrocinador" class="form-label">ID Patrocinador</label>
                    <input type="number" class="form-control" id="id_patrocinador" name="id_patrocinador" required>
                </div>
                <div class="form-group">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
                    <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" required>
                </div>
                <div class="form-group">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="activo">Activo</option>
                        <option value="seleccionado">Seleccionado</option>
                        <option value="retirado">Retirado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="imageUpload" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="imageUpload" name="imageUpload">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar Sobrante</button>
            </div>
        </form>
        <div id="response" class="mt-3"></div>
    </div>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./Assets/js/sobrantes.js"></script>
</body>
</html>