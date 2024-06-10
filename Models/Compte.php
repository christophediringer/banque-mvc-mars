<?php

require_once 'BDD.php';

function fetchComptes() {
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT ID, NumeroCompte, Solde, FK_client FROM comptes;');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function insertCompte($type, $solde, $titulaire){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO comptes (NumeroCompte, Solde, FK_client) VALUES (?, ?, ?);');
    $request->execute([$type, $solde, $titulaire]);
}

function getComptesByclient($idClient){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare("SELECT ID, NumeroCompte, SOLDE FROM comptes WHERE FK_CLIENT= ?");
    $request->execute([$idClient]); 
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getCompteByID($id){
    $bdd = new bdd();
    $conn =$bdd->connect();
    $request = $conn->prepare("SELECT comptes.ID, NumeroCompte, SOLDE, Nom, Prenom, Mail, Tel
    FROM comptes
    INNER JOIN clients on clients.ID = FK_CLIENT
    WHERE comptes.ID = ?");
    $request->execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}
