<?php 

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
 header("traitement_connection.php");
}
else{
   header("location: inscription.php"); 

}

