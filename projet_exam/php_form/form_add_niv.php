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
            <form action="../php_ajout/ajout_niv.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">ID Niveau</label><br>
                    <input typr="text" required id="id_niv" name="id_niv">
                </div>
                <div>
                    <label for="">Libelle Niveau</label><br>
                    <input typr="text" required id="lib_niv" name="lib_niv">
                </div>
                <div><input type="submit" value="Envoie"></div>
            </form>
        </fieldset>
    </section>
</body>
</html>