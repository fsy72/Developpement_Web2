<?php
    require("config.php");
    $connexion = connect_db();

    // Récupérer les données envoyées par le formulaire
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    // Vérification des entrées
    if (empty($titre) || empty($contenu)) {
        die("Veuillez fournir un titre et un contenu.");
    }

    // Traitement de l'image
    if(isset($_FILES["image_file"]) && $_FILES["image_file"]["error"] == 0) {
        $file_basename = pathinfo($_FILES["image_file"]["name"], PATHINFO_FILENAME);
        $file_extension = pathinfo($_FILES["image_file"]["name"], PATHINFO_EXTENSION);
        $new_image_name = $file_basename . '_' . date("Ymd_His") . '.' . $file_extension;
        
        $target_directory = "img_info/";
        $target_path = $target_directory . $new_image_name;
        
        if (!move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_path)) {
            die("Erreur lors du téléchargement de l'image.");
        }
        // else {
        //     die($file_basename);
        // }
    } else {
        $new_image_name = null; // Pas d'image téléchargée
        die($titre);
    }

    // Échapper les données utilisateur pour éviter les injections SQL
    $titre = mysqli_real_escape_string($connexion, $titre);
    $contenu = mysqli_real_escape_string($connexion, $contenu);
    $new_image_name = mysqli_real_escape_string($connexion, $new_image_name);

    // Requête SQL
    $requete = "INSERT INTO information (titre, contenu, image) VALUES ('$titre', '$contenu', '$new_image_name')";
    $resultat = mysqli_query($connexion, $requete);

    if ($resultat) {
        header("Location: ../part_admin.php?message=ok");
    } else {
        die("Erreur dans la requête : " . mysqli_error($connexion));
    }

    // Fermer la connexion
    mysqli_close($connexion);
?>