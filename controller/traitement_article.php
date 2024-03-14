<?php

session_start();

if(
    isset($_POST["add_article"]) &&
    $_SESSION['role']== "admin" &&
    !empty($_POST['title']) &&
    !empty($_POST['content'])
  )
  {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $id_user = $_SESSION['id_user'];
    require_once "functions.php";
    add_article($title,$content,$id_user);
  }





?>