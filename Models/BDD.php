<?php

class BDD {

    function connect(){
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=banquemars', 'root', '');
            
            return $pdo;
        } catch (\PDOExeption $e) {
            echo 'une erreur est survenue ' .$e->getmessage();
        }
        
    }
}