<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une niveau</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Niveau</legend>
            <form action="" method="post">
                <?php
                    require("../config.php");
                    $connexion = connect_db();

                    if (!isset($_GET['id_niveau'])) {
                        die("Aucun ID fourni !");
                    }
                
                    // $id = mysqli_real_escape_string($connexion, $_GET['id_niveau']);
                    $id = $_GET['id_niveau'];
                    
                    $requete = "SELECT * FROM niveau WHERE id_niveau = '" . $id . "'";
                    $resultat = mysqli_query($connexion, $requete);
                    if($champs = mysqli_fetch_array($resultat)) {
                ?>
                <div>
                    <label for="">ID Niveau</label><br>
                    <input typr="text" required id="id_niv" name="id_niv" value=<?php echo $champs['id_niveau'];?>>
                </div>
                <div>
                    <label for="">Libelle Niveau</label><br>
                    <input typr="text" required id="lib_niv" name="lib_niv" value=<?php echo $champs['libelle_niveau'];?>>
                </div>
                <div><input type="submit" value="Modifier" name="Modifier"></div>
                <?php
                    if($_POST && isset($_POST["Modifier"])) {

                        $id = addslashes($_POST['id_niv']);
                        $libelle = addslashes($_POST['lib_niv']);

                        $id = mysqli_real_escape_string($connexion, $id);
                        $libelle = mysqli_real_escape_string($connexion, $libelle);
                        $sqlUpdate = 
                            "UPDATE niveau
                            SET id_niveau = '" . $id . "',
                                libelle_niveau = '" . $libelle . "'
                            WHERE id_niveau = '" . $id . "'";
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