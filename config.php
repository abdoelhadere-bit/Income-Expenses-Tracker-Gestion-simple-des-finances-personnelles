<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=smart_wallet;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie";
}catch(PDOexception $e){
    die("Erreur lors de la connexion : " .$e->message());
}
?>