<?php 

function ValidarHash($hash,$cod){
      include '../back/db/conexion.php';
      $objeto = new Conexion();
      $conexion = $objeto->Conectar();

      if (strlen($hash) > 3 || strlen($cod) > 3) {
            $consulta = "SELECT apellido,fechasep FROM `extintos` WHERE `COD_EXTINTO` = '$cod' ";
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $row = $resultado->fetch();
                      if (strlen($row["apellido"]) !== 0){
                            //header('Location: https://paviotti.com.ar/');
                            return $row["apellido"];
                        }else{
                          header('Location: https://paviotti.com.ar/');
                      }
              if($resultado->rowCount() != 1){
                header('Location: https://paviotti.com.ar/');
              }

      }else {
          header('Location: https://paviotti.com.ar/');
      }
}


$hash = $_GET['condolencia'];
$cod = substr($_GET['condolencia'],3);

$apellido =  ValidarHash($hash,$cod);


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Casa Paviotti - Envio de Condolencias | <?php echo $apellido; ?></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="../back/imglogo/casalogo.png">
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <p class="sub-title">- Deje Su Mensaje -</p>
        <header><?php echo $apellido; ?></header>
        <form class="form-class" action="" enctype="multipart/form-data">
        <input type="text"  id="nombre" placeholder="Tu Nombre" autocomplete="off" required />
        <input type="text"  id="apellido" placeholder="Tu Apellido" autocomplete="off" required />
        <input type="text"  id="tel" placeholder="Numero Tel" autocomplete="off" required />
        <input type="text"  id="hash" value="<?php echo $hash?>" autocomplete="off" hidden />
        <input type="mail"  id="mail" placeholder="E-Mail" autocomplete="off" />
        <textarea rows="" cols="" id="frase" placeholder="Su Condolencia" autocomplete="off" required></textarea>
          
          <input class ="file-select" id="image" type="file"  autocomplete="off"/>
          <div class="checkbox">
            <input type="checkbox" id="terminos" required />
            <label for="signupCheck">Acepto Terminos y Condiciones</label>
          </div>
          <input type="submit" class="upload" id="save" value="ENVIAR" />
        </form>
      </div>

      <div class="form login">
        <header>Casa Paviotti</header>
        
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>

      <script src="js/jquery.min.js"></script>
      <script src="js/function.js"></script>
      <script src="js/sweet.js"></script>
  </body>
</html>

