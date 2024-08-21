<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoEats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/SobreNosotros.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
  <link rel="stylesheet" href="./Assets/css/footer.css">
</head>

<body>
  <header>
    
  <?php include './header.php'; ?>
    </header>
    
    <div>
      <br>
        <h1 class="titulo"><strong>Alimentando comunidades, Reduciendo Desperdicio</strong></h1>
    </div>
    <br>
    <h1 class="titulo"><strong>¿Quiénes somos?</strong></h1>
    <p class="texto">
        En Alimentos S.A, nuestro equipo cree firmemente en el poder de la comunidad para marcar una
        diferencia significativa en la vida de las personas que más lo necesitan. Estamos convencidos
        de que, trabajando juntos, podemos generar un impacto positivo y duradero en nuestra sociedad.
        Por ello, hemos diseñado nuestro sitio web con el propósito específico de facilitar la donación
        de sobras de comida de restaurantes a personas que no tienen para comer. Esta iniciativa no solo
        aborda el problema del desperdicio de alimentos, sino que también proporciona una solución efectiva
        y compasiva para aquellos que se encuentran en situaciones de necesidad.
        
        Nuestro sitio web actúa como un puente entre los restaurantes que tienen comida en exceso y las
        personas que carecen de acceso a alimentos. De esta manera, contribuimos a reducir el desperdicio
        de comida, un problema cada vez más preocupante en nuestra sociedad actual. Al mismo tiempo,
        ofrecemos un alivio tangible y necesario a aquellos que más ayuda necesitan, asegurando que las
        sobras de comida, que de otro modo se desperdiciarían, lleguen a quienes realmente las valoran.
    </p>
  <br>
    <h1 class="titulo"><strong>Nuestra Misión</strong></h1>
    <p class="texto">
        Nuestra misión en Alimentos S.A es abordar dos problemas presentes en nuestra sociedad: el hambre
        y el desperdicio de alimentos. Nos hemos comprometido a encontrar una solución eficiente y efectiva
        mediante la creación de una plataforma accesible. Esta plataforma facilita la donación de sobrantes
        de comida de restaurantes, alimentos que de otro modo serían desperdiciados.
        Entendemos que muchos restaurantes, a pesar de sus mejores esfuerzos, a menudo se enfrentan al desafío
        de gestionar los excedentes de comida al final del día. Nuestra plataforma les proporciona una salida
        responsable para estos alimentos, canalizándolos hacia las personas y organizaciones que más los necesitan.
        Al hacerlo, no solo ayudamos a reducir el desperdicio de alimentos, sino que también aseguramos que estos
        recursos vitales lleguen a aquellos que enfrentan inseguridad alimentaria.
    </p>

    <h1 class="titulo"><strong>¿Cómo operamos?</strong></h1>
    <p class="texto">
        Nuestro modo de operación es sencillo:
    </p>
    
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Registro de Restaurantes Participantes
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Registra tu restaurante en nuestra plataforma y únete a la lucha contra el desperdicio de alimentos. Es fácil y rápido.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Alerta de Sobrantes de Comida
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Notifica tus sobrantes de comida en nuestro sitio web con unos simples clics. Ayuda a quienes más lo necesitan con un gesto rápido y efectivo.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Alerta Activa hasta su Selección
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Tu alerta permanecerá activa en nuestra plataforma hasta que otro usuario se comprometa a recoger los alimentos. Maximiza el impacto de tu donación.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Coordinación del Retiro de Alimentos
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            Una vez seleccionada la alerta, compartiremos información de contacto con el usuario para coordinar el retiro de los alimentos.
        </div>
    </div>
  </div>
</div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card card-1">
                    <div class="card-body">
                        <h5 class="card-title">Registra tu restaurante</h5>
                        <a href="./FromPatrocinador.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-2">
                    <div class="card-body">
                        <h5 class="card-title">Registrate como voluntario</h5>
                        <a href="./FromVolutario.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-3">
                    <div class="card-body">
                        <h5 class="card-title">Ofertas</h5>
                        <a href="./ofertas.php" class="btn btn-primary">Ir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    

    <footer>
        <?php include './footer.php'; ?>
    </footer>
    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>