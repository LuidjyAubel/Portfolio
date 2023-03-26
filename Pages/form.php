<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$messageA = $_POST['message'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && $fnameErr =="" && $fmailErr == ""
&& $fsexeErr == "" && $fprenomErr == "") {
$emailTo = 'minefly50prodution@gmail.com';
$subject ="Contact";
$message = $message."<br>";
$message = $message."Email de la part de : $nom $prenom.<br>" ;
$message = $message." Adresse email : $email <br>";
$message = $message." Message : $messageA <br>";
$message = $message."<br>";
$message = $message."/!\ mail automatique merci de ne pas repondre ! <br>";

$headers = "MiME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset-utf-8\n";
$headers .= "From : $mail";
$error = !mail($emailTo, $subject, $message, $headers);
header("Location: index.php");
}


?>