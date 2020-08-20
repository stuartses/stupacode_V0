<?php

$viene_formulario = false;
$confirma_envio = false;

if (isset($_POST["enviar"])) {
  $viene_formulario = true;
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  
  $mail = $nombre."<br>".$correo."<br>".$telefono."<br>".$mensaje;

  $titulo = "Mensaje desde la Web";

  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

  $headers .= "From: ".$nombre." <".$correo.">\r\n";

  $confirma_envio = mail("info@stupacode.com",$titulo,$mail,$headers);
}

?>

<!DOCTYPE HTML>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Stupa Code - Contacto</title>
        <link href="frame/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >      
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
		
        <!-- Etiqueta global de sitio (gtag.js) de Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120552711-1 "></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          
          gtag('config', 'UA-120552711-1 ');
        </script>
    </head>

    <body>
        <!-- Barra de navegación -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">Stupa Code</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <!--
                        <li class="nav-item dropdown"
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Portfolio
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="#biblioteca">Biblioteca en línea</a>
                                <a class="dropdown-item" href="#indicadores">Reportes e indicadores</a>
                                <a class="dropdown-item" href="#tomadedatos">Toma de datos en campo</a>
                            </div>
                        </li>
                        -->
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        -->
                        <li class="nav-item">
                            <a class="nav-link" href="#acerca">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- confirmacion -->
        <div class="container-fluid pt-3 mt-5 mb-5" id="servicios">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-12 text-center seccion text-uppercase h2">
                    <?php
                    if ($confirma_envio)
                         echo '¡Gracias!';
                    else 
                        echo '¡Ha ocurrido un error!';
                    ?>
                </div>
                <div class="col-lg-12 opcion-cuerpo text-muted text-center">
                    <?php
                    if ($confirma_envio)
                        echo 'Tu mensaje ha sido enviado, te estaré contactando pronto';
                    else
                        echo 'Por favor, intenta nuevamente';
                    ?>
                                        </br></br><a href="http://stupacode.com">Regresar</a>
                </div> 
            </div>

 
        </div>


        <!-- Pie -->
        <footer class="py-3 bg-dark">
            <div class="container-fluid justify-content-center text-center">              
                <span class="fa-stack fa-lg">
                    <a href="https://www.linkedin.com/company/stupacode/" target="blank">
                        <i class="fa fa-circle fa-stack-2x circulo-icono"></i>
                        <i class="fa fa-linkedin fa-stack-1x icono-simbolo"></i>
                    </a>
                </span>
                <span class="fa-stack fa-lg">
                    <a href="http://fb.me/stupacode" target="blank">
                        <i class="fa fa-circle fa-stack-2x circulo-icono"></i>
                        <i class="fa fa-facebook fa-stack-1x icono-simbolo"></i>
                    </a>
                </span>
                <span class="fa-stack fa-lg">
                    <a href="mailto:info@stupacode.com">
                        <i class="fa fa-circle fa-stack-2x circulo-icono"></i>
                        <i class="fa fa-envelope fa-stack-1x icono-simbolo"></i>
                    </a>
                </span>                 
            </div>
            <p class="mt-5 mb-0 text-center text-white">Copyright &copy; Stupa Code 2018</p>
        </footer>

        <!-- Bootstrap JavaScript -->
        <script src="frame/jquery/jquery.min.js"></script>
        <script src="frame/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
