<?php
/* Llamamos la conexión */
include_once("../../config/conexion.php");
if (isset($_SESSION["id_usuario"])) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once("../html/MainHead.php") ?>

        <title>Empresa::Home</title>
    </head>

    <body>
        <?php include_once("../html/MainMenu.php"); ?>
        <?php include_once("../html/MainHeader.php"); ?>

        <div class="br-mainpanel">
            <div class="br-pageheader pd-y-15 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-12">
                    <a class="breadcrumb-item" href="#">Home</a>
                </nav>
            </div><!-- br-pageheader -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                <h4 class="tx-gray-800 mg-b-5">Home</h4>
                <p class="mg-b-0">Pantalla Home</p>
            </div>
            <!-- Contenido del proyecto -->
            <div class="br-pagebody mg-t-5 pd-x-30">
                <div class="row row-sm">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-teal rounded overflow-hidden">
                            <div class="pd-25 d-flex align-items-center">
                                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                                    <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                        <div class="bg-danger rounded overflow-hidden">
                            <div class="pd-25 d-flex align-items-center">
                                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                                    <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="bg-primary rounded overflow-hidden">
                            <div class="pd-25 d-flex align-items-center">
                                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                                    <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                        <div class="bg-br-primary rounded overflow-hidden">
                            <div class="pd-25 d-flex align-items-center">
                                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                                <div class="mg-l-20">
                                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                                    <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                </div><!-- row -->
            </div><!-- br-pagebody -->
        </div>
        <?php include_once("../html/MianJS.php") ?>
    </body>

    </html>
<?php
    /* Si no ha iniciado sesión, lo redirigirá a la ventana principal */
} else {
    header("Location:" . Conectar::ruta() . "view/404/index.php");
}
?>