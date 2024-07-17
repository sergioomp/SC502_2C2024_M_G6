<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/Registros.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar"class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
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

    <div class="form-container">
        <form class="row g-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre">
                </div>
                <div class="form-group">
                    <label for="inputApellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="inputApellido">
                </div>
                <div class="form-group">
                    <label for="inputEmpresa" class="form-label">Empresa</label>
                    <input type="text" class="form-control" id="inputEmpresa">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputTelefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="inputTelefono" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label for="inputCorreo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputCorreo">
                </div>
                <div class="form-group">
                    <label for="inputContraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="inputContraseña">
                </div>
                <div class="form-group">
                    <label for="inputConfiContraseña" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="inputConfiContraseña">
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
        <h3>Contactenos</h3>
        <span class="material-symbols-outlined">call support_agent</span>
        <hr>
        <p>tel:8888-8888 correo: marcobruno@gmail.com</p>
    </footer>

    <script>js.js</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
