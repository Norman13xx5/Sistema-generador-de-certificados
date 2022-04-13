<?php
/* Llamando cadena de conexion */
require_once("../config/conexion.php");
/* Llamando a la clase */
require_once("../models/Usuario.php");
/* Inicializando Clase */
$usuario = new Usuario();
/* Opcion de solicitud de controller */
switch ($_GET["op"]) {
        /* MicroServicio para poder mostrar el listaod de cursos de usuario con certificado */
    case "listar_cursos":
        $datos = $usuario->get_cursos_x_usuario($_POST["id_usuario"]);
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["nombre_curso"];
            $sub_array[] = $row["fecha_inicio_curso"];
            $sub_array[] = $row["fecha_final_curso"];
            $sub_array[] = $row["instrutor_nombre"] . " " . $row["apellido_paterno"];
            $sub_array[] = '<button type="button" onClick="certificado(' . $row["id_curso_detalle"] . ');" id="' . $row["id_curso_detalle"] . '" class="btn btn-outline-primary btn-ico"><div><i class="fa fa-graduation-cap"></i></div></button>';
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
        /*       Microservicio para mostrar informacion del certificado con el id_curso_detalle */
    case "mostrar_curso_datellate":
        $datos = $usuario->get_curso_x_id_detalle($_POST["id_curso_detalle"]);
        /* Aquí validad si es un array si es igual a true y si es diferente a 0 */
        if (is_array($datos) == true and count($datos) <> 0) {
            foreach ($datos as $row) {
                $output["id_curso_detalle"] = $row["id_curso_detalle"];
                $output["id_curso"] = $row["id_curso"];
                $output["id_curso"] = $row["id_curso"];
                $output["nombre_curso"] = $row["nombre_curso"];
                $output["descripcion_curso"] = $row["descripcion_curso"];
                $output["fecha_inicio_curso"] = $row["fecha_inicio_curso"];
                $output["fecha_final_curso"] = $row["fecha_final_curso"];
                $output["id_usuario"] = $row["id_usuario"];
                $output["nombre_usuario"] = $row["nombre_usuario"];
                $output["apellido_paterno"] = $row["apellido_paterno"];
                $output["apellido_materno"] = $row["apellido_materno"];
                $output["id_instrutor"] = $row["id_instrutor"];
                $output["instrutor_nombre"] = $row["instrutor_nombre"];
                $output["apellido_paterno"] = $row["apellido_paterno"];
                $output["apellido_materno"] = $row["apellido_materno"];
            }
            echo json_encode($output);
        }
        break;
    case "total":
        $datos=$usuario->get_total_cursos_x_usuario($_POST["id_usuario"]);
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["total"] = $row["total"];
            }
            echo json_encode($output);
        }
        break;
}
