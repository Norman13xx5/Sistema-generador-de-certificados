<?php
/* Llamamos la conexión */
include_once("../../config/conexion.php");
if (isset($_SESSION["id_usuario"])) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once("../html/MainHead.php") ?>

        <title>Empresa::Mnt Cursos</title>
    </head>

    <body>

        <?php include_once("../html/MainMenu.php"); ?>
        <?php include_once("../html/MainHeader.php"); ?>

        <div class="br-mainpanel">
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                    <a class="breadcrumb-item" href="#">Cursos</a>
                </nav>
            </div><!-- br-pageheader -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5">Cursos</h4>
                <p class="mg-b-0">Mantenimiento</p>
            </div>

            <div class="br-pagebody">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Cursos</h6>
                    <p class="mg-b-30 tx-gray-600">Listado de Cursos</p>

                    <button class="btn btn-outline-primary" id="add_button" onclick="newregistro()"><i class="fa fa-plus-square mg-r-10"></i>Agregar Registro</button>
                    <p></p>
                    <!-- Tabla -->
                        <!-- Datatable -->
                        <div class="table-wrapper">
                            <table id="mnt_cursos" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">Categoría</th>
                                        <th class="wd-15p">Nombre</th>
                                        <th class="wd-15p">Fecha Inicio</th>
                                        <th class="wd-15p">Fecha Fin</th>
                                        <th class="wd-15p">Instructor</th>
                                        <th class="wd-10p"></th>
                                        <th class="wd-10p"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Fin Tabla -->
                </div>
            </div>
        </div>

        <?php require_once("../html/MianJS.php") ?>
        <script type="text/javascript" src="adminmntcurso.js"></script>

    </body>

    </html>
<?php
    /* Si no ha iniciado sesión, lo redirigirá a la ventana principal */
} else {
    header("Location:" . Conectar::ruta() . "view/404/index.php");
}
?>