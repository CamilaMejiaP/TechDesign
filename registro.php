
<?php
        if (isset ($_POST['guardar'])){

            //enviar datos

            
            //$id=$_POST['id'];

            $producto=$_POST['producto'];
            $precio=$_POST['precio'];
            $cantidad=$_POST['cantidad'];

            if(!empty($producto) and !empty($precio) and !empty($cantidad)){
                include("conexion.php");
                $conn=Conexion();   
                
                $query= "INSERT INTO productos (producto, precio, cantidad) VALUES('$producto', '$precio', '$cantidad')";
    
                
                $result = mysqli_query($conn, $query) or die ('Error'. mysqli_error($conn));
               
                echo "<div class='row mt-5'><div class='alert alert-danger bg-warning d-flex align-items-center' id='alerta-registro' role='alert'>
                    <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                    <div>
                        Se registro correctamente
                    </div>
                    </div></div>'";
            
                echo "<h1 class='text-white'>HOLA$ $result</h1>";
            }else{
              
                echo "<div class='row mt-5'><div class='alert alert-danger d-flex align-items-center' role='alert'>
                    <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                    <div>
                        Algunos campos estan vacios
                    </div>
                </div></div>'";
            }

           
            
            #echo $producto;

        }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <!--CSS Boostrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--FAVICON-->
    <link rel="icon" href="img/fav.png">
    <!--CSS Propio-->
    <link rel="stylesheet" href="css/estilos2.css">
    <title>Catalogo Todos</title>
</head>
<body class="fondo">
    
    <div class="container-fluid  d-flex">
    <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="d-flex ms-3 justify-content-end" id="titulo3" href="">
                <h3 class="mt-1 me-3">TechDesign</h3>
                <img class="image-responsive" id="imgennav" src="img/logo.png">
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Catalogo
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="index.html">Todo No esta</a></li>
                                <li><a class="dropdown-item" href="Catalogo-desarrolloWeb.html">Desarrollo Web</a></li>
                                <li><a class="dropdown-item" href="Catalogo-diseño.html">Diseño Web</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Contacto.php">Formulario de contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registro.php">Registro de producto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="container" id="" style="border: 0; width: auto; margin: auto auto; margin-top: 5rem;">

            <h1 class="text-white text-center pb-0 mb-0 ">Formulario de contacto</h1>
            <p class="blancoOpaco text-center">Increibles proyectos</p>


            <div class="row" >
          
                <form class="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    
                    <div class="mb-3">
                        <label for="producto" class="form-label blancoOpaco">producto</label>
                        <input class="form-control" id="producto" name="producto"rows="3" ></input>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label blancoOpaco">precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" rows="3" ></input>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label blancoOpaco">cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" rows="3" ></input>
                    </div>
                   
                    <div class="mb-3 d-flex justify-content-center">
                        <input type="submit" name="guardar" value="enviar" class="btn btn-danger">
                    </div>
                </form>

            </div>         

        </section>

        <hr>

    </div>

    <div>
        <!-- Footer -->
        <footer class="page-footer justify-content-center font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-4 mt-md-0 mt-3">

                        <!-- Content -->
                        <h5 class="text-uppercase">Contacto</h5>
                        <p>TechDesign</p>
                        <p>FAX 8557</p>
                        <p>(+57) 32349595588</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col-md-4 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">Quienes somos</h5>

                        <ul class="list-unstyled">
                            <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                            <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                            <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                            <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                           
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase">FAQs</h5>
                        <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                        <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                        <a href="#" class="nav-link px-2 blancoOpaco">Home</a>
                        <a href="#" class="nav-link px-2 blancoOpaco">Home</a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2022 Copyright:
                <a class="text-danger">TechDesign</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!--LLamada a Boostrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     

        <!--LLamada a JavaScript propio-->
        <script type="text/javascript" src="js/js4.js"></script>
</body>

</html>