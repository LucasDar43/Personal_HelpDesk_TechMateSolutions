<?php
    class Ticket extends Conectar{

        public function insert_ticket($usuario_id,$cat_id,$ticket_titulo,$ticket_descripcion){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO ticket (ticket_id, usuario_id, cat_id, ticket_titulo, ticket_descripcion, estado , fecha_creacion,est ) VALUES (NULL, ?, ?, ?, ?, 'Abierto',now(),'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usuario_id);
            $sql->bindValue(2,$cat_id);
            $sql->bindValue(3,$ticket_titulo);
            $sql->bindValue(4,$ticket_descripcion);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function listar_ticket($usuario_id){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT 
                ticket.ticket_id,
                ticket.usuario_id,
                ticket.cat_id,
                ticket.ticket_titulo,
                ticket.ticket_descripcion,
                ticket.estado,     
                ticket.fecha_creacion,
                tm_usuario.usuario_nombre,
                tm_usuario.usuario_apellido,
                categoria.cat_nombre
                FROM 
                ticket
                INNER join categoria on ticket.cat_id = categoria.cat_id
                INNER join tm_usuario on ticket.usuario_id = tm_usuario.usuario_id
                WHERE
                ticket.estado = 'Abierto'
                AND tm_usuario.usuario_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usuario_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }


        public function listar_ticketdetalle($ticket_id){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT  
                ticket_detalle.ticketD_id
                ticket_detalle.ticket_descripcionD,
                ticket_detalle.fecha_creacion,
                tm_usuario.usuario_nombre,
                tm_usuario.usuario_apellido
                FROM 
                ticket_detalle
                INNER JOIN tm_usuario on ticket_detalle.usuario_id = tm_usuario.usuario_id
                WHERE ticket_id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$ticket_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }




}


?>