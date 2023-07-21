<?php
    class Ticket extends Conectar {

        public function postTicket($ti_usuario, $ti_categoria, $ti_titulo, $ti_descripcion) {
            $conectar=parent::conexion();
            parent::set_names();

            $sql = "INSERT INTO ticket (ti_id, ti_usuario, ti_categoria, ti_titulo, ti_descripcion, ti_estado) VALUES (NULL, ?, ?, ?, ?, '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ti_usuario);
            $sql->bindValue(2, $ti_categoria);
            $sql->bindValue(3, $ti_titulo);
            $sql->bindValue(4, $ti_descripcion);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>