<?php
    $email= $_POST['email'];
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

    $headers .= 'From: acm@uniandes.edu.co' . "\r\n";
    //final
    /*if($_POST){
        if(mail($to, $subject, $message, $headers)){
            echo "Gracias. Te hemos enviado un correo a ". $to;
        }
        else{
            echo "Lo sentimos. Te hemos fallado";
        }
    }*/
    //heroku
    require 'vendor/autoload.php';
    $sendgrid = new SendGrid('sbacarob', 'pruebaEmailACMUniandes');

    $mail = new SendGrid\Email();
    $mail->addTo($to)->
        setFrom('acm@uniandes.edu.co')->
        setSubject($subject)->
        setText('Gracias por interesarte en nuestro capítulo. Próximamente te estaremos contactando para que puedas enterarte mejor de nuestras actividades.<')->
        setHtml($message);
    try {
        $sendgrid->send($mail);
        echo "Gracias. Te hemos enviado un correo a ". $to;
    } catch(\SendGrid\Exception $e) {
        echo $e->getCode();
        foreach($e->getErrors() as $er) {
            echo $er;
        }
    }
    echo pg_connect("");


