<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="../css/style_admin_form.css">
</head>
<body>
    <section>
        <fieldset>
            <legend>Formulaire Ajout Etudiant</legend>
            <?php
                require("../config.php");
                $connexion = connect_db();

                if (!isset($_GET['id_etudiant'])) {
                    die("Aucun ID fourni !");
                }
            
                $id = $_GET['id_etudiant']; // Sécuriser l'ID
                
                // Effectuer la suppression
                $requete = 
                    "SELECT *
                    FROM etudiant e, user u, inscription i
                    WHERE e.id_user = u.id_user
                    AND e.id_etudiant = i.id_etudiant
                    AND e.id_etudiant = '" . $id . "'";

                $resultat = mysqli_query($connexion,$requete);
                $etu = mysqli_fetch_assoc($resultat);
                
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">Code Etudiant</label><br>                        
                    <input required type="text" id="code_etu" name="code_etu" value=<?php echo  $etu['code_etudiant'];?>>
                </div>
                <div>
                    <label for="">Prenom</label><br>                        
                    <input required type="text" id="prenom_etu" name="prenom_etu" value=<?php echo  $etu['prenom'];?>>
                </div>
                <div>
                    <label for="">Nom</label><br>                        
                    <input required type="text" id="nom_etu" name="nom_etu"value=<?php echo  $etu['nom'];?>>
                </div>
                <div>
                    <label for="">Email</label><br>                        
                    <input required type="text" id="email_etu" name="email_etu" placeholder=" Ex: xxx.xxx@ugb.edu.sn" value=<?php echo  $etu['email'];?>>
                </div>
                <div>
                    <label for="">Mot de passe</label><br>                        
                    <input required type="text" id="mdp_etu" name="mdp_etu" placeholder=" ***************" value=<?php echo  $etu['password'];?>>
                </div>
                <div>
                    <label for="">Date de naissance</label><br>                        
                    <input required type="date" id="date_etu" name="date_etu" value=<?php echo  $etu['date_naissance'];?>>
                </div>
                <div>
                    <label for="">Numéro de téléphone</label><br>                        
                    <input required type="number" id="num_etu" name="num_etu" min=700000000 max=799999999 value=<?php echo  $etu['telephone'];?>>
                </div>
                <div>
                    <label for="">Adresse</label><br>                        
                    <input required type="text" id="adr_etu" name="adr_etu"value=<?php echo  $etu['adresse'];?>>
                </div>
                <div>
                    <label for="">ID Inscription</label><br>                        
                    <input required type="text" id="id_ins_etu" name="id_ins_etu"value=<?php echo  $etu['id_inscription'];?>>
                </div>
                <div>
                    <label for="">ID Formation</label><br>    
                    <select name="id_form_etu" id="id_form_etu">
                        <?php
                            $requete_form = "SELECT * FROM formation";
                            $resultat_form = mysqli_query($connexion, $requete_form);
                            while ($champs = mysqli_fetch_array($resultat_form)) {
                        ?>
                        <option value="<?php echo $champs['id_formation'];?>"><?php echo $champs['libelle_formation'];?></option>
                        <?php }?>
                    </select>                    
                    <!-- <input required type="text" id="id_form_etu" name="id_form_etu"> -->
                </div>
                <div>
                    <label for="">ID annee academique</label><br> 
                    <select name="anne_ins_etu" id="anne_ins_etu">
                        <?php
                            $requete_an = "SELECT * FROM anneeacademique";
                            $resultat_an = mysqli_query($connexion, $requete_an);
                            while ($champs = mysqli_fetch_array($resultat_an)) {
                        ?>
                        <option value="<?php echo $champs['id_annee'];?>"><?php echo $champs['libelle_annee'];?></option>
                        <?php }?>
                    </select>                       
                    <!-- <input required type="text" id="anne_ins_etu" name="anne_ins_etu"> -->
                </div>
                <div>
                    <label for="">Date inscriptionion</label><br>                
                    <input required type="date" id="date_ins_etu" name="date_ins_etu" value=<?php echo  $etu['date_inscription'];?>>
                </div>
                <div><input type="submit" value="Modifier" name="Modifier"></div>
                <?php
                if($_POST && isset($_POST["Modifier"])) {

                    $code_etu = addslashes($_POST['code_etu']);
                    $prenom_etu = addslashes($_POST['prenom_etu']);
                    $nom_etu = addslashes($_POST['nom_etu']);
                    $email_etu = addslashes($_POST['email_etu']);
                    $mdp_etu = addslashes($_POST['mdp_etu']);
                    $date_etu = addslashes($_POST['date_etu']);
                    $num_etu = addslashes($_POST['num_etu']);
                    $adr_etu = addslashes($_POST['adr_etu']);
                    $id_ins_etu = addslashes($_POST['id_ins_etu']);
                    // $id_niv_etu = addslashes($_POST['id_niv_etu']);
                    $id_form_etu = addslashes($_POST['id_form_etu']);
                    $anne_ins_etu = addslashes($_POST['anne_ins_etu']);
                    $date_ins_etu = addslashes($_POST['date_ins_etu']);

                    $requete_user = 
                        "UPDATE user 
                        SET email = '" . $email_etu . "', 
                            name = '" . $prenom_etu . ' ' . $nom_etu . "', 
                            password = '" . $mdp_etu . "'
                        WHERE id_user = '" . $etu['id_user'] . "'";
                    
                    $resultat_user = mysqli_query($connexion,$requete_user);

                    $requete_etu = 
                        "UPDATE etudiant 
                        SET code_etudiant = '" . $code_etu . "', 
                            prenom = '" . $prenom_etu . "', 
                            nom = '" . $nom_etu . "', 
                            date_naissance = '" . $date_etu . "', 
                            telephone = '" . $num_etu . "', 
                            adresse = '" . $adr_etu . "'
                        WHERE id_etudiant = '" . $etu['id_etudiant'] . "'";
                    
                    $resultat_etu = mysqli_query($connexion,$requete_etu);

                    $requete_ins = 
                    "UPDATE inscription 
                    SET id_formation = '" . $id_form_etu . "', 
                        id_annee = '" . $anne_ins_etu . "', 
                        date_inscription = '" . $date_ins_etu . "'
                    WHERE id_inscription = '" . $id_ins_etu . "'";

                    $resultat_ins = mysqli_query($connexion,$requete_ins);

                    if ($resultat_etu && $resultat_ins && $resultat_user) {
                        ?><script>
                            window.location.href = '../part_admin.php';
                        </script>
                        <?php exit();
                    } else {
                        ?><script>
                            alert('echec suppression.');    
                            window.location.href = '../part_admin.php';
                        </script>
                        <?php
                        die("Erreur dans la requête : " . mysqli_error($connexion));
                    }
                }
                ?>
            </form>
        </fieldset>
    </section>
</body>
</html>