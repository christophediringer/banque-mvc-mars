<button onclick="redirectToCreateCompte()">Ajouter un compte</button>
<!-- // faire l'affichage sous la forme de tableau par exemple ou de liste à puce -->

<!-- // utilisation d'un Foreach -->
<table>
    <thead>
        <th>ID</th>
        <th>Numero Compte</th>
        <th>Solde</th>
        <th>numero client</th>
        <th>Actions</th>
        
    </thead>
    <tbody>
        <?php
            foreach ($comptes as $compte) {
                echo "<tr>";
                    echo "<td>". $compte["ID"] ."</td>";
                    echo "<td>". $compte["NumeroCompte"] ."</td>";
                    echo "<td>". $compte["Solde"] ."</td>";
                    echo "<td>". $compte["FK_client"] ."</td>";
                    echo "<td> <button onclick='redirectToDetailsCompte(". $compte['ID'].")'> Voir Compte </button></td>";
                    
                echo "</tr>";
            }


?>


</tbody>
</table>

<script tye="text/javascript">
    function redirectToCreateCompte(){
        window.location.replace("../Controllers/CompteController.php?action=create");
    }
    function redirectToDetailsCompte(id){
        window.location.replace("../Controllers/CompteController.php?action=details&id=" + id)
    }
    </script>