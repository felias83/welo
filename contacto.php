<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-3.3.7/favicon.ico">

    <title>Wuelo Digital</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="estilos.css" />

  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           class="text-muted" Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">

 <h3><img src="wuelo2.png" alt="..."  height="250" class="img-thumbnail"></h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="index.html">Inicio</a></li>
       
            <li><a href="#">Servicios</a></li>
	
         
            <li><a href="acerca.html">Acerca</a></li>
	    <li><a href="portafolio.html">Portafolio</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
      

<form method="post" class="contacto" >
  <fieldset>
  <div >
    <label >Nombre</label>
    <input type="text" class="nombre" name="nombre"
           placeholder="Pedro Perez">
  </div>
     <div >
    <label>Email</label>
    <input type="text" class="email"  name="email"
           placeholder="Introduce tu email ej: juan@gmail.com">
  </div>
    <div>
    <label>Telefono</label>
    <input type="text" class="telefono" name="telefono">
  </div>
    <div>
    <label>Mensaje</label>
    <textarea name="mensaje" class="mensaje"
           placeholder="Escriba su mensaje"></textarea>
  </div>
   <div class="ultimo">
     <img src="ajax.gif" class="ajaxgif hide" />
       <div class="msg"></div>
       <button class="boton_envio">Enviar</button>
<!--class="btn btn-default"-->
   </div>
 </fieldset>
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="funciones.js"></script>



      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Wuelo. Barquisimeto, Lara, Venezuela 2016</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
