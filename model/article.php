<?php
session_start();
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
if (isset($_POST['delete'])) {
    // Vérifie si l'ID de l'article à supprimer est également envoyé via le formulaire
    if (isset($_POST['article_id'])) {
        // Récupère l'ID de l'article à partir du formulaire
        $article_id = $_POST['article_id'];

        // Supprime l'article de la base de données en utilisant son ID
        $result = delete_article($article_id);

        // Vérifie si la suppression a réussi
        if ($result) {
            echo "L'article a été supprimé avec succès.";
        } else {
            echo "Une erreur s'est produite lors de la suppression de l'article.";
        }
    } else {
        echo "ID de l'article manquant dans la demande de suppression.";
    }
}
if(isset($_POST['update'])){
    
}

// Inclure la vue pour afficher les articles
require_once "../vue/article.php";
?>