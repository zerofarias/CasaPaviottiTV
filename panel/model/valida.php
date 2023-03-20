<?php

include '../../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

    $i = (isset($_POST['i'])) ? $_POST['i'] : '';
    $p = (isset($_POST['p'])) ? $_POST['p'] : '';
    $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

    switch ($opcion) {
        case 1:
            
            break;
        case 2:
            $consulta = "SELECT * FROM users";
                        $resultado = $conexion->prepare($consulta);
                        $resultado->execute();
            break;
        
        default:
                
            break;
    }
print json_encode($usuario);