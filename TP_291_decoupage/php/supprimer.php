<?php
    require("../config.php");
    $connexion = connect_db();

    if (!isset($_GET['id'])) {
        die("Aucun ID fourni !");
    }

    $id = intval($_GET['id']); // Sécuriser l'ID

    // Récupérer les données actuelles associées à l'ID
    $requete = "DELETE FROM poèsie WHERE id = $id";
    $resultat = mysqli_query($connexion, $requete);
    
    // Rediriger vers la page d'accueil
    header("Location: index.php");
?>