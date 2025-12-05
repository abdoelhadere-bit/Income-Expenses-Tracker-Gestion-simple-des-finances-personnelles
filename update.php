<?php 
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $montant = trim($_POST['montant']);
    $description = trim($_POST['description']);
    $date = trim($_POST['date']);
    $source = $_POST['source'];
    
    // if(empty($id) || empty($montant) || empty($description) || empty($date)){
    //     die("Erreur: Tous les champs sont requis!");
    // }
    
    try{
        if($source === 'incomes'){
            $id = $_POST['incomeId'];
            $sql = $pdo->prepare("UPDATE incomes SET montant = ?, dates = ?, decription = ? WHERE id = ?");
            $sql->execute([$montant, $date, $description, $id]);
            
            header('Location: incomes.php');
            exit;
        }elseif($source === 'expenses'){
            $id = $_POST['expensesId'];
            $sql = $pdo->prepare("UPDATE expenses SET montant = ?, dates = ?, decription = ? WHERE id = ?");
            $sql->execute([$montant, $date, $description, $id]);
            
            header('Location: expenses.php');
            exit;
        }

    }catch(PDOException $e){
        die("Erreur lors de la mise à jour : " . $e->getMessage());
    }
} else {
    if($source === 'expenses') header('Location: expenses.php');
    if($source === 'incomes') header('Location: index.php');
    exit;
}
?>