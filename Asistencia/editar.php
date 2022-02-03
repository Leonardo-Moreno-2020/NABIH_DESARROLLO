<?php include '../Template/header.php';?>
<?php
if(!isset($_GET['Id'])){
header('Location:asistencia.php?mensaje=error');
exit();
} 
include_once '../Conexion/conexion.php';
$Id = $_GET['Id'];

$sentencia = $bd->prepare("SELECT * FROM asistencia WHERE Id = ?;");
$sentencia->execute([$Id]);
$asistencia = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($asistencia);
?>
<div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center">Editar datos de asistencia y fecha de agenda.</h3>
                </header>
            </div>
        </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card border border-dark">
                <div class="card-header text-center fs-4">
                    Editar asistencia y fecha de visita:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb3">
                        <label class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" name="txtDescripcion" required value="<?php echo $asistencia->Descripcion?>">
                    </div>
                    <div class="mb3">
                        <label class="form-label">Nombre de cliente:</label>
                        <input type="text" class="form-control" name="txtNombre_usuario" required value="<?php echo $asistencia->Nombre_usuario?>">
                    </div>
                    <div class="mb3">
                        <label class="form-label">Calificacion:</label>
                        <input type="text" class="form-control" name="txtCalificacion" required value="<?php echo $asistencia->Calificacion?>">
                    </div>
                    <div class="mb3">
                        <label class="form-label">Visita:</label>
                        <input type="date" class="form-control" name="txtVisita" required value="<?php echo $asistencia->Visita?>">
                    </div>
                    </br>
                    <div class="d-grid">
                        <input type="hidden" name="Id" value="<?php echo $asistencia->Id?>">
                        <input type="submit" class="bnt btn-primary" value="Hecho">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</br></br></br>
<div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md">
            <footer class="w-100 d-flex align-items justify-content-center flex-wrap">
            <p class="fs-5 px-3 pt-3">Prueba educativa de proyecto Nabih, SENA-Análisis y desarrollo de sistemas de información Bogotá 2022</p>
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