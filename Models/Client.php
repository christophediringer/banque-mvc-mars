<?php

require_once 'Models/BDD.php';


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