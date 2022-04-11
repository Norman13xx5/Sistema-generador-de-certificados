const myCanvas = document.getElementById('myCanvas');
const ctx = myCanvas.getContext('2d');

const image = new Image();
image.src = '../../public/img/certificado.png';
ctx.drawImage(image, 0, 0, myCanvas.width, myCanvas.height);

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