<?php
    $email = $_POST['email'];
    $to = $email;
    $subject= "ACM Uniandes";
    $message= "
            <html>
                <head>
                    <title>Correo</title>
                </head>
                <body>
                    <div style='width:100%; text-align:center'>
                        <img src='http://acmone.herokuapp.com/images/acm.png' alt='logo' style='width:200px'>
                        <br>
                        <h1>Hemos recibido tu respuesta</h1>
                        <p>Gracias por interesarte en nuestro capítulo. Próximamente te estaremos contactando para que puedas enterarte mejor de nuestras actividades.</p>
                        <p style='font-size:8pt'>Este correo fue generado automáticamente. Por favor no respondas a esta dirección ya que al hacerlo no recibirás respuesta alguna. Gracias</p>
                    </div>
                </body>
            </html>
             ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: amigo008@hotmail.com' . "\r\n";
    if($_POST){
        mail($to, $subject, $message, $headers);
    }
