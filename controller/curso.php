<?php
/* Llamando cadena de conexion */
require_once("../config/conexion.php");
/* Llamando a la clase */
require_once("../models/Curso.php");
/* Inicializando Clase */
$curso = new Curso();
/* Opcion de solicitud de controller */
switch ($_GET["op"]) {
    /* Guardar y editar cuanto se tenga el id */
    case "guardar_y_editar":
        /* Validación si está vacio el id_curso */
        if(empty($_POST["id_curso"])){
            $curso->insertar_curso($_POST["id_categoria"],
                                    $_POST["nombre_curso"], 
                                    $_POST["descripcion_curso"], 
                                    $_POST["fecha_inicio_curso"], 
                                    $_POST["fecha_final_curso"], 
                                    $_POST["id_instrutor"]);
        /* En caso que no esté vacio el id_curso */
        }else{
            $curso->update_curso($_POST["id_curso"], 
                                    $_POST["id_categoria"], 
                                    $_POST["nombre_curso"], 
                                    $_POST["descripcion_curso"], 
                                    $_POST["fecha_inicio_curso"], 
                                    $_POST["fecha_final_curso"], 
                                    $_POST["id_instrutor"]);
        }
        break;

    /* Creando Json segun el id */
    case "mostrar_x_id":
        $datos = $curso->get_curso_x_id($_POST["id_curso"]);
        /* Aquí validad si es un array si es igual a true y si es diferente a 0 */
        if (is_array($datos) == true and count($datos) <> 0) {
            foreach ($datos as $row) {
                $output["id_curso"] = $row["id_curso"];
                $output["id_categoria"] = $row["id_categoria"];
                $output["nombre_curso"] = $row["nombre_curso"];
                $output["descripcion_curso"] = $row["descripcion_curso"];
                $output["fecha_inicio_curso"] = $row["fecha_inicio_curso"];
                $output["fecha_final_curso"] = $row["fecha_final_curso"];
                $output["id_instrutor"] = $row["id_instrutor"];
            }
            echo json_encode($output);
        }
        break;

    /* Eliminar segun id */
    case "eliminar":
        $curso->delete_curso($_POST["id_curso"]);
        
        break;
    /* Listar toda la información segun el formato de datatable */
    case "listar":
        $datos = $curso->get_curso());
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["id_categoria"];
            $sub_array[] = $row["nombre_curso"];
            $sub_array[] = $row["descripcion_curso"];
            $sub_array[] = $row["fecha_inicio_curso"];
            $sub_array[] = $row["fecha_final_curso"];
            $sub_array[] = $row["id_instrutor"];
            $sub_array[] = '<button type="button" onClick="Editar(' . $row["id_curso"] . ');" id="' . $row["id_curso"] . '" class="btn btn-outline-warning btn-ico"><div><i class="fa fa-graduation-cap"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="Eliminar(' . $row["id_curso"] . ');" id="' . $row["id_curso"] . '" class="btn btn-outline-danger btn-ico"><div><i class="fa fa-graduation-cap"></i></div></button>';
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);

        break;
}