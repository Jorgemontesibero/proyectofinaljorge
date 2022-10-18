<?php
include('../config/config.php');
include('patient.php');
$p = new Patient();
$data = mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($data->Fechadeentrega);

if (isset($_POST) && !empty($_POST)){
 
    $update = $p->update($_POST);
    if ($update){
        $error = '<div class="alert alert-success" role="alert">Paciente modificado correctamente</div>';
    }else{
        $error = '<div class="alert alert-danger" role="alert" > Error al modificar un paciente </div>';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Modificar paciente </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php include('../menu.php') ?>
    <div class="container">
        <?php
        if (isset($error)){
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5"> Modificar paciente </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="firstName" id="firstName" placeholder="Nombre paciente" require class="form-control" value="<?= $data->firstName ?>" />
                    <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
                 </div>
                 <div class="col">
                    <input type="text" name="lastName" id="lastName" placeholder="Apellido paciente" require class="form-control" value="<?= $data->lastName ?>" />
                 </div>
            </div>
        
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email paciente" require class="form-control" value="<?= $data->email ?>" />
                </div>
                <div class="col">
                    <input type="number" name="Telefono" id="Telefono" placeholder="numero telefonico" require class="form-control" value="<?= $data->Telefono ?>" />
                 </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <textarea name="Tipodepedido" id="Tipodepedido" placeholder="tipo de pedido" require class="form-control"><?= $data->Tipodepedido ?></textarea>
                    <b> Tipo de pedido </b>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="date" name="Fechadeentrega" id="Fechadeentrega" require class="form-control" value="<?= $date->format('Y-m-d') ?>" />
                </div>
                <div class="col">
                    <input type="text" name="Observaciones" id="Observaciones" placeholder="Observaciones" require class="form-control" value="<?= $data->Observaciones ?>" />
                 </div>    
            </div>

        <button class="btn btn-success"> Modificar </button>
    </form>
</body>


</html>




















