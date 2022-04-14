<?php
class Curso extends Conectar
{

    public function insertar_curso($id_categoria, $nombre_curso, $descripcion_curso, $fecha_inicio_curso, $fecha_final_curso, $id_instrutor)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "INSERT INTO tm_curso (id_curso, id_categoria, nombre_curso, descripcion_curso, fecha_inicio_curso, fecha_final_curso, id_instrutor, fecha_creacion, estado) 
                VALUES (NULL, ?, ?, ?, ?, ?, ?, now(), '1')";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        $sql->bindValue(1, $id_categoria);
        $sql->bindValue(2, $nombre_curso);
        $sql->bindValue(3, $descripcion_curso);
        $sql->bindValue(4, $fecha_inicio_curso);
        $sql->bindValue(5, $fecha_final_curso);
        $sql->bindValue(6, $id_instrutor);
        return $resultado = $sql->fetchAll();
    }

    public function update_curso($id_curso, $id_categoria, $nombre_curso, $descripcion_curso, $fecha_inicio_curso, $fecha_final_curso, $id_instrutor)
    {
        parent::set_name();
        $sql = "UPDATE tm_curso
                SET 
                       id_categoria = ?,
                       nombre_curso = ?,
                       descripcion_curso = ?,
                       fecha_inicio_curso = ?,
                       fecha_final_curso = ?,
                       id_instrutor = ?
                WHERE
                        id_curso = ?";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        $sql->bindValue(1, $id_categoria);
        $sql->bindValue(2, $nombre_curso);
        $sql->bindValue(3, $descripcion_curso);
        $sql->bindValue(4, $fecha_inicio_curso);
        $sql->bindValue(5, $fecha_final_curso);
        $sql->bindValue(6, $id_instrutor);
        $sql->bindValue(7, $id_curso);
        return $resultado = $sql->fetchAll();
    }
    /* Eliminar un registro */
    public function delete_curso($id_curso)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "UPDATE tm_curso
                SET
                    estado=0
                WHERE   
                    id_curso = ?";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        $sql->bindValue(1, $id_curso);
        return $resultado = $sql->fetchAll();
    }
    /* Este es para mostrar los cursos */
    public function get_curso()
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT * FROM tm_curso WHERE estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    /* Este es para mostar los cursos por id */
    public function get_curso_x_id($id_curso)
    {
        $conectar = parent::conexion();
        parent::set_name();
        $sql = "SELECT * FROM tm_curso WHERE estado = 1 AND id_curso = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_curso);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
