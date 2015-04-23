<?php 
/** @file index.php
* Índice de la aplicación web [nombre] basada en  Warmachine & hordes 
*
* @author Tomas Stapor
* @version 0.01
* 
*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Índice</title>
 
    <!-- CSS de Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- CSS personalizado -->
    <link href="assets/css/estilo.css" rel="stylesheet" media="screen">
<!--     <link href="assets/socialribbons/sribbons.css" rel="stylesheet" media="screen">
 -->    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Todos los plugins JavaScript de Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--RESPONSIVE MENU -->
      <!--SCRIPTS-->
    <script type="text/javascript" src="./assets/responsivemenu/js/jquery.js"></script>
    <script type="text/javascript" src="./assets/responsivemenu/js/function.js"></script>
      <!--CSS FILES-->
    <link rel="stylesheet" type="text/css" href="./assets/responsivemenu/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="./assets/responsivemenu/css/menu.css">
    <?php include './assets/php/menu.php'; ?>
  </head>

  <body>
<div class="container-fluid">

<div class="container">
  <div class="row clearfix">
    <div class="col-md-6 column">
      <h2>
        Logo
      </h2>
    </div>
    <div class="col-md-6 column">

      <!-- SOCIAL RIBBONS HTML -->
<!--         <div class="container">
          <button class="ribbon facebook">
            <span class="entypo-facebook"></span>
          </button>
          <button class="ribbon googleplus">
            <span class="entypo-gplus"></span>
          </button>
          <button class="ribbon twitter">
            <span class="entypo-twitter"></span>
          </button>
        </div> -->
        <!-- // SOC RIB -->
        <form id="login" method="post" target="_blank" action="index.php">
          <input type="text" placeholder="usuario" name="user">
          <input type="password" placeholder="contraseña" name="passwd">
          <input class="btn btn-success" type="submit" value="conectar">
        </form>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12 column">
      <h2>
        <?php mostrarMenu(); ?>
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-4 column">
      <h2>
        Cuerpo 1
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
    <div class="col-md-4 column">
      <h2>
        Cuerpo 2
      </h2>
        
    </div>
    <div class="col-md-4 column">
      <h2>
        Cuerpo 3
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-2 column">
      <h2>
        Footer sup 1
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
    <div class="col-md-6 column">
      <h2>
        Footer sup 2
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
    <div class="col-md-4 column">
      <h2>
        Footer sup 3
      </h2>
      <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
      </p>
      <p>
        <a class="btn" href="#">View details »</a>
      </p>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12 column">
      <p> Copyright© Tomas Stapor || Proyecto final de módulo DAW || Licencia no comercial</p>
    </div>
  </div>
</div>


</div>

  </body>
</html>