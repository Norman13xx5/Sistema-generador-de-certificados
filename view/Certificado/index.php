<!DOCTYPE html>
<html lang="es" class="pos-relative">

<head>
    <?php require_once("../html/MainHead.php") ?>

    <title>Certificado</title>
</head>

<body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
        <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
            <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0"><img src="../../public/img/certificado.png" class="img-fluid" alt="Responsive Image"></h1>
            <br></br>
            <p class="tx-16 mg-b-30">The page you are looking for might have been removed, had its name changed,
                or unavailable. Maybe you could try a search:
            </p>
            <div class="form-layout-footer">
                <button class="btn btn-info"><i class="fa fa-download mg-r-10"></i>Descargar PNG</button>
                <button class="btn btn-danger"><i class="fa fa-download mg-r-10"></i>Descargar PDF</button>
            </div>
        </div>
    </div><!-- ht-100v -->

    <?php include_once("../html/MianJS.php") ?>
    <script type="text/javascript" src="certificado.js"></script>
</body>

</html>