<?php
    class Categoria extends Conectar {

        public function getCategoria() {
            $conectar=parent::conexion();
            parent::set_names();

            $sql = "SELECT * FROM categoria WHERE ca_estado = 1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>