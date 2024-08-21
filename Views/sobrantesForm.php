<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <form id="formSobrante" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id_restaurante" class="form-label">ID Restaurante</label>
            <input type="number" class="form-control" id="id_restaurante" name="id_restaurante" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
        </div>
        <div class="mb-3">
            <label for="fecha_creacion" class="form-label">Fecha de Creación</label>
            <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="activo">Activo</option>
                <option value="seleccionado">Seleccionado</option>
                <option value="retirado">Retirado</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="imageUpload" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imageUpload" name="imageUpload">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="response" class="mt-3"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src = "./Assets/js/sobrantes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>