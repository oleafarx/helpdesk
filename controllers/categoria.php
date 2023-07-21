<?php
    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $categoria = new Categoria();

    switch($_GET["op"]) {
        case "combo":
            $datos = $categoria->getCategoria();
            if (is_array($datos) and count($datos) > 0) {
                $html = "";
                foreach ($datos as $row) 
                {
                    $html.="<option value='".$row['ca_id']."'>".$row['ca_nombre']."</option>";
                }
                echo $html;
            }
        break; 
    }
?>