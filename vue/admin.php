<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrer le blog</title>
</head>
<body>
    <h1>Bienvenue sur admin</h1>
    <?php
      require_once "menu.php";
      require_once "functions.php";
     user_is_not_connected() 
    
     ?>
</body>
</html>