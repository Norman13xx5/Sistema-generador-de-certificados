SELECT 
td_curso_usuario.id_curso_detalle,
tm_curso.id_curso,
tm_curso.nombre_curso,
tm_curso.descripcion_curso,
tm_curso.fecha_inicio_curso,
tm_curso.fecha_final_curso,
tm_usuario.id_usuario,
tm_usuario.nombre_usuario,
tm_usuario.apellido_paterno,
tm_usuario.apellido_materno,
tm_instructor.id_instrutor,
tm_instructor.instrutor_nombre,
tm_instructor.apellido_paterno AS instructor_apellido_paterno,
tm_instructor.apellido_materno As instructor_apellido_materni,
FROM td_curso_usuario INNER JOIN 
tm_curso ON td_curso_usuario.id_curso = tm_curso.id_curso INNER JOIN
tm_usuario ON td_curso_usuario.id_usuario = tm_usuario.id_usuario INNER JOIN
tm_instructor ON tm_curso.id_instrutor =tm_instructor.id_instrutor
WHERE td_curso_usuario.id_usuario = 1