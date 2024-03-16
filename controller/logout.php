<?php
session_start(); // Démarrer la session

// Détruire toutes les données de session
$_SESSION = array();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion ou une autre page appropriée
header("Location:../model/connection.php");
exit();
?>