<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <form action="../model/connection.php" method="POST">
      <div>
        <label for="mail">mail</label>
        <input type="mail" name="mail">
      </div>
      <div>
        <label for="pass">mot de passe</label>
        <input type="text" name="pass">
      </div>
      <button name="submit" type="submit">envoyer</button>
    </form>
</body>
</html>