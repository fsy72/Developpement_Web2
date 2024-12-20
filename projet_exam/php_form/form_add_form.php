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
            <form action="../php_ajout/ajout_form.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">ID Formation</label><br>
                    <input typr="text" required id="id_form" name="id_form">
                </div>
                <div>
                    <label for="">Libelle Formation</label><br>
                    <input typr="text" required id="lib_form" name="lib_form">
                </div>
                <div><input type="submit" value="Envoie"></div>
            </form>
        </fieldset>
    </section>
</body>
</html>