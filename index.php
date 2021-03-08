<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
    <title>Como Enviar Correo con PHP :: Web Developer URIAN VIERA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cargando.css">
    <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Web Developer Urian Viera <span>&#160;</span></h5>
    </div>
</nav>



<div class="container mt-5 p-5">
  <h4 class="text-center">
      Cómo Enviar Correo con PHP desde un Formulario de Contacto Fácil..! 
    </h4>
  <hr>



  <form class="mt-5 p-5" action="enviarEmail.php" method="POST">
  <div class="row">
    <div class="col">
    <label for="exampleFormControlInput1">Nombre del Cliente</label>
      <input type="text" name="nombreCliente" class="form-control" required>
    </div>
    <div class="col">
    <label for="exampleFormControlInput1">Email del Cliente</label>
      <input type="email" name="emailCliente" class="form-control" required>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje del Cliente</label>
        <textarea class="form-control" name="msjCliente" rows="3" required></textarea>
      </div>
    </div>
  </div>

  <div class="row text-center">
  <div class="col-md-12"> 
  <button type="sutmit" class="btn btn-info">Enviar Formulario de Contacto</button>
  </div>
</div>
</form>


</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#msj").fadeOut(1000);
    }, 7000);

});
</script>
</body>
</html>