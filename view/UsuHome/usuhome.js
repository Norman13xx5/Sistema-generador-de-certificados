var id_usuario = $('#id_usuario').val();

$(document).ready(function () {

    $.post("../../controller/usuario.php?op=total", { id_usuario: id_usuario }, function (data) {
        data = JSON.parse(data);
        $('#total_cursos').html(data.total);
    });
});