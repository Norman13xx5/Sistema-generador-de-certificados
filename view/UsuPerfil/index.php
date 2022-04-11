<?php
/* Llamamos la conexión */
include_once("../../config/conexion.php");
if(isset($_SESSION["id_usuario"])){
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("../html/MainHead.php") ?>

    <title>Empresa::Perfil</title>
</head>

<body>

    <?php include_once("../html/MainMenu.php"); ?>
    <?php include_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Perfil</a>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Perfil</h4>
            <p class="mg-b-0">Pantalla Perfil   </p>
        </div>

        <div class="br-pagebody">

            <!-- start you own content here -->

        </div><!-- br-pagebody -->

    </div>


    <?php include_once("../html/MianJS.php") ?>
</body>

</html>
<?php
/* Si no ha iniciado sesión, lo redirigirá a la ventana principal */
}else{
    header("Location:".Conectar::ruta()."view/404/index.php");
}
?>