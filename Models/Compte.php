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