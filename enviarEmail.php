<?php
$nombreCliente = $_REQUEST['nombreCliente'];
$emailCliente  = $_REQUEST['emailCliente'];
$msjCliente    = $_REQUEST['msjCliente'];


$paraCliente    = $msjCliente;
$tituloCliente  = "Mi Formulario de Contacto..!";
$mensajeCliente = "<!DOCTYPE html>".
"<html>".
"<html lang='es'>".
    "<head>".
    "<meta charset='UTF-8'>".
    "<title>Email de Prueba</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        padding: 40px;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .bold{
        color:#333;
        font-size:25px;
        font-weight:bold;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px 0px 20px 0px;
   }
</style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Felicitaciones <strong class='bold'>" . $nombreCliente . " . . .!</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p>Su formulario de Contacto funciona perfectamen...!</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
        "<p>¡Gracias por suscribirse a mi Canal <span class='bold'> Wed Developer! </span> </p>" .
        "<p>".
            "<a title='WebDeveloper' href='https://blogangular-c7858.web.app' target='_blank'>".
                "<img src='https://www.permutasalcuadrado.com/assets/images/logo-mywebsite-urian-viera.svg' alt='' width='100px' />".
            "</a>".
        "</p>" .
    "</div>" .
    "</body>" .
"</html>";

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: Bogota Colombia<programadorphp2017@gmail.com>';
$enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);



?>