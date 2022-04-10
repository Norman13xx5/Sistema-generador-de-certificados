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
}
