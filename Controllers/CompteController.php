<?php
require_once '../Models/Compte.php';
require_once '../Models/Client.php';

if (!isset($_GET['action'])) {
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';
} else {
    if ($_GET['action'] == "create") {
        $clients = fetchClients();
        include "../Views/comptes/create.php";
    }
    if ($_GET['action'] == 'insert') {
        
        var_dump($_POST);
        
        $type = $_POST['type'];
        $solde = $_POST['solde'];
        $titulaire = $_POST['client'];
        insertCompte($type, $solde, $titulaire);
        header('Location: CompteController.php');  
    }
    if ($_GET['action'] == 'details') {
        $id = $_GET['id'];       
        $comptes = getCompteByID($id);
        include '../Views/comptes/detail.php';
    }
}



//