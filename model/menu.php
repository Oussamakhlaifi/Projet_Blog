<?php
require_once '../controller/functions.php';
// Le contrôleur gère les requêtes utilisateur
if (isset($_SESSION['user'])  ) {
    $menu_item = '<li class="elem_menu"><a href="admin.php">administration du blog</a><a href="article.php">Voir les articles</a></li>';
} else {
    $menu_item = '<li class="elem_menu"><a href="connection.php">connexion</a></li>';
}

// Inclure la vue
require_once '../vue/menu.php';
?>
