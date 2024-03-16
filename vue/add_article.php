<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
</head>
<body>
    <h1>Bienvenue sur la creation d'article</h1>
    <?php
      require_once "../model/menu.php";
      require_once "../controller/functions.php";
     user_is_not_connected() 
    
     ?>
    <form action="../model/add_article.php" method="post">
        <div>
            <label for="title">titre de l'article</label>
            <input type="text" name="title", id="title">
        </div>
        <div>
            <label for="content">Contenu de l'article</label>
            <textarea name="content" id="content">
                
            </textarea>
        </div>
        <button name="add_article">Envoyer</button>
    
</body>
</html>