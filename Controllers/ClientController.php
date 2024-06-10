<?php
require_once '../Models/Client.php';
require_once '../Models/Compte.php';

if(!isset($_GET['action'])){
    $clients = fetchClients();
    include '../views/Clients/index.php';
}else{
    if ($_GET['action'] == "create") {
        include "../views/Clients/create.php";
    }
    if ($_GET['action'] == 'insert') {
        var_dump($_POST);
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $tel =$_POST['telephone'];
        insertClient($nom, $prenom,$mail,$tel);
        header('Location: ClientController.php');
    }
    if ($_GET['action'] == 'details') {
        $id = $_GET['id'];
        $client = getClientByID($id);
        $comptes = getComptesByclient($id);
        include '../Views/Clients/detail.php';
    }
    if ($_GET['action'] == 'details') {
        $id = $_GET['id'];
        $comptes = getCompteByID($id);
        var_dump($comptes);
        include '../Views/Clients/detail.php';
    }

}



