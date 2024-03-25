<?php
require_once '../controller/functions.php';

// Le contrôleur gère les requêtes utilisateur
if (isset($_SESSION['admin'])) {
    $menu_item = '<li class="nav-item"><a class="nav-brand" href="admin.php">Administration du blog</a></li><li class="nav-item"><a class="nav-link" href="article.php">Voir les articles</a></li><li class="nav-item"><a class="nav-link" href="add_article.php">Ajouter un article</a></li>';
} elseif (isset($_SESSION['user'])) {
    $menu_item = '<li class="nav-item"><a class="nav-link" href="add_article.php">Ajouter un article</a></li><li class="nav-item"><a class="nav-link" href="../controller/logout.php">Déconnexion</a></li><li class="nav-item"><a class="nav-link" href="article.php">Voir les articles</a></li>';
} else {
    $menu_item = '<li class="nav-item"><a class="nav-link" href="connection.php">About us</a></li><li class="nav-item"><a class="nav-link" href="connection.php">Connexion</a></li><li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>';
}

// Définir l'en-tête de la réponse comme étant du type JSON
header('Content-Type: application/json');

// Renvoyer le contenu du menu au format JSON
echo json_encode(array('menu_item' => $menu_item));
?>


