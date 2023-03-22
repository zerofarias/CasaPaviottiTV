<?php




include '../../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

    $i = (isset($_POST['i'])) ? $_POST['i'] : '';
    $p = (isset($_POST['p'])) ? $_POST['p'] : '';
    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
    date_default_timezone_set('America/Argentina/Cordoba'); 
	$fecha = date('Y-m-d H:i:s');

$opcion = 1;
session_start();
    
    switch ($opcion) {
        case 1:
                $consulta = "SELECT * FROM users WHERE USER = '$user' ";			
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();
                $row = $resultado->fetch();
                $count = $resultado->rowCount();
                if ($row['pass'] == $pass && $count == 1) {
                    $paso = 0101;
                }else{
                    $paso = 4;
                }
            break;

    }
print json_encode($paso, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
           // $conexion=null; 
    

    //print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
    //$conexion=null;