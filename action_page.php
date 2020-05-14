<?php


if (!empty($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $societe = $_POST["societe"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sujet = 'Stage DWWM promo 2020';

    $toEmail = "mystimer@gmail.com";
    $mailHeaders = "de: " . $nom . $prenom . "<" . $email . ">\r\n";
    if (mail($toEmail, $sujet, $message, $mailHeaders)) {
       //$message = "Your contact information is received successfully.";
       // $type = "success";
        $sent = true;
        echo 'message envoyé';
    }
}
//require_once "contact-view.php";


