
<?php
session_start();
echo "traitement d'inscription";
if(
    isset($_POST['submit']) &&
    !empty($_POST['mail']) &&
    !empty($_POST['pass'])
)
{
 require_once "functions.php";
 $mail =  htmlspecialchars($_POST['mail']);
 $pass =  htmlspecialchars($_POST['pass']);
 signin($mail,$pass);
}
else{
   header("location: inscription.php"); 

}
?>