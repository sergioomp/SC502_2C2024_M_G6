<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginEcoEats</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/Registros.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #198d84;">
<div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="https://i.pinimg.com/236x/07/0d/9e/070d9e283f603d76892846bc8f12d8cc.jpg" alt="" style="height: 40px;">
        </a>
                
        </nav>
    </header>
<section id="myForm" class="mt-3">
    <div class="formulario">
        <h1 class="text-center">Log-in</h1>
        <form id="miformulario" action="../controller/loginController.php" method="POST" name="loginform">
            <div class="mb-3">
                <label for="nombreUsuario" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombre" placeholder="">
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <div class="mb-3">
                <label for="passwordUsuario" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordUsuario" name="password">
            </div>
            <div class="mb-3">
                <label for="tipo_usuario" class="form-label">Tipo de Usuario</label>
                <select class="form-select" id="tipo_usuario" name="tipo_usuario">
                    <option value="" selected>Seleccionar tipo</option>
                    <option value="0">Usuario</option>
                    <option value="1">Voluntario</option>
                    <option value="2">Patrocinador/Afiliado</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Registrarse</button>
            </div>
        </form>
    </div>
</section>
<br>
<hr>
<footer>
        <?php include './footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="./Assets/js/login.js"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
