<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="type">Type de compte</label>
    <input type="text" name="type" id="type" placeholder="Renseigner le type du compte">

    <label for="solde">Solde</label>
    <input type="text" name="solde" id="solde" placeholder="Renseigner le solde initial">

    <label for="titulaire">Titulaire</label>
    <input type="text" name="titulaire" id="titulaire" placeholder="Renseigner le nom du titulaire">

    <input type="submit" value="Envoyer">
</form>