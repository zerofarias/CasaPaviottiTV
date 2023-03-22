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
