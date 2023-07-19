<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();

            if (isset($_POST["enviar"])) {
                $correo = $_POST["us_correo"];
                $pass = $_POST["us_pass"];

                if (empty($correo) and empty($pass)) {
                    //Ruta se encuentra en conexion.php y se concatena el index.php
                    header("Location:".conectar::ruta()."index.php?m=2");
                    exit();
                } else {
                    $sql = "SELECT * FROM hd_usuario WHERE us_correo = ? AND us_pass = ? and us_estado = 1;";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();

                    if (is_array($resultado) and count($resultado) > 0) {
                        $_SESSION["us_id"] = $resultado["us_id"];
                        $_SESSION["us_nombre"] = $resultado["us_nombre"];
                        $_SESSION["us_apellido"] = $resultado["us_apellido"];

                        header("Location:".conectar::ruta()."view/Home/");
                        exit();
                    } else {
                        header("Location:".conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>