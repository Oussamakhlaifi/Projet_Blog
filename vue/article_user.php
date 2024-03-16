<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des Articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <p><?php echo $article['id']; ?></p>
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['content']; ?></p>
                <?php endforeach; ?>
    </ul>
</body>
</html>