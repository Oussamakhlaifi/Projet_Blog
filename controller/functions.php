<?php 

function get_PDO():PDO{
    $host = '127.0.0.1';
    $db   = 'blog';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    // Set PDO options
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    ];

    try {
        // Create a PDO instance (connect to the database)
    return $pdo = new PDO($dsn, $user, $pass, $options);
    
    } catch (\PDOException $e) {
       // throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

}

function signup($mail,$pass){
 $pdo = get_pdo();
 $user_exist = check_user_not_exist($mail);
 if($user_exist){
    $query = "INSERT INTO `users`(`mail`, `pass`) VALUES (?, ?)";
    $statement = $pdo->prepare($query);
    $pass = password_hash($pass, PASSWORD_DEFAULT);
   $resultat =  $statement->execute([$mail,$pass]);
 }



}
function signin($mail,$pass){
    
    $pdo = get_pdo();
    $user_exist = check_user_not_exist($mail);
    if(!$user_exist){
        
        $query = "SELECT * from users WHERE mail = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$mail]);
        
       $user = $statement->fetch();
       
       if(password_verify($pass, $user['pass'])){
        $_SESSION['user'] = $user['mail'];
         if($user['role'] == 1){
            $_SESSION['role'] = "admin";
            $_SESSION['id_user'] = $user['id'];
         }
         else if($user['role'] == 2){
            $_SESSION['role']="editor";
         }
        header("Location: admin.php");
       }else{
         header("Location: connection.php");
       }
    }
   
   
   
   }

function check_user_not_exist($mail){
    $pdo = get_pdo();
    $query = "SELECT COUNT(*) FROM `users` WHERE `mail` = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$mail]);
    $nombreUtilisateurs = $statement->fetchColumn();
    if ($nombreUtilisateurs > 0) {
        // L'utilisateur existe
        return false;
    } else {
        // L'utilisateur n'existe pas
        return true;
    }
}

function user_is_not_connected(){
 if(!isset( $_SESSION['user'])){
    header("Location: connection.php");
 }
}

function add_article($title, $content, $id_user) {
    // Obtenez une connexion PDO
    $pdo = get_PDO();

    // Préparez la requête SQL avec des paramètres de substitution pour éviter les injections SQL
    $query = "INSERT INTO article (title, content, iduser) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($query);

    // Exécutez la requête avec les valeurs fournies
    $resultat = $statement->execute([$title, $content, $id_user]);

    // Vérifiez si l'insertion a réussi et renvoyez un booléen indiquant le résultat
    return $resultat;
}

function get_article(){
    $pdo = get_PDO();
    $query = " SELECT * FROM article" ; 
    $statement = $pdo->prepare($query);
    $resultat = $statement->execute();
    $articles = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $resultat ;

}