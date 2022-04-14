<?php
class Usuario extends Conectar
{
    /* Funcion para login de acceso de usuario */
    public function login()
    {
        $conectar = parent::conexion();
        parent::set_name();
        if (isset($_POST["enviar"])) {
            $correo = $_POST["corre_usuario"];
            $password = $_POST["contraseña_usuario"];
            if (empty($correo) and empty($password)) {
                /* Una validacion si en caso de que este vacio el campo usuario y contraseña, lo devolverá al index con mensaje = 2 */
                header("Location:" . conectar::ruta() . "index.php?m=2");
                exit();
            } else {
                $sql = "SELECT * FROM tm_usuario WHERE correo_usuario=? AND pass_usuario=? AND estado=1";
                $smt = $conectar->prepare($sql);
                $smt->bindValue(1, $correo);
                $smt->bindValue(2, $password);
                $smt->execute();
                $resultado = $smt->fetch();
                /* Aqui valida si la respuesta de la consulta es un array, si es mayor que 0, y coinciden el usuario y contraseña iniciará la sesióm */
                if (is_array($resultado) and count($resultado) > 0) {
                    $_SESSION["id_usuario"] = $resultado["id_usuario"];
                    $_SESSION["nombre_usuario"] = $resultado["nombre_usuario"];
                    $_SESSION["apellido_paterno"] = $resultado["apellido_paterno"];
                    $_SESSION["correo_usuario"] = $resultado["correo_usuario"];
                    $_SESSION["id_rol"] = $resultado["id_rol"];
                    /* Si todo está correcto lo mandará al Home */
                    header("Location:" . Conectar::ruta() . "view/UsuHome/");
                    exit();
                } else {
                    /* en caso de que no sea un array, no sea mayor que 0, no conicidan el usuario o la contraseña lo devolverá al index con mensaje = 1  */
                    header("Location:" . Conectar::ruta() . "index.php?m=1");
                    exit();
                }
            }
        }
    }
    /* Mostrar todos los cursos en los cuales está inscrito un usuario */
    public function get_cursos_x_usuario($id_usuario)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT 
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
        tm_instructor.instructor_apellido_paterno,
        tm_instructor.instructor_apellido_materno
        FROM td_curso_usuario INNER JOIN 
        tm_curso ON td_curso_usuario.id_curso = tm_curso.id_curso INNER JOIN
        tm_usuario ON td_curso_usuario.id_usuario = tm_usuario.id_usuario INNER JOIN
        tm_instructor ON tm_curso.id_instrutor =tm_instructor.id_instrutor
        WHERE td_curso_usuario.id_usuario = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_usuario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    /* Mostrar todos los cursos en los cuales está inscrito un usuario */
    public function get_cursos_x_usuario_top10($id_usuario)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT 
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
           tm_instructor.instructor_apellido_paterno,
           tm_instructor.instructor_apellido_materno
           FROM td_curso_usuario INNER JOIN 
           tm_curso ON td_curso_usuario.id_curso = tm_curso.id_curso INNER JOIN
           tm_usuario ON td_curso_usuario.id_usuario = tm_usuario.id_usuario INNER JOIN
           tm_instructor ON tm_curso.id_instrutor =tm_instructor.id_instrutor
           WHERE td_curso_usuario.id_usuario = ?
           LIMIT 10";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_usuario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    /* Mostrar todos los datos de un curso por su id de detalle */
    public function get_curso_x_id_detalle($id_curso_detalle)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT 
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
            tm_instructor.instructor_apellido_paterno,
            tm_instructor.instructor_apellido_materno
            FROM td_curso_usuario INNER JOIN 
            tm_curso ON td_curso_usuario.id_curso = tm_curso.id_curso INNER JOIN
            tm_usuario ON td_curso_usuario.id_usuario = tm_usuario.id_usuario INNER JOIN
            tm_instructor ON tm_curso.id_instrutor =tm_instructor.id_instrutor
            WHERE td_curso_usuario.id_curso_detalle = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_curso_detalle);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    /* Cantidad de Cursos por Usuario */
    public function get_total_cursos_x_usuario($id_usuario)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT COUNT(*) AS total FROM td_curso_usuario WHERE id_usuario=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_usuario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    /* Monstrar los datos del usuario en el index de perfil */
    public function get_usuario_x_id($id_usuario)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT * FROM tm_usuario WHERE estado=1 AND id_usuario=?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_usuario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    /* Actualizar perfil del usuario */
    public function update_usuario_perfil($id_usuario, $nombre_usuario, $apellido_paterno, $apellido_materno, $pass_usuario, $sexo_usuario, $telefono_usuario)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "UPDATE tm_usuario
                SET
                    nombre_usuario = ?,
                    apellido_paterno = ?,
                    apellido_materno = ?,
                    pass_usuario = ?,
                    sexo_usuario = ?,
                    telefono_usuario = ?
                WHERE 
                    id_usuario = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $nombre_usuario);
        $sql->bindValue(2, $apellido_paterno);
        $sql->bindValue(3, $apellido_materno);
        $sql->bindValue(4, $pass_usuario);
        $sql->bindValue(5, $sexo_usuario);
        $sql->bindValue(6, $telefono_usuario);
        $sql->bindValue(7, $id_usuario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
