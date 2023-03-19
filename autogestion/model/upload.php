<?php

include '../../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$religion = (isset($_POST['religion'])) ? $_POST['religion'] : '';
$apodo = (isset($_POST['apodo'])) ? $_POST['apodo'] : '';
$frase = (isset($_POST['frase'])) ? $_POST['frase'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

$img = 'No se ha seleccionado ninguna imagen';
if (is_array($_FILES) && count($_FILES) > 0) {
    if (($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/png")
        || ($_FILES["file"]["type"] == "image/gif")) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "../images/".$_FILES['file']['name'])) {
            $url = $_FILES['file']['name'];
            $consulta = "UPDATE `extintos` SET `foto`= '$url' WHERE `COD_EXTINTO` = '1073750401' ";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            //se guardo correctamente
            $img = 1;
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
print json_encode($img);