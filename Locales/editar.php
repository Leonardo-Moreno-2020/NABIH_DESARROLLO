<?php include '../Template/header.php';?>
<?php
if(!isset($_GET['Id'])){
header('Location:locales.php?mensaje=error');
exit();
} 
include_once '../Conexion/conexion.php';
$Id = $_GET['Id'];

$sentencia = $bd->prepare("SELECT * FROM locales WHERE Id = ?;");
$sentencia->execute([$Id]);
$locales = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($locales);
?>
<div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center">Editar datos del local</h3>
                </header>
            </div>
        </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">

<body class="bg-secondary">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card border border-info">
                <div class="card-header text-center fs-4">
                    Editar local:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb3">
                        <label class="form-label">Representante:</label>
                        <input type="text" class="form-control" name="txtRepresentante" required value="<?php echo $locales->Representante?>">
                    </div>
                    <div class="mb3">
                        <label class="form-label">Local:</label>
                        <input type="text" class="form-control" name="txtLocal" required value="<?php echo $locales->Local?>">
                    </div>
                    <div class="mb3">
                        <label class="form-label">Telefono:</label>
                        <input type="text" class="form-control" name="txtTelefono" required value="<?php echo $locales->Telefono?>">
                    </div>
                    <div class="mb3">
                        <label class="form-label">Direccion:</label>
                        <input type="text" class="form-control" name="txtDireccion" required value="<?php echo $locales->Direccion?>">
                    </div>
                    </br>
                    <div class="d-grid">
                        <input type="hidden" name="Id" value="<?php echo $locales->Id?>">
                        <input type="submit" class="bnt btn-primary" value="Hecho">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</br></br></br>
<div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md">
            <footer class="w-100 d-flex align-items justify-content-center flex-wrap">
            <p class="fs-5 px-3 pt-3">Prueba educativa de proyecto Nabih, SENA-An??lisis y desarrollo de sistemas de informaci??n Bogot?? 2022</p>
            <div id="iconos">
            <a href="https://www.facebook.com/leonardo.moreno.779205"><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/winter_soldier2.0/"><i class="bi bi-instagram"></i></a>
        </div>
            </footer> 
        </div>
        </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">