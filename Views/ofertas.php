<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoEats</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./Assets/css/estilosOfertas.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="./index">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
              aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
      <h1>Productos disponibles</h1>
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card card-1">
                    <div class="card-body">
                        <div class="imgProducto">
                    <img src="https://th.bing.com/th/id/OIP.rF_gz9_ACYXs2_ceidpzPAHaE8?rs=1&pid=ImgDetMain" alt="queque">
                </div>
                <div class="nombreProducto">queque</div>
                <div class="cantidad">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" min="0" max="11">
                </div>
                <div>
                    <button class="boton">Agregar al carrito</button>
                </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4 mb-3">
                <div class="card card-2">
                    <div class="card-body">
                        <div class="imgProducto">
                    <img src="https://th.bing.com/th/id/OIP.KQtJc3n01eVCkiB418ztUwHaFj?rs=1&pid=ImgDetMain" alt="pizza">
                </div>
                <div class="nombreProducto">pizza</div>
                <div class="cantidad">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" min="0" max="5">
                </div>
                <div>
                    <button class="boton">Agregar al carrito</button>
                </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-4 mb-3">
                <div class="card card-2">
                    <div class="card-body">
                        <div class="imgProducto">
                    <img src="https://th.bing.com/th/id/OIP.T8O1rZI2upALh_4__FBmQAHaFj?rs=1&pid=ImgDetMain" alt="donas">
                </div>
                <div class="nombreProducto">Docena Donas</div>
                <div class="cantidad">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" min="0" max="1">
                </div>
                <div>
                    <button class="boton">Agregar al carrito</button>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-2">
                    <div class="card-body">
                        <div class="imgProducto">
                    <img src="https://assets.unileversolutions.com/recipes-v2/231513.jpg" alt="hamburguesa">
                </div>
                <div class="nombreProducto">Hamburguesa</div>
                <div class="cantidad">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" min="0" max="5">
                </div>
                <div>
                    <button class="boton">Agregar al carrito</button>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-2">
                    <div class="card-body">
                        <div class="imgProducto">
                    <img src="https://th.bing.com/th/id/OIP.ojdQYSxuQZ8VXWaYy71iVwHaFi?rs=1&pid=ImgDetMain" alt="pizza">
                </div>
                <div class="nombreProducto">pizza</div>
                <div class="cantidad">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" min="0" max="5">
                </div>
                <div>
                    <button class="boton">Agregar al carrito</button>
                </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-2">
                    <div class="card-body">
                        <div class="imgProducto">
                    <img src="https://th.bing.com/th/id/OIP.KQtJc3n01eVCkiB418ztUwHaFj?rs=1&pid=ImgDetMain" alt="pizza">
                </div>
                <div class="nombreProducto">pizza</div>
                <div class="cantidad">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" min="0" max="5">
                </div>
                <div>
                    <button class="boton">Agregar al carrito</button>
                </div>
                    </div>
                </div>
            </div>
                </div>
    </div>
    <footer>
        <h3>Contactenos</h3>
        <span class="material-symbols-outlined">
          call support_agent
        </span>
        <hr>
        <p>tel:8888-8888 correo: EcoEats@gmail.com</p>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qC1sPDbDbPlq1UQZyCffP7OcoLvEsuG4JovbQ8z5sTExYyNPt8i18HZ0pEsn70Ec" crossorigin="anonymous"></script>
</body>
</html>