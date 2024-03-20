<?php
session_start();

// Charger les fichiers nécessaires
include_once '../vue/menu.php';
require_once '../vue/inscrit.php';
require_once "../controller/functions.php";

if (
    isset($_POST['submit']) &&
    !empty($_POST['mail']) &&
    !empty($_POST['pass'])
) {
    $mail = htmlspecialchars($_POST['mail']);
    $pass = htmlspecialchars($_POST['pass']);
    signup($mail, $pass);
    header("Location: connection.php"); // Corrected redirection
    exit(); // Ensure script stops executing after redirection
} else {
    header("Location: inscription.php"); // Corrected redirection
    exit(); // Ensure script stops executing after redirection
}
?>

