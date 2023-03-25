<?php

session_start();
	if (@!$_SESSION['user']) {
		header("Location:https://paviotti.com.ar/");
	}elseif ($_SESSION['rol']>=2) {
		header("Location:https://paviotti.com.ar/");
	};
?>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Casa Paviotti Condolencias?></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="../back/imglogo/casalogo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script
        src="https://kit.fontawesome.com/7e5b2d153f.js"
        crossorigin="anonymous"
    ></script>
</head>
<body>
    <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="inhumados" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        
                        <tr>
                            <th>#</th>
                            <th>Fallecido</th>
                            <th>Fecha Fallecimiento</th>
                            <th>Fecha Sepelio</th>
                            <th>Hora Sepelio</th>
                            <th>Sala</th>
                            <th>Cementerio</th>
                            <th>Religio</th>
                            <th>Frace</th>
                            <th>Apodo</th>
                            <th>Foto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
      
  </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/panel.js"></script>
      <script src="js/sweet.js"></script>
      <script src="js/dataTable.js"></script>
      <script src="js/dt-min.js"></script>
      <script src="js/bootstrap.js"></script>

</body>
</html>
