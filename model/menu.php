<?php
require_once '../controller/functions.php';
// Le contrôleur gère les requêtes utilisateur
if (isset($_SESSION['admin'])  ) {
    $menu_item = '<li class="elem_menu"><a href="admin.php">administration du blog</a><a href="article.php">Voir les articles</a><a href="add_article.php.php">Ajouter un article</a></li>';
} 
elseif (isset($_SESSION['user'])  ) {
    $menu_item = '<li class="elem_menu"><a href="add_article.php">Ajouter un article</a><a href="../controller/logout.php">Déconnection</a><a href="article.php">Voir les article </a></li>';
} else {
    $menu_item = '<li class="elem_menu"><a href="connection.php">connexion</a></li>';
}

// Inclure la vue
require_once '../vue/menu.php';
?>
