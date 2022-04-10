<?php
/* Iniciamos clase conectar */
class Conectar
{
    protected $dbh;
    /* Funcion protegida de la cadena de conexion */
    protected function Conexion()
    {
        try {
            /* Cadena de conexión */
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=brayan_diplomas", "root", "");
            return $conectar;
        } catch (Exception $e) {
            /* En caso de que hubiese un error en la cadena de conexión */
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    /* Para impedir que tengamos problemas con las ñ o tildes */
    public function set_name()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
    /* Ruta principal del proyecto */
    public function ruta()
    {
        return "http://localhost/generador_certificados/";
    }
}
