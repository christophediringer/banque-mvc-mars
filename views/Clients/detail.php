<h5>Nom : <?php echo $client['Nom'] ?></h5>
<h5>Prenom : <?php echo $client['Prenom'] ?></h5>
<h5>Mail : <?php echo $client['Mail'] ?></h5>
<h5>Téléphone : <?php echo $client['Tel'] ?></h5>



<h4>Comptes</h4>

<table>
        <thead>
        <th>ID</th>
        <th>Numéro de compte</th>
        <th>Solde</th>
        </thead>
   
 <tbody>
    <?php
    foreach ($comptes as $compte){
        echo '<tr>';
        echo '<td>'. $compte['ID'].'</td>';
        echo '<td>'. $compte['NumeroCompte'].'</td>';
        echo '<td>' .$compte['SOLDE'].'</td>';
        echo '</tr>';
               
    }
    ?>
 </tbody>
    
</table>