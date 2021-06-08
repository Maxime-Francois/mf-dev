<?php


    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    if(!empty($email) && !empty($subject) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sender = "From: yungmass92@gmail.com";
            $to = "maximefrancois92@gmail.com";

            if(mail($email, $subject, $message, $sender)){
                echo "email envoyé";
            }else{
                echo "erreur lors de l'envoi du message";
            }
        }else{
            echo "veuillez entrer un email valide";
        } 
    }else{
        echo "tout les champs sont obligatoire";
    }

?>