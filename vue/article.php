<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <p><?php echo $article['id']; ?></p>
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['content']; ?></p>
                <form action="../model/article.php" method="POST">
                    <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
                    <button name="delete" type="submit">Supprimer</button>
                </form>
                <form action="../model/update.php" method="GET">
                    <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
                    <button name="update" type="submit">Modifier</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
