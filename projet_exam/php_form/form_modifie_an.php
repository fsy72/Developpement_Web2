<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une annee académique</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Information</legend>
            <form action="" method="post">
                <?php
                    require("../config.php");
                    $connexion = connect_db();

                    if (!isset($_GET['id_annee'])) {
                        die("Aucun ID fourni !");
                    }
                
                    // $id = mysqli_real_escape_string($connexion, $_GET['id_annee']);
                    $id = $_GET['id_annee'];
                    
                    $requete = "SELECT * FROM anneeacademique WHERE id_annee = '" . $id . "'";
                    $resultat = mysqli_query($connexion, $requete);
                    if($champs = mysqli_fetch_array($resultat)) {
                ?>
                <div>
                    <label for="">ID Annee annee academique</label><br>
                    <input type="text" required id="id_an" name="id_an" value=<?php echo $champs['id_annee'];?>>
                </div>
                <div>
                    <label for="">Libelle annee</label><br>
                    <input typr="text" required id="lib_an" name="lib_an" value=<?php echo $champs['libelle_annee'];?>>
                </div>
                <div><input type="submit" value="Modifier" name="Modifier"></div>
                <?php
                    if($_POST && isset($_POST["Modifier"])) {

                        $id = addslashes($_POST['id_an']);
                        $libelle = addslashes($_POST['lib_an']);

                        $id = mysqli_real_escape_string($connexion, $id);
                        $libelle = mysqli_real_escape_string($connexion, $libelle);
                        $sqlUpdate = 
                            "UPDATE anneeacademique
                            SET id_annee = '" . $id . "',
                                libelle_annee = '" . $libelle . "'
                            WHERE id_annee = '" . $id . "'";
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