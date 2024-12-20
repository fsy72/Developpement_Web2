<?php
    require("config.php");
    $connexion = connect_db();

    // Récupérer les données envoyées par le formulaire
    $mdp = addslashes($_POST['password']);
    $mail = addslashes($_POST['username']);

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

    $requete_a = 
        "SELECT r.libelle_role 
        FROM user u, role r
        WHERE u.email = '$mail' 
        AND u.password = '$mdp' 
        AND u.id_role = r.id_role";
    $resultat_a = mysqli_query($connexion, $requete_a);

    if (!$resultat_a) {
        die("Erreur dans la requête : " . mysqli_error($connexion));
    }

    if ($etudiant = mysqli_fetch_assoc($resultat)) {
        $name = $etudiant['name'];
        if ($etudiant_a = mysqli_fetch_assoc($resultat_a)) {
            if($etudiant_a['libelle_role']=="Administrateur")
                header("Location: part_admin.php?name= $name");
            else
                header("Location: portail.php?name= $name"); 
        }
        
    }
    else {
        header("Location: ./php_form/form_connection.php?username=" . urlencode($mail)); 
    }

    // Fermer la connexion
    mysqli_close($connexion);
    
?>