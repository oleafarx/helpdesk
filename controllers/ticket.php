<?php
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]) {
        case "insertar":
            $ticket->postTicket($_POST["ti_usuario"],$_POST["ca_id"],$_POST["ti_titulo"],$_POST["ti_descripcion"]);
        break; 
    }
?>