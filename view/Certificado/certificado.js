const myCanvas = document.getElementById('myCanvas');
const ctx = myCanvas.getContext('2d');

/* Inicializamos la imagen */
const image = new Image();
/* Ruta de la imgane */
image.src = '../../public/img/certificado.png';

$(document).ready(function () {
    var id_curso_detalle = getUrlParameter('id_curso_detalle');
    $.post("../../controller/usuario.php?op=mostrar_curso_datalle", { id_curso_detalle: id_curso_detalle }, function (data) {
        data = JSON.parse(data);
        /*  console.log(data); */
        $('#descripcion_curso').html(data.descripcion_curso);

        /* Dimensionamos y seleccionamos imagen */
        ctx.drawImage(image, 0, 0, myCanvas.width, myCanvas.height);
        /* Tamaño de fuente */
        ctx.font = '40px Sanchez';
        ctx.font = 'N';
        ctx.textAling = 'center';
        ctx.textBaseline = 'middle';
        /* Moverli verticalmente de izquierda a derecha */
        var x = myCanvas.width / 2.93;
        /* Nombre de alumno */
        ctx.fillText(data.nombre_usuario + ' ' + data.apellido_paterno + ' ' + data.apellido_materno, x, 333)

        /* Nombre del certificado */
        ctx.font = '17px Sanchez';
        ctx.fillText("Por su rendimiento ejemplar en el curso de" + ' ' + data.nombre_curso, x, 390)

        /* Fecha de inicio y fecha fin */
        var x = myCanvas.width / 2;
        ctx.font = '17px Sanchez';
        ctx.fillText(data.fecha_inicio_curso + ' - ' + data.fecha_final_curso, x, 455)


        /* Nombre del instructor */
        var x = myCanvas.width / 15;
        ctx.font = '17px League Sparta  ';
        ctx.fillText(data.instrutor_nombre + ' ' + data.apellido_paterno + ' ' + data.apellido_materno, x, 480)

    });


});

/* Este es el metodo para descargar el certificado en PNG */
$(document).on("click", "#btncertificadopng", function(){
    let lblpng = document.createElement('a');
    /* El nombre que tendrá la descarga */
    lblpng.download = "Certificado.png"
    /* Aqui colocamos la ruta de lo que descargará */
    lblpng.href = myCanvas.toDataURL();
    lblpng.click();
});

/* Esto es para poder descargarlo en pdf, requiere de una librería que está en el index que se encuentra
    en la carpeta Certificado al final del codigo como un script */
$(document).on("click", "#btncertificadopdf", function(){
    var imgData = myCanvas.toDataURL('image/png');
    var doc = new jsPDF ('l','mm');
    doc.addImage(imgData, 'PNG', 30, 15);
    doc.save('Certificado.pdf')
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};