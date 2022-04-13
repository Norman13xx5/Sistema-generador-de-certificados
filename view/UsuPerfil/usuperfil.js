var id_usuario = $('#id_usuario').val();

$(document).ready(function () {

    $.post("../../controller/usuario.php?op=mostrar_informacion_usuario", { id_usuario: id_usuario }, function (data) {
        data = JSON.parse(data);
        $('#nombre_usuario').val(data.nombre_usuario);
        $('#apellido_paterno').val(data.apellido_paterno);
        $('#apellido_materno').val(data.apellido_materno);
        $('#correo_usuario').val(data.correo_usuario);
        $('#pass_usuario').val(data.pass_usuario);
        $('#sexo_usuario').val(data.sexo_usuario).trigger("change");
        $('#telefono_usuario').val(data.telefono_usuario);
    });
});