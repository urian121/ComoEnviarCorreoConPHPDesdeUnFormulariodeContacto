<?php
$nombreCliente = $_POST['nombreCliente'];
$emailCliente  = $_POST['emailCliente'];
$msjCliente    = $_POST['msjCliente'];

//Si quisieramos envie el mismo email a multiples correos
/*$to = "somebody@example.com, ";
$to .= "nobody@example.com, ";
$to .= "somebody_else@example.com";
*/


$paraCliente    = $emailCliente;
$tituloCliente  = "Mi Formulario de Contacto..";
$mensajeCliente = "<html>".
    "<head><title>Email de Prueba</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
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
 			    "<p>Su formulario de Contacto funciona perfectamente...!</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Mensaje: </strong> " . $msjCliente . " </p>" .
                "<p>&nbsp;</p>" .
        "<p>¡Gracias por suscribirse a mi Canal </p>" .
        "<p>&nbsp;</p>" .
        "<p><span class='bold'> Wed Developer! </span></p>" .
        "<p>&nbsp;</p>" .
        "<p>".
            "<a title='WebDeveloper' href='https://blogangular-c7858.web.app'>". 
                "<img src='https://www.google.com/imgres?imgurl=https://yt3.ggpht.com/ytc/AAUvwnjY8Foc9Ct0-w-QRRywhm0ZpqWa311gaebiyY4y%3Ds900-c-k-c0x00ffffff-no-rj&imgrefurl=https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA&tbnid=DVxprGL7RdZC3M&vet=1&docid=gMUhMRzL85dPqM&w=900&h=900&source=sh/x/im' alt='Logo' width='100px'/>". 
            "</a>". 
        "</p>" .
    "</div>" .
    "</body>" .
"</html>";

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: Bogota Colombia<programadorphp2017@gmail.com>';
$enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);



/*
    NOTA IMPORTANTE:
    PARA ENVIAR CORREOS TANTO COMO  GMAIL - HOTMAIL(Outlook), ESTE CODIGO FUNCIONA MEJOR QUE EL ANTERIOR,
    EN ESTE LLEGAN LOS EMAIL A Outlook EN BANDEJA DE ENTRADA AL IGUAL QUE GMAIL, SOLO DEBES CAMBIAR EL CONTENIDO 
    DEL MESAJE QUE ENVIAS. OJO SI EXISTE ALGUNA URL O VARIABLE QUE ESTES ENVIANDO EN EL EMAIL Y NO EXISTE O ESTA 
    INCORRECTA EL CORREO NO LLEGARA DEBES ESTA PENDIENTE EN ESTO.
*/

<?php
/*
    $para    = $emailCliente;
    $nameFull = "Urian Viera";
    $urlCanal = "https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA";
    $titulo  = "Mi Formulario de Contacto";
    $mensaje = "
    <!doctype html>
    <html lang='es'>
    <head>
    <title>EMAIL</title>
    </head>
        <body>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div style='width: 80%; margin:0 auto; background-color: #ffffff; color: #34495e; text-align: center;font-family: sans-serif'>
                <h2 style='font-size: 16px; color: #34495e; margin: 0 0 7px;'>&#161;Felicitaciones&#33; 
                    <strong style='color:#555;'> ".$nameFull."</strong>, dale click al bot&oacute;n para visualizar tu bono de descuento de <strong>$20.000</strong>. 
                    Recuerda mostrarlo en la caja de cualquier sede del retailer escogido, no es necesario imprimirlo.
                </h2>
                <p>&nbsp;</p>
                    <a href=".$urlCanal." style='background-color: #fe4c50;border: #fe4c50;color: white;text-decoration: none;padding: 10px 40px;border-radius: 5px;'> Ver cup&oacute;n </a>
                <p>&nbsp;</p>
                <img style='padding: 0; display: block; width:100%; max-width:600px; margin:0 auto;' src='https://blogangular-c7858.web.app/assets/images/work.gif'>
                <p>&nbsp;</p>
            </div>
        </body>
    </html>
    "; 

    //Cabecera Obligatoria
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: WebDeveloper <programadorphp2017@gmail.com>' . "\r\n";
    $headers .= 'Cc: noresponder@pruebaroyalcanin.com.co' . "\r\n";
    
    //OPCIONAR
    $headers .= "Reply-To: "; 
    $headers .= "Return-path:"; 
    $headers .= "Cc:"; 
    $headers .= "Bcc:"; 
    
    mail($para, $titulo, $mensaje, $headers);
  */
    
    
echo "<script>
    window.location='index.php';
</script>";

?>
