<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>EcoEats</title>
    <link rel="stylesheet" href="./Assets/css/terminos.css">
</head>
<body class="body" style="background-color: #f3e0bc;">
    <header class="header">
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
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        Bienvenido al Programa de Patrocinadores de Comida a Precios Reducidos. Al participar en este programa, usted acepta los siguientes términos y condiciones. Por favor, lea atentamente este documento antes de continuar.</h5><br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Definiciones</h5> 
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        Se refiere al Programa de Patrocinadores de Comida a Precios Reducidos.
        Patrocinadores: Empresas, organizaciones o individuos que proporcionan fondos o productos alimenticios para el Programa.
        Beneficiarios: Personas de bajos recursos que reciben alimentos a precios reducidos a través del Programa.
        Organización: La entidad que administra y opera el Programa.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Elegibilidad</h5>
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;"> 
        Cualquier empresa, organización o individuo interesado en apoyar la causa puede convertirse en patrocinador, previa aprobación de la Organización.<br>
        Beneficiarios: Personas que demuestren ser de bajos recursos según los criterios establecidos por la Organización.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Obligaciones de los Patrocinadores</h5>
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        Proporcionar fondos o productos alimenticios de manera regular según lo acordado con la Organización.
        Garantizar que los alimentos proporcionados cumplan con los estándares de calidad y seguridad alimentaria establecidos por la ley.
        No utilizar el Programa con fines de lucro ni para obtener beneficios personales indebidos.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Obligaciones de la Organización</h5>
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        Distribuir los alimentos proporcionados por los patrocinadores a los beneficiarios de manera justa y equitativa.
        Mantener registros detallados de las donaciones recibidas y la distribución de los alimentos.
        Informar a los patrocinadores sobre el uso de sus donaciones y el impacto del Programa.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Obligaciones de los Beneficiarios</h5>
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        Proporcionar información veraz y actualizada sobre su situación económica para determinar su elegibilidad.
        Utilizar los alimentos recibidos exclusivamente para consumo personal o familiar.
        No revender los alimentos proporcionados a través del Programa.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Limitación de Responsabilidad</h5>
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        La Organización y los patrocinadores no serán responsables por cualquier daño directo, indirecto, incidental, especial o consecuente que surja del uso de los alimentos proporcionados a través del Programa.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Modificaciones de los Términos y Condiciones</h5>
    <h6 style="margin-right: 70px; margin-left: 80px; text-align: justify;">
        La Organización se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será notificado a los patrocinadores y beneficiarios con la debida antelación.
    </h6>
    <br>
    <h5 style="margin-right: 70px; margin-left: 80px; text-align: justify;">Terminación del Programa</h5>
    <h6 style="margin-right: 70px; margin-left: 70px; text-align: justify;">
        La Organización se reserva el derecho de terminar el Programa en cualquier momento, por cualquier motivo. En caso de terminación, se informará a los patrocinadores y beneficiarios con la mayor antelación posible.
    </h6>
    <br>
    <div class="col-12 d-flex justify-content-center flex-column align-items-center">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Acepta los términos y Condiciones
      </label>
    </div>
    <br>
    <button type="button" id="registerButton" onclick="window.location.href='./Res_Patrocinador.php'" class="btn btn-warning" method="post" disabled>
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
        <p>tel:8888-8888 correo: EcoEatsCorp@gmail.com</p>
    </footer>
</body>
<script src="./Assets/js/Terminos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
