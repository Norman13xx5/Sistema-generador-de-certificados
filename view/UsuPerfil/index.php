<?php
/* Llamamos la conexión */
include_once("../../config/conexion.php");
if (isset($_SESSION["id_usuario"])) {
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
                <p class="mg-b-0">Pantalla Perfil </p>
            </div>

            <div class="br-pagebody">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Perfil</h6>
                    <p class="mg-b-30 tx-gray-600">Actualice sus datos</p>

                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre" require>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Apellido Paterno: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno" require>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Apellido Materno: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno" require>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Correo Electrónico: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="correo_usuario" id="correo_usuario">
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Contraseña: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="password" name="pass_usuario" id="pass_usuario" placeholder="Contraseña" require>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="sexo_usuario" id="sexo_usuario" data-placeholder="Seleccione" require>
                                        <option label="Seleccione"></option>
                                        <option value="F">Femenino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Teléfono: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="telefono_usuario" id="telefono_usuario" placeholder="Teléfono" require>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info">Actualizar</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->

                </div>
            </div>
            <?php include_once("../html/MianJS.php") ?>
        </div>

    </body>

    </html>
<?php
    /* Si no ha iniciado sesión, lo redirigirá a la ventana principal */
} else {
    header("Location:" . Conectar::ruta() . "view/404/index.php");
}
?>