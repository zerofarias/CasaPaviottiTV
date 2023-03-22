<?php
session_start();

include '../../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

    $i = (isset($_POST['i'])) ? $_POST['i'] : '';
    $p = (isset($_POST['p'])) ? $_POST['p'] : '';
    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
    date_default_timezone_set('America/Argentina/Cordoba'); 
	$fecha = date('Y-m-d H:i:s');

    switch ($opcion) {
        case 1:
            $stmt = $dbh->prepare("CALL INCIO_SESSION('$i')");
            $stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000);

            // call the stored procedure
            $stmt->execute();		
            

                //$_SESSION['id']=$row['id'];
                //$_SESSION['user']=$row['user'];
                //$_SESSION['rol']=$row['rol'];
                //$_SESSION['fullnombre']=$row['fullnombre'];
            break;
        
        default:
            # code...
            break;
    }
    
print json_encode($stmt, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
