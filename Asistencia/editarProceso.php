<?php
print_r($_POST);
if(!isset($_POST['Id'])){
    header('Location:asistencia.php?mensaje=error');
}
include '../Conexion/conexion.php';
$id = $_POST['Id'];
$descripcion = $_POST['txtDescripcion'];
$nombre_usuario= $_POST['txtNombre_usuario'];
$calificacion= $_POST['txtCalificacion'];
$visita= $_POST['txtVisita'];

$sentencia = $bd->prepare("UPDATE asistencia SET Descripcion=?, Nombre_usuario=?, Calificacion=?, Visita=? WHERE Id=?;");
$resultado = $sentencia->execute([ $descripcion, $nombre_usuario, $calificacion,$visita,$id]);
if ($resultado === TRUE) {
    header('Location:asistencia.php?mensaje=editado');      
} else {
    header('Location:asistencia.php?mensaje=error');
} 
?>