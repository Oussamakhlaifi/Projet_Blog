<?php
require_once "../controller/bdd.php";
// Supposons que $products soit un tableau associatif contenant les données des produits

// Conversion en JSON et envoi de la réponse
header('Content-Type: application/json');
echo json_encode($products);
?>
