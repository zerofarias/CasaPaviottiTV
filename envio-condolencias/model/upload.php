<?php

include '../../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$tel = (isset($_POST['tel'])) ? $_POST['tel'] : '';
$mail = (isset($_POST['mail'])) ? $_POST['mail'] : '';
$terminos = (isset($_POST['terminos'])) ? $_POST['terminos'] : '';

$frase = (isset($_POST['frase'])) ? $_POST['frase'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$hash = (isset($_POST['hash'])) ? $_POST['hash'] : '';

/////// convierto $hash all verdadero codigo
$cod = substr($hash,3);

$img = 'No se ha seleccionado ninguna imagen';
switch ($opcion) {
    case 1:
        if (is_array($_FILES) && count($_FILES) > 0) {
            if (($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/gif")) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], "../images/".$cod.$_FILES['file']['name'])) {
                    $url = $cod.$_FILES['file']['name'];
                    //$consulta = "UPDATE `extintos` SET `foto`= '$url' WHERE `COD_EXTINTO` = '$cod' ";
                    $consulta = "INSERT INTO `condolencias`(`COD_EXTINTO`, `nombre`, `apellido`, `tel`, `mail`, `mensaje`, `foto`) 
                                                        VALUES ('$cod','$nombre','$apellido','$tel','$mail','$frase','$url')";
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();

                    if ($resultado) {
                        $img = 1;
                    }else{
                        $img = 4;
                    }
                    //se guardo correctamente
                    
                } else {
                    //No se pudo Guardar en el directorio
                    $img = 2;
                }
            } else {
                //No es un formato de imagen valido, Por favor seleccione otra imagen
                $img = 3;
            }
        } else {
            //No se ha seleccionado ninguna imagen
            $img = 4;
        }

        break;
    case 2:
        $consulta = "INSERT INTO `condolencias`(`COD_EXTINTO`, `nombre`, `apellido`, `tel`, `mail`, `mensaje`, `foto`) 
                                                        VALUES ('$cod','$nombre','$apellido','$tel','$mail','$frase',NULL   )";
                    $resultado = $conexion->prepare($consulta);
                    $resultado->execute();
            if ($resultado) {
                $img = 1;
            }else{
                $img = 4;
            }
        break;
    
    default:
            $img = 'ninguna variable enviada';
        break;
}

print json_encode($img);