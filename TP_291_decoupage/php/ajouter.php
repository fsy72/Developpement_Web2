<?php
    if($_POST && isset($_POST["valider"])) {
        require("../config.php");
        $connexion = connect_db();

        $auteur = addslashes($_POST['auteur']);
        $poeme = addslashes($_POST['poeme']);
        $annee = addslashes($_POST['annee']);
        $theme = addslashes($_POST['theme']);

        $sql = "INSERT INTO poèsie (Auteur, poèmes, annee_publication, theme) VALUES ('$auteur', '$poeme', $annee, '$theme')";
        $resultat = mysqli_query($connexion, $sql);

        header("Location: index.php");
    }
?>