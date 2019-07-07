<?php 

if(isset($_POST['submit'])){
    if(isset($_POST['disclaimer'])) {
        $to = "contacto@cediem.com"; // Tu email
        $from = $_POST['inputEmail3'];
        $name = $_POST['userName'];
        $subject = "Mensaje enviado";
        //$subject2 = "Copia del mensaje";
        $message = $name . " escribir lo siguiente:" . "\n\n" . $_POST['userMsg'];

        /*$message2 = "Esto es una copia del mensaje " . $name . "\n\n" . $_POST['message'];*/

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        //mail($from,$subject2,$message2,$headers2); // Envia una copia a la persona. Si no lo quieres, borra esta línea.
        echo "Mensaje enviado. Gracias " . $_name . ", nos pondremos en contacto lo antes posible.";
    } else {
        echo 'Debe acertar las condiones de uso y privacidad';
    }
}

 ?>