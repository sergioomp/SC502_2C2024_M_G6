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
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
</head>

<body>
    <header>
    <?php include './header.php'; ?>
    </header>

        <!-- Jumbotron -->
  <div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%); margin: 35px;">
    <h1 style="text-align: center">EcoEats<span class="material-symbols-outlined">
        bolt
        </span><span class="material-symbols-outlined">
            bolt
            </span><span class="material-symbols-outlined">
                bolt
                </span></h2>
    <hr/>
    <p>
      <h3 style="text-align: center;">Ofertas alimenticias RELAMPAGO </h3>
    </p>
    <p>En este apartado encontraremos una variedad de productos alimenticios publicadas por diferentes comercios con el fin de <strong>reducir el desperdicio alimenticio</strong>.</p>
    <p>Las condiciones alimenticias son ideales para el consumo, pero estos productos no fueron vendidos a tiempo, por lo que realizamos estas ofertas para reducir el desperdicio. Es una oportunidad perfecta para disfrutar de productos excelentes a precios accesibles.</p>
   
  </div>
  <!-- Jumbotron -->
        <h1 style="text-align: center;">Productos disponibles</h1>
            <section>
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://smartcdn.gprod.postmedia.digital/nationalpost/wp-content/uploads/2017/10/gettyimages-95380176.jpg" alt="croissant">
                    </div>
                    <div class="nombreProducto">croissant</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="12">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
            

            
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://th.bing.com/th/id/OIP.rF_gz9_ACYXs2_ceidpzPAHaE8?rs=1&pid=ImgDetMain"
                            alt="queque">
                    </div>
                    <div class="nombreProducto">Queque</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="3">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
           
           
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://th.bing.com/th/id/R.7f71a9e46e1db38fa5381efef593765b?rik=H2IpDB7asgPJdA&riu=http%3a%2f%2f3.bp.blogspot.com%2f-_E-R00MACWo%2fUJbp1MJW9KI%2fAAAAAAAAAKI%2fDaygI6PCchE%2fs1600%2f2012-11-03%2b21.45.35.jpg&ehk=%2fK6xiMp6wbygZYc1rXslWePwPuBKUB5hDskiOzB%2fnSU%3d&risl=&pid=ImgRaw&r=0" alt="empanadas">
                    </div>
                    <div class="nombreProducto">Empanadas</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="12">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
           

            
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://th.bing.com/th/id/OIP.KQtJc3n01eVCkiB418ztUwHaFj?rs=1&pid=ImgDetMain" alt="pizza">
                           
                    </div>
                    <div class="nombreProducto">Pizza peperonni</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="7">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
            

          
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://th.bing.com/th/id/R.da543b53615708bdb381dca042bcfab9?rik=SOJQ9HDP7OKntw&riu=http%3a%2f%2f2.bp.blogspot.com%2f_761SdDH151w%2fTF3JG23_vxI%2fAAAAAAAAAGI%2fhKcN74Eb7P4%2fs1600%2fIMG_8820.JPG&ehk=7udjgs5W2o79uGz2FU1TkLaefb2uiYzh8urCQ6Cm0es%3d&risl=&pid=ImgRaw&r=0" alt="pizza">
                           
                    </div>
                    <div class="nombreProducto">Torta Chilena</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="7">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
            

           
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://th.bing.com/th/id/OIP.T8O1rZI2upALh_4__FBmQAHaFj?rs=1&pid=ImgDetMain" alt="donas">
                    </div>
                    <div class="nombreProducto">Donas</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="4">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
          

        
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://th.bing.com/th/id/OIP.ojdQYSxuQZ8VXWaYy71iVwHaFi?rs=1&pid=ImgDetMain" alt="pizza">

                    </div>
                    <div class="nombreProducto">Pizza hawaina</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="4">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
            

                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://assets.unileversolutions.com/recipes-v2/235143.jpg" alt="sandwich">

                    </div>
                    <div class="nombreProducto">Sandwich de atún</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="2">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
          
                <div class="producto">
                    <div class="imgProducto">
                        <img src="https://2.bp.blogspot.com/--aYkyJKs7Gw/VRcq8TnNx4I/AAAAAAAAN9I/kOUE1imyBJY/s1600/Versatile.jpg" alt="sandwich">

                    </div>
                    <div class="nombreProducto">Ensalada de frutas</div>
                    <div class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" id="cantidad" min="0" max="2">
                    </div>
                    <div>
                        <button class="boton">Agregar al carrito</button>
                    </div>
                </div>
            </section>
    <footer>
        <?php include './footer.php'; ?>
    </footer>
    </body>

</html>