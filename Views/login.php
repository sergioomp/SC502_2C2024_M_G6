<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginEcoEats</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/login.css">
</head>
<body>
<header>
        <nav class="navbar"class="navbar navbar-expand-lg bg-body-tertiary">
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
        <h1 class="text-center">Log-in</h1>
        <div class="formulario">
            <form id="miformulario" action="./recibe.html" method="POST">
                <div class="mb-3">
                    <label for="nombreUsuario" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreUsuario" name= "nombre" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="nombreUsuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="nombreUsuario" rows="1" name="Usuario"></input>
                  </div>
                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" id="correo" rows="1" name="correo"></input>
                  </div>
                  <div class="mb-3">
                    <label for="passwordUsuario" class="form-label">password</label>
                    <input type="password" class="form-control" id="passwordUsuario" rows="1" name="Usuario"></input>
                  </div>
                  
                  <div class="mb-3">
                    <div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Tipo de Usuario</option>
                            <option value="0">Voluntario</option>
                            <option value="1">Patrocinador/Afiliado</option>
                            
                          </select>
                    </div>
                    <br>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success"> registrarse</button>
                    </div>
                    
            </form>
        </div>
    </section>
    <br>
    <br>
    <hr>
    <hr>
    <footer classs="footer">
        <h3>Contactenos</h3>
        <span class="material-symbols-outlined">
            call support_agent
        </span>
        <hr>
        <p>tel:8888-8888 correo: EcoEatsCorp@gmail.com</p>
    </footer>
</body>
</html>