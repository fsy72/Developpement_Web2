<?php
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $sexe = $_GET['sexe'];
    if($sexe==1)
        echo "<h3>Monsieur ";
    else echo "<h3>Madame ";
    echo $prenom." ".$nom."</h3><br>";
    echo "Nous vous enverrons un dossier sous peu.<br> Merci et Cordialement.";
?>