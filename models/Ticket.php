<?php
    class Ticket extends Conectar{

        public function insert_ticket($user_id,$id_categoria,$titulo_ticket,$descripcion_ticket){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_ticket (id_ticket,user_id,id_categoria,titulo_ticket,descripcion_ticket,estado) VALUES (NULL,?,?,?,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $user_id);
            $sql->bindValue(2, $id_categoria);
            $sql->bindValue(3, $titulo_ticket);
            $sql->bindValue(4, $descripcion_ticket);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>