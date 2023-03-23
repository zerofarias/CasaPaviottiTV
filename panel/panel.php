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
    <link rel="shortcut icon" href="../back/imglogo/casalogo.png">
</head>
<body>

  <div class="wrapper-full">

       
      <div class="title">Alta De Productos/Reclamos</div>
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
                              <th>cavador</th>
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
  </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/panel.js"></script>
      <script src="js/sweet.js"></script>
      <script src="js/dataTable.js"></script>
      <script src="js/dt-min.js"></script>

</body>
</html>
