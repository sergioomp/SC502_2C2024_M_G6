<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/from_registros.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include './header.php'; ?>
    </header>

    <div class="form-container">
        <form id="formulario" class="row g-3">
            <h1 class="text-center">Voluntario</h1>
            <div class="form-group col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="correo">
            </div>
            <div class="form-group col-md-6">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group col-md-6">
                <label for="transporte" class="form-label">Tipo de transporte</label>
                <select id="transporte" class="form-select" name="transporte">
                    <option selected>Carro</option>
                    <option>Moto</option>
                    <option>Camión</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="identificador" class="form-label">Identificación</label>
                <input type="text" class="form-control" id="identificador" name="identificador">
            </div>
            <div class="form-group col-md-6">
                <label for="canton" class="form-label">Cantón</label>
                <input type="text" class="form-control" id="canton" name="canton">
            </div>
            <div class="form-group col-md-6">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña">
            </div>
            <div class="form-group full-width col-12">
                <button type="button" class="btn btn-primary" onclick="showTerms()">Registrar</button>
            </div>
        </form>
    </div>
    
    <div id="terms" class="terms-content" style="display: none;">
        <span class="close-btn" onclick="closeTerms()">&times;</span>
        <h5>Gracias por visitar el Programa Voluntario de Asistencia Alimentaria. Usted reconoce y acepta los siguientes términos y condiciones al participar en este programa. Antes de continuar, lea atentamente este párrafo.</h5>
        <br>
        
        <div class="col-12 d-flex justify-content-center flex-column align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="acceptTerms">
                <label class="form-check-label" for="acceptTerms">
                    Acepta los términos y Condiciones
                </label>
            </div>
            <br>
            <button type="button" id="registerButton" class="btn btn-warning" disabled onclick="register()">
                Registrarse
            </button>
        </div>
    </div>

    <footer>
        <?php include './footer.php'; ?>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script src="./Assets/js/CVoluntario.js"></script>
    <script src="./Assets/js/FromTerminos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
