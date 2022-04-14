<?php
/* Llamamos la conexión */
include_once("../../config/conexion.php");
if (isset($_SESSION["id_usuario"])) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once("../html/MainHead.php") ?>

        <title>Empresa::Curso</title>
    </head>

    <body>

        <?php include_once("../html/MainMenu.php"); ?>
        <?php include_once("../html/MainHeader.php"); ?>

        <div class="br-mainpanel">
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                    <a class="breadcrumb-item" href="#">Mis Curso</a>
                </nav>
            </div><!-- br-pageheader -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5">Mis Cursos</h4>
                <p class="mg-b-0">Listado de Cursos</p>
            </div>

            <div class="br-pagebody">
                <!-- Contenido de la pagina -->
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Listado de mis cursos</h6>
                    <p class="mg-b-25 mg-lg-b-50">Desde aquí podrá buscar sus cursos por certificados.</p>
                    <!-- Datatable -->
                    <div class="table-wrapper">
                        <table id="datatale_cursos" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Curso</th>
                                    <th class="wd-15p">Fecha inicio</th>
                                    <th class="wd-20p">Fecha fin</th>
                                    <th class="wd-15p">Instructor</th>
                                    <th class="wd-10p"></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- Fin datatable -->
                </div>
            </div><!-- br-pagebody -->

        </div>


        <?php require_once("../html/MianJS.php") ?>
        <script type="text/javascript" src="usucurso.js"></script>
    </body>

    </html>
<?php
    /* Si no ha iniciado sesión, lo redirigirá a la ventana principal */
} else {
    header("Location:" . Conectar::ruta() . "view/404/index.php");
}
?>