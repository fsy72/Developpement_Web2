<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une information</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Modifier Information</legend>
            <form action="" method="post" enctype="multipart/form-data">
                <?php
                    require("../config.php");
                    $connexion = connect_db();

                    if (!isset($_GET['id_information'])) {
                        die("Aucun ID fourni !");
                    }
                
                    $id = intval($_GET['id_information']);
                    
                    $requete = "SELECT * FROM information WHERE id_information=$id;";
                    $resultat = mysqli_query($connexion, $requete);
                    if($champs = mysqli_fetch_array($resultat)) {
                ?>
                <div>
                    <label for="titre">Titre</label><br>
                    <textarea required id="titre" name="titre"><?php echo $champs['titre']?></textarea>
                </div>
                <div>
                    <label for="contenu">Contenu</label><br>
                    <textarea required id="contenu" name="contenu"><?php echo $champs['contenu']?></textarea>
                </div>
                <div>
                    <label for="image">Image</label><br>
                    <input type="file" name="image_file" id="images" accept="image/*" required>
                </div>
                <div><input type="submit" value="Modifier" name="Modifier"></div>
                <?php
                    }
                    if($_POST && isset($_POST["Modifier"])) {

                        $titre = addslashes($_POST['titre']);
                        $contenu = addslashes($_POST['contenu']);
            

                        if(isset($_FILES["image_file"]) && $_FILES["image_file"]["error"] == 0) {
                            $file_basename = pathinfo($_FILES["image_file"]["name"], PATHINFO_FILENAME);
                            $file_extension = pathinfo($_FILES["image_file"]["name"], PATHINFO_EXTENSION);
                            $new_image_name = $file_basename . '_' . date("Ymd_His") . '.' . $file_extension;
                            
                            $target_directory = "../img_info/";
                            $target_path = $target_directory . $new_image_name;
                            
                            if (!move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_path)) {
                                die("Erreur lors du téléchargement de l'image.");
                            }
                        } else {
                            $new_image_name = null; // Pas d'image téléchargée
                            die($titre);
                        }
                        $titre = mysqli_real_escape_string($connexion, $titre);
                        $contenu = mysqli_real_escape_string($connexion, $contenu);
                        $new_image_name = mysqli_real_escape_string($connexion, $new_image_name);
                        $sqlUpdate = 
                            "UPDATE information
                            SET titre = '" . $titre . "',
                                contenu = '" . $contenu . "',
                                image = '" . $new_image_name . "'
                            WHERE id_information = " . $id;
                        $modif = mysqli_query($connexion, $sqlUpdate);
            
                        // Rediriger vers la page d'accueil
                        header("Location: ../part_admin.php");
                        die(); // Arrêter le script après la redirection
                    }
                ?>
            </form>
        </fieldset>
    </section>
</body>
</html>