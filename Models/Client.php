<?php

require_once 'BDD.php';


function fetchClients() {
    // CR2E UN INSTANCE DE BDD
        $bdd = new BDD();
        // Appelle notre fonction connect crée dans model/bdd.php
        $conn = $bdd->connect();
        // Grace A PDD on peut preparer 
        $request = $conn->prepare('SELECT ID, Nom, Prenom, Mail, Tel FROM clients;'); 
        $request->execute();
        return $request->fetchAll(PDO::FETCH_ASSOC);
};

function insertClient($nom,$prenom, $mail, $telephone){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO clients (Nom, Prenom, Mail, Tel) VALUE (?,?,?,?);');
    $request->execute([$nom,$prenom, $mail, $telephone]);
}

function getClientByID($id){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT ID, Nom, Prenom, Mail, Tel FROM clients WHERE ID = ?');
    $request->execute ([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}
