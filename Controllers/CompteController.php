<?php
require_once '../Models/Compte.php';

if (!isset($_GET['action'])) {
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
} else {
    if ($_GET['action'] == "create") {
        include "../Views/comptes/create.php";
    }
    if ($_GET['action'] == 'insert') {
        var_dump($_POST);
        
        $type = $_POST['type'];
        $solde = $_POST['solde'];
        $titulaire = $_POST['titulaire'];
        insertCompte($type, $solde, $titulaire);
        header('Location: CompteController.php');  
    }
}



//