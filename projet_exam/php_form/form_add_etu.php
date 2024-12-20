<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Information</legend>
            <form action="../php_ajout/ajout_info.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">ID Etudiant</label><br>                        
                    <input required type="text" id="id_etu" name="id_etu">
                </div>
                <div>
                    <label for="">Code Etudiant</label><br>                        
                    <input required type="text" id="code_etu" name="code_etu">
                </div>
                <div>
                    <label for="">Prenom</label><br>                        
                    <input required type="text" id="prenom_etu" name="prenom_etu">
                </div>
                <div>
                    <label for="">Nom</label><br>                        
                    <input required type="text" id="nom_etu" name="nom_etu">
                </div>
                <div>
                    <label for="">Email</label><br>                        
                    <input required type="text" id="email_etu" name="email_etu" placeholder=" Ex: xxx.xxx@ugb.edu.sn">
                </div>
                <div>
                    <label for="">Mot de passe</label><br>                        
                    <input required type="password" id="mdp_etu" name="mdp_etu" placeholder=" ***************">
                </div>
                <div>
                    <label for="">Date de naissance</label><br>                        
                    <input required type="date" id="date_etu" name="date_etu">
                </div>
                <div>
                    <label for="">Numéro de téléphone</label><br>                        
                    <input required type="number" id="num_etu" name="num_etu" min=700000000 max=799999999>
                </div>
                <div>
                    <label for="">Adresse</label><br>                        
                    <input required type="text" id="adr_etu" name="adr_etu">
                </div>
                <div>
                    <label for="">User</label><br>                        
                    <input required type="text" id="user_etu" name="user_etu">
                </div>
                <div><input type="submit" value="Envoie"></div>
            </form>
        </fieldset>
    </section>
</body>
</html>