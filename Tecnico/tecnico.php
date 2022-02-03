<?php include '../Template/header.php';?>
<?php
    include_once '../Conexion/conexion.php';
    $sentencia = $bd -> query("SELECT * FROM tecnico");
    $tecnico = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($tecnico);
?>
<div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                <img src="../Imagenes/Logo final.png" alt="90" width="150">
                    <h3 class="text-center text-light">Técnicos registro y seguimiento</h3>
                </header>
            </div>
        </div>
    </div>

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-12">

<!--INICIO DE ALERTAS-->
<?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
                ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>Debes diligenciar la totalidad de los campos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
            }
    ?>   
    <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
                ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registrado !</strong> Se agrego un tecnico.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
            }
    ?>
         <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
                ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Vuelve a intentarlo.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
            }
    ?>
           <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
                ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Cambio generado !</strong> Datos actualizados correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
            }
    ?>
       <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
                ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Tecnico-eliminado !</strong> Los registros fueron eliminados.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
            }
    ?>

<!--FIN DE ALERTAS-->

<div class="container"> 
    <div class="row">
        <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header text-center fs-4">
                Lista de Técnicos
            </div>
            <div class="p-4">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Profesion</th>
                            <th scope="col">Local</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($tecnico as $info){
                                ?>
                        <tr>
                            <td scope="row"><?php echo $info->Id;?></td>
                            <td><?php echo $info->Cedula;?></td>
                            <td><?php echo $info->Nombres;?></td>
                            <td><?php echo $info->Telefono;?></td>
                            <td><?php echo $info->Correo;?></td>
                            <td><?php echo $info->Profesion;?></td> 
                            <td><?php echo $info->Local;?></td>
                            <td><a class="text-success" href="editar.php?Id=<?php echo $info->Id;?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?Id=<?php echo $info->Id;?>"><i class="bi bi-trash-fill"></i></a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        </div>
        <div class="col-md-0">
        <div class="card border border-primary">
            <div class="card-header text-center fs-4">
                Registro de datos Técnico:
            </div>
            <form class="p-4" method="POST" action="registrar.php">
                <div class="mb-3">
                    <label class="form-label">Cedula:</label>
                    <input type="text" class="form-control" name="txtCedula" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombres:</label>
                    <input type="text" class="form-control" name="txtNombres" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefono:</label>
                    <input type="text" class="form-control" name="txtTelefono" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input type="text" class="form-control" name="txtCorreo" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profesion:</label>
                    <input type="text" class="form-control" name="txtProfesion" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Local:</label>
                    <input type="text" class="form-control" name="txtLocal" autofocus>
                </div>
                <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                    <input type="submit" class="btn btn-primary" value="Registrar">
                </div>
            </form>
        </div>
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