<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginEcoEats</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/Registros.css">
</head>
<body>
<header>
<nav class="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index">Logo</a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Voluntarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comercios afiliados</a>
                        </li>
                        <li class="nav-item">
                            <span>
                                <a class="nav-button" href="#patrocinadores">Patrocinadores/afiliados</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
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
<footer class="footer">
    <h3>Contáctenos</h3>
    <span class="material-symbols-outlined">
        call support_agent
    </span>
    <hr>
    <p>Tel: 8888-8888 | Correo: EcoEatsCorp@gmail.com</p>
</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="./Assets/js/login.js"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
