<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une annee académique</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Information</legend>
            <form action="../php_ajout/ajout_an.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">ID Annee annee academique</label><br>
                    <input typr="text" required id="id_an" name="id_an">
                </div>
                <div>
                    <label for="">Libelle annee</label><br>
                    <input typr="text" required id="lib_an" name="lib_an">
                </div>
                <div><input type="submit" value="Envoie"></div>
            </form>
        </fieldset>
    </section>
</body>
</html>