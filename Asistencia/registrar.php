<?php include '../Template/header.php';?>
<div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center">Asistencias y programación de agenda</h3>
                </header>
            </div>
        </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">

<?php
print_r($_POST);
if(empty($_POST["oculto"]) || empty($_POST["txtDescripcion"]) || empty($_POST["txtNombre_usuario"]) || empty($_POST["txtCalificacion"]) || empty($_POST["txtVisita"])){
header('Location: asistencia.php?mensaje=faltan-datos');
exit();
}
include_once '../Conexion/conexion.php';
$descripcion = $_POST["txtDescripcion"];
$nombre_usuario = $_POST["txtNombre_usuario"];
$calificacion = $_POST["txtCalificacion"];
$visita = $_POST["txtVisita"];

$sentencia = $bd->prepare("INSERT INTO asistencia(Descripcion,Nombre_usuario,Calificacion,Visita) VALUES (?,?,?,?);"); 
$resultado = $sentencia->execute([$descripcion,$nombre_usuario,$calificacion,$visita]);

if ($resultado === TRUE) {
    header('Location:asistencia.php?mensaje=registrado');
} else {
    header('Location:asistencia.php?mensaje=error');
    exit();
}
?>