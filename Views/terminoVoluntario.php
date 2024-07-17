<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/css/terminos.css">
</head>
<body class="body" style="background-color: #f3e0bc;">
    <header class="header">
        <nav class="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Logo</a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="#">Home</a>
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
    
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Gracias por visitar el Programa Voluntario de Asistencia Alimentaria. Usted reconoce y acepta los siguientes términos y condiciones al participar en este programa. Antes de continuar, lea atentamente este párrafo.<br>
    </h5>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Definiciones</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    Voluntarios: Personas que ofrecen gratuitamente su tiempo y experiencia para ayudar al funcionamiento de los programas.
Beneficiarios: Personas u organizaciones que reciben ayuda y servicios de los voluntarios.
Organización: La entidad responsable de supervisar y gestionar el programa.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Elegibilidad</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    Los voluntarios pueden ser cualquier persona que desee ayudar a la causa, pero antes deben contar con la aprobación de la organización.
Beneficiarios: Personas u organizaciones que la organización ha determinado que necesitan ayuda y apoyo.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Las obligaciones de los voluntarios</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    Cumplir sus deberes y obligaciones con diligencia y dedicación.
Respetar las políticas y procedimientos establecidos por la Organización.
No utilizar el programa para ganar dinero u obtener ventajas personales no aprobadas.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Responsabilidades de la Organización</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    Asignar el trabajo voluntario de forma justa y equitativa.
Proporcionar la formación y el apoyo necesarios para que los voluntarios puedan llevar a cabo sus tareas de manera eficiente.
Llevar un registro detallado de las acciones y contribuciones de los voluntarios.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Obligaciones de los Beneficiarios</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    Con el fin de determinar su elegibilidad, los Beneficiarios deben proporcionar información precisa y actualizada sobre sus circunstancias y necesidades.
utilizar la ayuda y los recursos únicamente en beneficio propio o de la comunidad.
colaborar con los voluntarios y mostrar respeto por su trabajo y esfuerzo.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Restricciones a la rendición de cuentas</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    En caso de daños directos, indirectos, incidentales, especiales o consecuentes de utilizar los servicios proporcionados a través del Programa, no serán responsables la Organización ni los voluntarios.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Modificaciones de las condiciones de venta</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    Estas condiciones están sujetas a cambios en cualquier momento por parte de la Organización. Cualquier cambio será comunicado a los voluntarios y beneficiarios con la antelación necesaria.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Finalización del Programa</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
    El Programa podrá ser finalizado por la Organización en cualquier momento y por cualquier causa. Los voluntarios y beneficiarios serán informados tan pronto como sea posible en caso de terminación.
    </h6>
    <br>

     <br>
    <div class="col-12 d-flex justify-content-center flex-column align-items-center">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Acepta los términos y Condiciones
      </label>
    </div>
    <br>
    <button type="button" id="registerButton" onclick="window.location.href='./voluntarios.php'" class="btn btn-warning" method="post" disabled>
      Registrarse
    </button>
    <br>
    <br>
  </div>
    <footer classs="footer">
        <h3>Contactenos</h3>
        <span class="material-symbols-outlined">
            call support_agent
        </span>
        <hr>
        <p>tel:8888-8888 correo: marcobruno@gmail.com</p>
    </footer>
</body>
<script src="./Assets/js/Terminos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
