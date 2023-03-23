<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Casa Paviotti Condolencias?></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="../back/imglogo/casalogo.png">
  </head>
  <body class="body2">
    <section class="wrapper">
      <div class="form signup">
        <header>PANEL ADMINISTRACION HOMENAJES</header>
        <form class="form-class">
            <input type="text"  id="user" placeholder="Usuario" autocomplete="off" required />
            <input type="password"  id="pass" placeholder="Contraseña" autocomplete="off" required />
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

