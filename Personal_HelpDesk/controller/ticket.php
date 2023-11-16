<?php

    require_once("../config/conexiones.php");
    require_once("../models/Ticket.php");
    $ticket =new Ticket();

    

    switch($_GET["op"]){
        case "insert":
            $ticket ->insert_ticket($_POST ["usuario_id"],$_POST ["cat_id"],$_POST ["ticket_titulo"],$_POST ["ticket_descripcion"]);
          
            break;

        case "listar_usuario":
            $datos=$ticket->listar_ticket($_POST["usuario_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array=array();
                $sub_array[]=$row["ticket_id"];
                $sub_array[]=$row["cat_nombre"];
                $sub_array[]=$row["ticket_titulo"];
                

                if ($row["estado"]=="Abierto"){
                    $sub_array[]='<span class="label label-pill label-success">Abierto</span>';
                }else{
                    $sub_array[]='<span class="label label-pill label-default">Cerrado</span>';
                }


                

                $sub_array[] = date("d/m/Y H:i:s", strtotime($row["fecha_creacion"]));
                $sub_array[] = '<button type="button" onClick="ver('.$row["ticket_id"].');"  id="'.$row["ticket_id"].'" class="tabledit-edit-button btn btn-sm btn-default active"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);


            

        
        break;



        case "listar_detalle":
            $datos=$ticket->listar_ticketdetalle($_POST($ticket_id));
            ?>
<?php
        foreach($datos as $row){
            ?>
            <article class="activity-line-item box-typical">
            </article>
          <?php  
        }

?>
<?php
        break;

    }
?>