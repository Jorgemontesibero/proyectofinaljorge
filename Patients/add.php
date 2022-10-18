
<?php
include('../config/config.php');
include('Patient.php');

if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $data= new Patient(); /* LLAMO A MI LIBRO DE RECETAS */
  
  
    $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }
  ?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Dejanos tus datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COMESTIBLES KAJAN</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">


</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #bee4ff;">
        <div class="container-fluid">
            <img src="../imagenes/logo_pequeno.jpg" alt="" width="70px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/Galeria.html">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Patients/add.php">Contactenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
            if (isset($mensaje)){
                echo $mensaje;
            }
        ?>
        <h2 class="text-center mb-5" > Dejanos tus datos </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="name" name="firstName" id="firstName" placeholder="Nombre (s)" require class="form-control" />
                </div>
                <div class="col">
                    <input type="text" name="lastName" id="lastName" placeholder="Apellido (s)" require class="form-control" />
                </div>
             </div>

             <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email" require class="form-control" />
                </div>
                <div class="col">
                    <input type="number" name="Telefono" id="Telefono" placeholder="Numero celular" require class="form-control" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <textarea name="Tipodepedido" id="Tipodepedido" placeholder="Torta, cupcake, galletas, etc.." require class="form-control"></textarea>
                    <b> Debes separar los pedidos con una coma </b>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="date" name="Fechadeentrega" id="Fecha de tu pedido" require class="form-control" />
                </div>
                <div class="col">
                    <input type="text" name="Observaciones" id="Observaciones" placeholder="Detalles adicionales a tu pedido" require class="form-control" />
                </div>
            </div>

           
            
            <button class="btn btn-success"> Registrar </button>
        </form>
    </div>
    <br>
    <br>
    <br>
    <footer class="footer mt-auto py-3 bg-light pt-3">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h5>Siguenos en nuestras redes sociales!</h5>
                </div>
            </div>
            <div class="row text-center d-flex justify-content-center">
                <div class="col">
                    <a href="#">
                        Facebook
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        Instagram
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        Twitter
                    </a>
                </div>
            </div>

        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>