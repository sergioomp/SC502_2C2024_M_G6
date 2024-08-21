<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/from_registros.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
  <link rel="stylesheet" href="./Assets/css/footer.css">
    <title>EcoEats</title>
    
</head>
    <header>
    <?php include './header.php'; ?>
    </header>

    <div class="form-container">
        <div class="row">
        <h1 class="text-center">Registrate como</h1>
            <h1 class="text-center">Patrocinador</h1>
            <div class="col-md-12">
                <form class="row g-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido">
                        </div>
                        <div class="form-group">
                            <label for="empresa" class="form-label">Empresa o Restaurante</label>
                            <input type="text" class="form-control" id="empresa">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña">
                        </div>
                        <div class="form-group">
                            <label for="ConfiContraseña" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="ConfiContraseña">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" onclick="showTerms()">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="terms" class="terms-content">
        <span class="close-btn" onclick="closeTerms()">&times;</span>
        <h5>Bienvenido al Programa de Patrocinadores de Comida a Precios Reducidos. Al participar en este programa, usted acepta los siguientes términos y condiciones. Por favor, lea atentamente este documento antes de continuar.</h5>
        <h5>Definiciones</h5>
        <h6>Se refiere al Programa de Patrocinadores de Comida a Precios Reducidos. Patrocinadores: Empresas, organizaciones o individuos que proporcionan fondos o productos alimenticios para el Programa. Beneficiarios: Personas de bajos recursos que reciben alimentos a precios reducidos a través del Programa. Organización: La entidad que administra y opera el Programa.</h6>
        <h5>Elegibilidad</h5>
        <h6>Cualquier empresa, organización o individuo interesado en apoyar la causa puede convertirse en patrocinador, previa aprobación de la Organización. Beneficiarios: Personas que demuestren ser de bajos recursos según los criterios establecidos por la Organización.</h6>
        <h5>Obligaciones de los Patrocinadores</h5>
        <h6>Proporcionar fondos o productos alimenticios de manera regular según lo acordado con la Organización. Garantizar que los alimentos proporcionados cumplan con los estándares de calidad y seguridad alimentaria establecidos por la ley. No utilizar el Programa con fines de lucro ni para obtener beneficios personales indebidos.</h6>
        <h5>Obligaciones de la Organización</h5>
        <h6>Distribuir los alimentos proporcionados por los patrocinadores a los beneficiarios de manera justa y equitativa. Mantener registros detallados de las donaciones recibidas y la distribución de los alimentos. Informar a los patrocinadores sobre el uso de sus donaciones y el impacto del Programa.</h6>
        <h5>Obligaciones de los Beneficiarios</h5>
        <h6>Proporcionar información veraz y actualizada sobre su situación económica para determinar su elegibilidad. Utilizar los alimentos recibidos exclusivamente para consumo personal o familiar. No revender los alimentos proporcionados a través del Programa.</h6>
        <h5>Limitación de Responsabilidad</h5>
        <h6>La Organización y los patrocinadores no serán responsables por cualquier daño directo, indirecto, incidental, especial o consecuente que surja del uso de los alimentos proporcionados a través del Programa.</h6>
        <h5>Modificaciones de los Términos y Condiciones</h5>
        <h6>La Organización se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Cualquier cambio será notificado a los patrocinadores y beneficiarios con la debida antelación.</h6>
        <h5>Terminación del Programa</h5>
        <h6>La Organización se reserva el derecho de terminar el Programa en cualquier momento, por cualquier motivo. En caso de terminación, se informará a los patrocinadores y beneficiarios con la mayor antelación posible.</h6>
        <div class="col-12 d-flex justify-content-center flex-column align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="acceptTerms">
                <label class="form-check-label" for="acceptTerms">
                    Acepta los términos y Condiciones
                </label>
            </div>
            <br>
            <button type="submit" id="registerButton" class="btn btn-warning" disabled disabled onclick="register()">
                Registrarse
            </button>
        </div>
    </div>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    <script src="./Assets/js/CPatrocinador.js"></script>
    <script src="./Assets/js/FromTerminos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
