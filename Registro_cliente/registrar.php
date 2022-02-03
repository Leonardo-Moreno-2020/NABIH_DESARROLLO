<?php include '../Template/header.php';?>
<div class="container-fluid bg-info">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center">Registro de usuarios y asistencias</h3>
                </header>
            </div>
        </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">

<?php
print_r($_POST);
if(empty($_POST["oculto"]) || empty($_POST["txtCedula"]) || empty($_POST["txtNombres"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtTelefono"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtProfesion"]) || empty($_POST["txtAsistencia"]) || empty($_POST["txtContacto"])){
header('Location:cliente.php?mensaje=faltan-datos');
exit();
}
include_once '../Conexion/conexion.php';
$cedula = $_POST["txtCedula"];
$nombres = $_POST["txtNombres"];
$direccion = $_POST["txtDireccion"];
$telefono = $_POST["txtTelefono"];
$correo = $_POST["txtCorreo"];
$profesion = $_POST["txtProfesion"];
$asistencia = $_POST["txtAsistencia"];
$contacto = $_POST["txtContacto"];

$sentencia = $bd->prepare("INSERT INTO registro(Cedula,Nombres,Direccion,Telefono,Correo,Profesion,Asistencia,Contacto) VALUES (?,?,?,?,?,?,?);"); 
$resultado = $sentencia->execute([$cedula,$nombres,$direccion,$telefono,$correo,$profesion,$asistencia,$contacto]);

if ($resultado === TRUE) {
    header('Location:cliente.php?mensaje=registrado');
} else {
    header('Location:cliente.php?mensaje=error');
    exit();
}
?>