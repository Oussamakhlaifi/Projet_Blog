<?php
session_start();
require_once "../vue/connection.php";
require_once "../controller/functions.php"; // Inclure les fonctions nécessaires

if (isset($_POST['submit']) && !empty($_POST['mail']) && !empty($_POST['pass'])) {
    // Si le formulaire est soumis et les champs ne sont pas vides
    $mail = htmlspecialchars($_POST['mail']);
    $pass = htmlspecialchars($_POST['pass']);
    signin($mail, $pass); // Traiter la connexion
} else {
    // Rediriger vers la page d'inscription si le formulaire n'est pas correctement rempli
    header("inscription.php");
    exit(); // Assurez-vous de quitter le script après la redirection
}
