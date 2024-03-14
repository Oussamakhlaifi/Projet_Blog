<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <div>
        <nav>
            <ul class="menu">
                <li class="elem_menu">
                    <a href="index.php">blog</a>
                </li>
                <?php require_once "../model/menu.php"?>
                <?php echo $menu_item; ?>
            </ul>
        </nav>
    </div>
</body>
</html>