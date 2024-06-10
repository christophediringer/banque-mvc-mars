<?php
require_once '../Models/Client.php';

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
}



