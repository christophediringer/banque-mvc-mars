<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="type">Type de compte</label>
    <input type="text" name="type" id="type" placeholder="Renseigner le type du compte">

    <label for="solde">Solde</label>
    <input type="text" name="solde" id="solde" placeholder="Renseigner le solde initial">

    <label for="client">Client</label>
    
        <select name="client" id="client">
        <?php 
        foreach ($clients as $client){
            echo "<option value='". $client["ID"] ."'>";
            echo $client["Nom"] . " " .$client["Prenom"];
            echo "</option>";
        }
        ?>  
        </select>
       
        
    <input type="submit" value="Envoyer">
</form>