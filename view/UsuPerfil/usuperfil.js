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

$(document).on("click", "#btn_actualizar_perfil_usuario", function () {
    $.post("../../controller/usuario.php?op=actualizar_perfil_usuario", {
        id_usuario: id_usuario,
        nombre_usuario: $('#nombre_usuario').val(),
        apellido_paterno: $('#apellido_paterno').val(),
        apellido_materno: $('#apellido_materno').val(),
        pass_usuario: $('#pass_usuario').val(),
        sexo_usuario: $('#sexo_usuario').val(),
        telefono_usuario: $('#telefono_usuario').val()
    }, function (data) {
    });
    Swal.fire({
        title: 'Correcto!',
        text: 'Se Actualizó Correctamente',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
});