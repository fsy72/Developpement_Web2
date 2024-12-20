<?php
    require("../config.php");
    $connexion = connect_db();

    // Récupérer les données envoyées par le formulaire
    $id = $_POST['id_form'];
    $libelle = $_POST['lib_form'];

    // Vérification des entrées
    if (empty($id) || empty($libelle)) {
        die("Veuillez fournir un id et un contenu.");
    }

    // Échapper les données utilisateur pour éviter les injections SQL
    $id = mysqli_real_escape_string($connexion, $id);
    $libelle = mysqli_real_escape_string($connexion, $libelle);

    // Requête SQL
    $requete = "INSERT INTO formation (id_formation, libelle_formation) VALUES ('$id', '$libelle')";
    $resultat = mysqli_query($connexion, $requete);

    if ($resultat) {
        header("Location: ../part_admin.php?message=ok");
    } else {
        die("Erreur dans la requête : " . mysqli_error($connexion));
    }

    // Fermer la connexion
    mysqli_close($connexion);
?>