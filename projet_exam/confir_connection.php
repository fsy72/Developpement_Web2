<?php
    require("config.php");
    $connexion = connect_db();

    // Récupérer les données envoyées par le formulaire
    $mdp = $_POST['password'] ?? '';
    $mail = $_POST['username'] ?? '';

    // Vérification des entrées
    if (empty($mdp) || empty($mail)) {
        die("Veuillez fournir un email et un mot de passe.");
    }

    // Validation de l'email
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        die("Format de l'email invalide !");
    }

    // Échapper les données utilisateur pour éviter les injections SQL
    $mdp = mysqli_real_escape_string($connexion, $mdp);
    $mail = mysqli_real_escape_string($connexion, $mail);

    // Requête SQL
    $requete = "SELECT * FROM user WHERE email = '$mail' AND password = '$mdp'";
    $resultat = mysqli_query($connexion, $requete);

    // Vérification des résultats
    if (!$resultat) {
        die("Erreur dans la requête : " . mysqli_error($connexion));
    }

    if ($etudiant = mysqli_fetch_assoc($resultat)) {
        $name = $etudiant['name'];
        header("Location: teste_link.php?name= $name");
    }
    else {
        header("Location: ./html/form_connection.html?username=" . urlencode($mail)); 
    }

    // Fermer la connexion
    mysqli_close($connexion);
    
?>