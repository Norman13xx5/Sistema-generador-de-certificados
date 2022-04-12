const myCanvas = document.getElementById('myCanvas');
const ctx = myCanvas.getContext('2d');

/* Inicializamos la imagen */
const image = new Image();
/* Ruta de la imgane */
image.src = '../../public/img/certificado.png';
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
ctx.fillText("BRAYAN DIAZ MARTINEZ", x, 333)

/* Nombre del certificado */
ctx.font = '17px Sanchez';
ctx.fillText("Por su rendimiento ejemplar en el curso de programación php.", x, 390)


/* Nombre del instructor */
var x = myCanvas.width / 20;
ctx.font = '17px League Sparta  ';
ctx.fillText("BRAYAN DIAZ MARTINEZ.", x, 480)


$(document).ready(function () {
    var id_curso_detalle = getUrlParameter('id_curso_detalle');
    $.post("../../controller/usuario.php?op=mostrar_curso_datellate", { id_curso_detalle: id_curso_detalle }, function (data) {
        data = JSON.parse(data);
        /*  console.log(data); */
        $('#descripcion_curso').html(data.descripcion_curso);
    });


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