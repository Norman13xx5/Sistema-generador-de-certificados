<?php
require_once("config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Empresa de Jal</title>

    <!-- vendor css -->
    <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="public/css/bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <form action="" method="POST">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
                <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Empresa de Jal <span class="tx-normal">]</span></div>
                <div class="tx-center mg-b-30">The Admin Template For Perfectionist</div>

                <div class="form-group">
                    <input type="text" id="corre_usuario" name="corre_usuario" class="form-control" placeholder="Ingrese correo electronico">
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" id="contraseña_usuario" name="contraseña_usuario" class="form-control" placeholder="Ingrese contraseña">
                </div><!-- form-group -->
                <input type="hidden" name="enviar" class="form-control" value="si">
                <button type="submit" class="btn btn-info btn-block">Aceder</button>

                <div class="mg-t-30 tx-center"></div>
            </div><!-- login-wrapper -->
        </form>
    </div><!-- d-flex -->

    <script src="public/lib/jquery/jquery.js"></script>
    <script src="public/lib/popper.js/popper.js"></script>
    <script src="public/lib/bootstrap/bootstrap.js"></script>

</body>

</html>