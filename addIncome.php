<?php 
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $montant = $_POST['montant'];
        $category = $_POST['Categorie'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $source = $_POST['source'];
        try{
            if($source === 'incomes'){
                $sql = $pdo->prepare("INSERT INTO incomes (montant, `dates`, decription, category) VALUES (?, ?, ?, ?)");
                $sql->execute([$montant, $date, $description, $category]);
                header('Location: incomes.php');
                exit;
            }
            if($source === 'expenses'){
                $sql = $pdo->prepare("INSERT INTO expenses (montant, `dates`, decription, category) VALUES (?, ?, ?, ?)");
                $sql->execute([$montant, $date, $description, $category]);
                header('Location: expenses.php');
                exit;

            }
        }catch(PDOexception $e){
            die("Erreur lors de l'insertion : ".$e->getMessage());
        }
    
    
}
?>