<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une information</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Information</legend>
            <form action="../ajout_info.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="titre">Titre</label><br>
                    <textarea required id="titre" name="titre"></textarea>
                </div>
                <div>
                    <label for="contenu">Contenu</label><br>
                    <textarea required id="contenu" name="contenu"></textarea>
                </div>
                <div>
                    <label for="image">Image</label><br>
                    <input type="file" name="image_file" id="images" accept="image/*" required>
                </div>
                <div><input type="submit" value="Envoie"></div>
            </form>
        </fieldset>
    </section>
</body>
</html>