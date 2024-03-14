<?php
require_once "../controller/functions.php";

// Initialisation de la variable $menu_item
$menu_item = '';

// Vérifie si l'utilisateur est connecté
if (isset($_SESSION['user'])) {
    // Récupère les articles
    $articles = get_article();
} else {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connection.php");
    exit(); // Assurez-vous de quitter le script après la redirection
}

// Inclure la vue pour afficher les articles
require_once "../vue/article.php";
?>