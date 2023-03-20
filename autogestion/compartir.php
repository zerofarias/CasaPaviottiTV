<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Casa Paviotti - Envio de Condolencias | ?></title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <p class="sub-title">- Deje Su Mensaje -</p>
        <header>COMPARTA ESTE LINK CON SU FAMILIA , AMIGOS Y SERES QUERIDOS PARA QUE ELLOS PUEDAN HACER LLEGAR SUS MENSAJES Y BUENOS DESEOS</header>
        <form class="form-class" action="" enctype="multipart/form-data">
        
          <input type="submit" class="upload" id="save" value="GUARDAR" />
          <button id="whatsapp">Enviar por whatsapp</button>
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