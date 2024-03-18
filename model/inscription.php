<?php
session_start();
// Charger les fichiers nécessaires
include_once '../vue/menu.php';


if(
    isset($_POST['submit']) &&
    !empty($_POST['mail']) &&
    !empty($_POST['pass'])
)
{
 require_once "../controller/functions.php";
 $mail =  htmlspecialchars($_POST['mail']);
 $pass =  htmlspecialchars($_POST['pass']);
 signup($mail,$pass);
 header("connection.php");
}
else{
   header("location: inscription.php"); 

}
require_once '../vue/inscrit.php';
// Récupérer l'action demandée à partir de l'URL

