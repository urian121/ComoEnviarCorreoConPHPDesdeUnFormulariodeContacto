<?php 
/*
Hola a todos gracias por ver mis videos y sus comentarios en el canal "WebDeveloper",
este archivo es otra forma muy fácil para poder enviar correos con PHP,
de no ser que no funcione el envio de email que esta en el archivo enviarEmail.php 
no porque el código esta mal si no porque tal vez el servido bloquea la opción para enviar email
de esta forma. En fin pueden probar este código estoy seguro que funcionara.

*/
$cliente        ="Alejandro";
$usuario        ="Urian Viera";

//Si quisieramos envie el mismo email a multiples correos
/*$to = "somebody@example.com, ";
$to .= "nobody@example.com, ";
$to .= "somebody_else@example.com";
*/
$destinatario   = 'programadorphp2017@gmail.com';
//$asunto         = utf8_decode("Cupón de Descuento)";
$asunto         = "Bienvenido a WebDEeveloper";
$cuerpoEmail    = ' 
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="padding: 0">
            <img style="padding: 0; display: block" src="https://royalcanin48horas.com.co/Registro48Horas/images/banneremailv2.jpg" width="100%">
        </td>
    </tr>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div style="color: #34495e; margin: 4% 10% 2%; text-align: center;font-family: sans-serif">
                <h2 style="color: #333; margin: 0 0 7px">Hola Felicitaciones..!, '.$cliente.' te informo que el cliente <strong> '.$usuario.' </h2>
                <p style="margin: 2px; font-size: 18px"> ha recibido un códigos de descuento..
                <p>&nbsp;</p> 
                <p>Gracias por visitar mi canal <strong>WebDeveloper</strong>...</p>
                <p>&nbsp;</p>
            </div>
        </td>
    </tr>

    <tr>
        <td style="padding: 0;">
            <img style="padding: 0; display: block" src="https://royalcanin48horas.com.co/Registro48Horas/images/footeremail2.jpg" width="100%">
        </td>
    </tr>
</table>
'; 

$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: Registro Royal Canin <programadorphp2017@gmail.com>\r\n"; 
$headers .= "Reply-To: "; 
$headers .= "Return-path:"; 
$headers .= "Cc:"; 
$headers .= "Bcc:"; 
$EnvioCriador    = mail($destinatario,$asunto,$cuerpoEmail,$headers);


/*
    NOTA IMPORTANTE:
    PARA ENVIAR CORREOS TANTO COMO  GMAIL - HOTMAIL(Outlook), ESTE CODIGO FUNCIONA MEJOR QUE EL ANTERIOR,
    EN ESTE LLEGAN LOS EMAIL A Outlook EN BANDEJA DE ENTRADA AL IGUAL QUE GMAIL, SOLO DEBES CAMBIAR EL CONTENIDO 
    DEL MESAJE QUE ENVIAS. OJO SI EXISTE ALGUNA URL O VARIABLE QUE ESTES ENVIANDO EN EL EMAIL Y NO EXISTE O ESTA 
    INCORRECTA EL CORREO NO LLEGARA DEBES ESTA PENDIENTE EN ESTO.
*/

<?php
/*
    $para    = "programadorphp2017@gmail.com";
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
    
?>
