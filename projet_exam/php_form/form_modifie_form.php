<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une formation</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Formation</legend>
            <form action="" method="post">
                <?php
                    require("../config.php");
                    $connexion = connect_db();

                    if (!isset($_GET['id_formation'])) {
                        die("Aucun ID fourni !");
                    }
                
                    // $id = mysqli_real_escape_string($connexion, $_GET['id_formation']);
                    $id = $_GET['id_formation'];
                    
                    $requete = "SELECT * FROM formation WHERE id_formation = '" . $id . "'";
                    $resultat = mysqli_query($connexion, $requete);
                    if($champs = mysqli_fetch_array($resultat)) {
                ?>
                <div>
                    <label for="">ID Formation</label><br>
                    <input typr="text" required id="id_form" name="id_form" value=<?php echo $champs['id_formation'];?>>
                </div>
                <div>
                    <label for="">Libelle Formation</label><br>
                    <input typr="text" required id="lib_form" name="lib_form" value=<?php echo $champs['libelle_formation'];?>>
                </div>
                <div><input type="submit" name="Modifier" value="Modifier"></div>
                <?php
                    if($_POST && isset($_POST["Modifier"])) {

                        $id = addslashes($_POST['id_form']);
                        $libelle = addslashes($_POST['lib_form']);

                        $id = mysqli_real_escape_string($connexion, $id);
                        $libelle = mysqli_real_escape_string($connexion, $libelle);
                        $sqlUpdate = 
                            "UPDATE formation
                            SET id_formation = '" . $id . "',
                                libelle_formation = '" . $libelle . "'
                            WHERE id_formation = '" . $id . "'";
                        $modif = mysqli_query($connexion, $sqlUpdate);
            
                        // Rediriger vers la page d'accueil
                        header("Location: ../part_admin.php");
                        die(); // Arrêter le script après la redirection
                    }
                } else {
                    echo "Aucun enregistrement trouvé pour cet ID.";
                }
                ?>
            </form>
        </fieldset>
    </section>
</body>
</html>