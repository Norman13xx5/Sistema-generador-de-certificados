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
            $sub_array[] = $row["instrutor_nombre"] . "" . $row["apellido_paterno"];
            $sub_array[] = '<button type="button" onClick="certificado(' . $row["id_curso_detalle"] . ');" id="' . $row["id_curso_detalle"] . '" class="btn btn-outline-warning btn-ico"><div><i class="fa fa-edit"></i></div></button>';
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
