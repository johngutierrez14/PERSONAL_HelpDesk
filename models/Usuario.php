<?php
    class Usuario extends Conectar {
        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $email = $_POST["user_email"];
                $password = $_POST["user_password"];
                if(empty($email) and empty($password)){
                    header("Location:".conectar::ruta()."index.php?m=2");
					exit();
                }else{
                    $sql = "SELECT * FROM tm_user WHERE user_email=? and user_password=? and user_state=1";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $email);
                    $stmt->bindValue(2, $password);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["user_id"]=$resultado["user_id"];
                        $_SESSION["user_name"]=$resultado["user_name"];
                        $_SESSION["user_lastname"]=$resultado["user_lastname"];
                        header("Location:".Conectar::ruta()."view/Home/");
                        exit(); 
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>