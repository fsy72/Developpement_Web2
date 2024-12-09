<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
</head>
<body>
    <?php
        require("../config.php");
        $connexion = connect_db();

        if (!isset($_GET['id'])) {
            die("Aucun ID fourni !");
        }

        $id = intval($_GET['id']); // Sécuriser l'ID

        // Récupérer les données actuelles associées à l'ID
        $requete = "SELECT * FROM poèsie WHERE id = $id";
        $resultat = mysqli_query($connexion, $requete);
        while ($poème = mysqli_fetch_array($resultat)) {
            $auteur = $poème['Auteur'];
            $poemes = $poème['poèmes'];
            $anne   = $poème['annee_publication'];
            $theme  = $poème['theme'];
            $date   = $poème['date_creation'];
        }
    ?>
    <form action="ajouter.php" method="post">
        <label for="auteur">Auteur</label><br>
        <input value=<?php echo $auteur?> type="text" id="auteur" name="auteur"><br><br>
        <label for="poemes">Poemes</label><br>
        <input value=<?php echo $poemes?> type="text" id="poeme" name="poeme"><br><br>
        <label for="annee">Annee de Publication</label><br>
        <input value=<?php echo $anne?> type="number" id="annee" name="annee"><br><br>
        <label for="theme">Theme</label><br>
        <input value=<?php echo $theme?> type="text" id="theme" name="theme"><br><br>
        <label for="theme">Annee de creation</label><br>
        <input value=<?php echo $date?> type="text" id="date" name="date"><br><br>
        <input type="submit" value="valider" name="valider">
    </form>
    <?php
        if($_POST && isset($_POST["valider"])) {
            // require("../config.php");
            // $connexion = connect_db();

            $auteurModif = addslashes($_POST['auteur']);
            $poemeModif = addslashes($_POST['poeme']);
            $anneeModif = addslashes($_POST['annee']);
            $themeModif = addslashes($_POST['theme']);
            $dateModif = addslashes($_POST['date']);

            $sqlUpdate = 
                "UPDATE poèsie
                SET Auteur = $auteurModif,
                    poèmes = $poemeModif,
                    annee_publication = $anneeModif,
                    theme = $themeModif,
                    date_creation = $dateModif
                WHERE id =$id";
            $mofif = mysqli_query($connexion, $sqlUpdate);

            // Rediriger vers la page d'accueil
            header("Location: index.php");
            die(); // Arrêter le script après la redirection
        }
    ?>
</body>
</html>