<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk","root","");
                return $conectar;
            } catch (Exception $e) {
                print "!ERROR BD!: " . $e->getMessage() . "</br>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        //Para no estar escribiendo siempre la ruta, se coloca en una propiedad
        public function ruta(){
            return "http://localhost:8080/helpdesk/";
        }
    }
?>