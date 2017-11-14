<?php  
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("mapa",$con);
?>

<!DOCTYPE html>
<html lang="es">

<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Página Principal</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/freelancer.min.css" rel="stylesheet">

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">FCC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Inicia Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-circle" src="img/fcc2.png" alt="" widht="250" height="200">
        <div class="intro-text">
          <span class="name">Guía de Materias</span>
          <hr class="star-light">
          <span class="skills">Revisa tu porcentaje de materias</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Info</h2>
        <hr class="star-primary">
        <div class="row">
         <div class="col-lg-4 ml-auto">
            <p>Se quiere lograr una buena organización para cada estudiante en su plan de estudio.Se quiere llegar a obtener buenos resultados al fin de cada bimestre, y respectivamente al final de la carrera, organizando de forma ordenada las cantidad de materias específicas que se van a tomar por lapsos de tiempo del presente año.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>El alcance de nuestro proyecto es lograr que la comunidad de computación de generación 2016 en adelante tenga una herramienta en donde pueda consultar su avance de la carrera de forma ordenada y clara. Además de visualizar el porcentaje de su avance, la comunidad podrá tener la opción de verificar qué materias debe cursa en el semestre que se encuentre a ingresar y qué materia están disponibles para evitar errores de cursar materias sin aprobar una antes (pre-requisito) o de haber reprobado.</p>
          </div>

          </div>
        </div>
      </div>
    </section>

    
    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">Registro</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form method="POST" action="index.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nombre</label>
                  <input class="form-control" name="nombre" type="text" placeholder="Nombre" required data-validation-required-message="Por favor ingresa tu nombre">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
               <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Matrícula</label>
                  <input class="form-control" name="matricula" type="number" placeholder="Matrícula" required data-validation-required-message="Por favor ingresa tu correo electrónico">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Contraseña</label>
                  <input class="form-control" name="contrasena" type="password" placeholder="Contraseña" required data-validation-required-message="Por favor ingresa tu contraseña">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
             
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageBut">Enviar</button>
              </div>
            </form>

        <?php

    
            error_reporting(0);

            $nombre=$_POST["nombre"];
            $matricula=$_POST["matricula"];
            $contrasena=$_POST["contrasena"];

            if (($nombre!=null)&&($matricula!=null)&&($contrasena!=null)){

            mysql_query("INSERT INTO usuarios(nombre,matricula,contrasena)VALUES
            ('$_POST[nombre]','$_POST[matricula]','$_POST[contrasena]')",$con);

            mysql_query("INSERT INTO 
            materias(matricula,e11,e12,e13,e14,e15,e16,e17,e18,e21,e22,e23,e24,e25,e26,e27,e28,e29,
            e32,e33,e36,e37,e39,e41,e42,e43,e44,e45,e46,e48,e410,
            e53,e54,e55,e56,e57,e58,e59,e510,
            e65,e67,e68,e78,e79,e710,e81,e82,e83,e84,e91,e92)VALUES
            ('$_POST[matricula]','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'
            ,'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'
            ,'0','0','0','0','0','0','0','0','0','0','0','0','0','0')",$con);

            if ($nombre!=null){
            ?>

            <script type="text/javascript">
            alert("Registrado");
            </script>

            <?php
            }}
            ?>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Inicia Sesión</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form action="index.php"  method="POST">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Matrícula</label>
                  <input class="form-control" name="nombre2" type="number" placeholder="Matrícula" required data-validation-required-message="Por favor ingresa tu nombre">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Contraseña</label>
                  <input class="form-control" name="contrasena2" type="password" placeholder="Contraseña" required data-validation-required-message="Por favor ingresa tu contraseña">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
             
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Enviar</button>
              </div>
            </form>

            <?php

            error_reporting(0);

            session_start();

            $reg=mysql_query("SELECT * FROM usuarios WHERE contrasena='$_POST[contrasena2]'");
            $res=mysql_fetch_array($reg);

            $_SESSION['intervalo']  = 0.1; 
            $_SESSION['inicio'] = time();
            
            if($_POST["contrasena2"]!=null){
            if($res['contrasena']==$_POST["contrasena2"]){
            $_SESSION['username']=$_POST["nombre2"];
            ?>

            <script type="text/javascript">
            location.href ="bienvenido.php";
            </script>
            
            <?php
            }}
            ?>

          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Facultad de Cs. de la computación</h3>
              <p>14 Sur y Av. San Claudio C.P. Puebla, 
                <br>Puebla, México </p>
            </div>
            <div class="footer-col col-md-4">
              <h3>En Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Contacto</h3>
              <p>correo:
                
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
