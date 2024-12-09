<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
</head>
<body>
    <form action="ajouter.php" method="post">
        <label for="auteur">Auteur</label><br>
        <input type="text" id="auteur" name="auteur"><br><br>
        <label for="poemes">Poemes</label><br>
        <input type="text" id="poeme" name="poeme"><br><br>
        <label for="annee">Annee de Publication</label><br>
        <input type="number" id="annee" name="annee"><br><br>
        <label for="theme">Theme</label><br>
        <input type="text" id="theme" name="theme"><br><br>
        <input type="submit" value="valider" name="valider">
    </form>
</body>
</html>