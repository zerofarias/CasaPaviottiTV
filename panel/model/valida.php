<?php

session_start();

include '../../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

    $user = (isset($_POST['user'])) ? $_POST['user'] : '';
    $pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';
    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
    date_default_timezone_set('America/Argentina/Cordoba'); 
	$fecha = date('Y-m-d H:i:s');
    
    switch ($opcion) {
        case 1:
                $consulta = "SELECT * FROM users WHERE USER = '$user' ";			
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();
                $row = $resultado->fetch();
                $count = $resultado->rowCount();
                if ($row['pass'] == $pass && $count == 1) {
                    $_SESSION['cod']=$row['cod_user'];
			        $_SESSION['user']=$row['user'];
			        $_SESSION['rol']=$row['rol'];
                    $data = 0101;
                }else{
                    $data = 4;
                }
            break;
        case 4:
            $consulta = "SELECT * FROM `extintos`  ORDER BY COD_EXTINTO DESC LIMIT 50";			
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            
            break;

    }
print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX