<?php
//print_r($_POST);
    $Contraseña=$_POST['Contraseña'];
    $Correo=$_POST['Correo'];
    $conexion=mysqli_connect("localhost", "root", "", "data");
    $consulta="SELECT*FROM administrador WHERE Correo='$Correo' AND Contraseña='$Contraseña'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:../Inicio/Inicio.php");
}
else{
    header("location:index.php");
    echo'error en la autenticacion';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>