<?php 

include '../back/db/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

/////$hash = 107375838432;

$hash = $_GET['hash'];
if (!$hash) {
  header('Location: https://paviotti.com.ar/');
}else{
          $cod = substr($_GET['hash'],0,-2);


                $consulta = "SELECT apellido,fechasep FROM `extintos` WHERE `COD_EXTINTO` = '$cod' ";
                $resultado = $conexion->prepare($consulta);
                $resultado->execute();

                while ($row = $resultado->fetch()){
                      $apellido = $row["apellido"];
                      $fecha = $row["fechasep"];
                      }

                  if($resultado->rowCount() != 1){
                    header('Location: https://paviotti.com.ar/');
                  }


}


?>

<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Login & Signup Form</title>-->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header><?php echo $apellido; ?></header>
        <form action="#">
          <select id="religion">
            <option value="0" >Seleccione una Religion</option>
            <option value="1">Cristianismo &nbsp;&nbsp; ✝</option>
            <option value="2">Judaismo &nbsp;&nbsp; ✡</option>
            <option value="3">Hinduismo &nbsp;&nbsp; ॐ</option>
            <option value="4">Islam &nbsp;&nbsp; ☪</option>
            <option value="5">Budismo &nbsp;&nbsp; ☸</option>
            <option value="6">Taoismo &nbsp;&nbsp; ☯</option>
          </select>
          <input type="text"  id="apodo" placeholder="Apodo (opcional)" autocomplete="off" />
          <input type="text"  id="hash" value="<?php echo $hash?>" autocomplete="off" hidden />
          <textarea rows="" cols="" id="frase" placeholder="Frase que se mostrara" autocomplete="off" ></textarea>
          <input class ="file-select" id="image" type="file"  autocomplete="off"/>
          <div class="checkbox">
            <input type="checkbox" id="terminos" required />
            <label for="signupCheck">Acepto Terminos y Condiciones</label>
          </div>
          <input type="submit" class="upload" id="save" value="GUARDAR" />
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

