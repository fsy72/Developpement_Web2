<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <header>
        <div>
            |||
            <?php
                $name = $_GET['name'];
                echo $name;
            ?>
        </div>
        <div class="ad">
            <div>Administration</div>
            <img src="images/logoUGB.png" alt="" srcset="">
        </div>
    </header>
    <div class="container">
        <nav class="champs">
            <div><button id="information">Information</button></div>
            <div><button id="etudiant">Etudiant</button></div>
            <div><button id="formation">Formation</button></div>
            <div><button id="niveau">Niveau</button></div>
            <div><button id="an_academique">Année académique</button></div>
        </nav>
        <section class="content">
            <?php
                require("config.php");
                $connexion = connect_db();
            ?>
            <div id="info">
                <a href="php_form/form_add_info.php">Ajouter une information</a><br>
                <div class="liste">
                    <?php 
                        $requete = "SELECT * FROM information";
                        $resultat = mysqli_query($connexion, $requete);
                        if($champs = mysqli_fetch_array($resultat)) {
                    ?>
                    <table>
                        <?php do {?>
                        <tr>
                            <td rowspan="2"><img src="img_info/<?php echo $champs['image'];?>" alt=""></td>
                            <td  class="titre"><?php echo $champs['titre'];?>
                        </tr>
                        <tr>
                            <td class="contenu">
                                <?php echo $champs['contenu'];?>
                                <div class="read_more">
                                    <a href="php_form/form_modifie_info.php?id_information= <?php echo $champs['id_information'];?>">Modifier</a>
                                    <a href="php_supp/supprimer_info.php?id_information= <?php echo $champs['id_information'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette information ?')">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                    <?php }while ($champs = mysqli_fetch_array($resultat));?>
                    </table>
                    <?php } else { ?>
                    <div>
                        <div class="pub_info">Aucune information publiée</div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div id="etu" class="tableau">
                <a href="php_form/form_add_etu.php">Ajouter une information</a><br>
                <div>
                <?php 
                        $requete = "SELECT * FROM etudiant";
                        $resultat = mysqli_query($connexion, $requete);
                        if($champs = mysqli_fetch_array($resultat)) {
                    ?>
                    <table>
                        <tr>
                            <td></td>
                            <td class="header">Code etudiant</td>
                            <td class="header">Prénom</td>
                            <td class="header">Nom</td>
                            <td class="header">Email</td>
                            <td class="header">Date de naissance</td>
                            <td class="header">Téléphone</td>
                            <td class="header">Adrresse</td>
                        </tr>
                        <?php do {?>
                        <tr>
                            <td><a href="php_form/form_modifie_etu.php?id_etudiant= <?php echo $champs['id_etudiant'];?>">Modifier</a></td>
                            <td rowspan="2"><?php echo $champs['code_etudiant'];?></td>
                            <td rowspan="2"><?php echo $champs['prenom'];?></td>
                            <td rowspan="2"><?php echo $champs['nom'];?></td>
                            <td rowspan="2"><?php echo $champs['email'];?></td>
                            <td rowspan="2"><?php echo $champs['date_naissance'];?></td>
                            <td rowspan="2"><?php echo $champs['telephone'];?></td>
                            <td rowspan="2"><?php echo $champs['adresse'];?></td>
                        </tr>
                        <tr class="separe">
                            <td><a href="php_supp/supprimer_etu.php?id_etudiant= <?php echo $champs['id_etudiant'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette information ?')">Supprimer</a></td>
                        </tr>
                    <?php }while ($champs = mysqli_fetch_array($resultat));?>
                    </table>
                    <?php } else { ?>
                    <div>
                        <div class="pub_info">Aucun étudiant inscrit</div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div id="form" class="tableau">
                <a href="php_form/form_add_form.php">Ajouter une information</a><br>
                <div>
                <?php 
                        $requete = "SELECT * FROM formation";
                        $resultat = mysqli_query($connexion, $requete);
                        if($champs = mysqli_fetch_array($resultat)) {
                    ?>
                    <table>
                        <tr>
                            <td></td>
                            <td class="header">ID formation</td>
                            <td class="header">Libelle formation</td>
                        </tr>
                        <?php do {?>
                        <tr>
                            <td><a href="php_form/form_modifie_form.php?id_formation=<?php echo $champs['id_formation'];?>">Modifier</a></td>
                            <td rowspan="2"><?php echo $champs['id_formation'];?></td>
                            <td rowspan="2"><?php echo $champs['libelle_formation'];?></td>
                        </tr>
                        <tr class="separe">
                            <td><a href="php_supp/supprimer_form.php?id_formation=<?php echo $champs['id_formation'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')">Supprimer</a></td>
                        </tr>
                    <?php }while ($champs = mysqli_fetch_array($resultat));?>
                    </table>
                    <?php } else { ?>
                    <div>
                        <div class="pub_info">Aucun étudiant inscrit</div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div id="niv" class="tableau">
                <a href="php_form/form_add_niv.php">Ajouter une information</a><br>
                <div>
                <?php 
                        $requete = "SELECT * FROM niveau";
                        $resultat = mysqli_query($connexion, $requete);
                        if($champs = mysqli_fetch_array($resultat)) {
                    ?>
                    <table>
                        <tr>
                            <td></td>
                            <td class="header">ID niveau</td>
                            <td class="header">Libelle niveau</td>
                        </tr>
                        <?php do {?>
                        <tr>
                            <td><a href="php_form/form_modifie_niv.php?id_niveau=<?php echo $champs['id_niveau'];?>">Modifier</a></td>
                            <td rowspan="2"><?php echo $champs['id_niveau'];?></td>
                            <td rowspan="2"><?php echo $champs['libelle_niveau'];?></td>
                        </tr>
                        <tr class="separe">
                            <td><a href="php_supp/supprimer_niv.php?id_niveau=<?php echo $champs['id_niveau'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce niveau ?')">Supprimer</a></td>
                        </tr>
                    <?php }while ($champs = mysqli_fetch_array($resultat));?>
                    </table>
                    <?php } else { ?>
                    <div>
                        <div class="pub_info">Aucun étudiant inscrit</div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div id="an" class="tableau">
                <a href="php_form/form_add_an.php">Ajouter une information</a><br>
                <div>
                <?php 
                        $requete = "SELECT * FROM anneeacademique";
                        $resultat = mysqli_query($connexion, $requete);
                        if($champs = mysqli_fetch_array($resultat)) {
                    ?>
                    <table>
                        <tr>
                            <td></td>
                            <td class="header">ID annee</td>
                            <td class="header">Libelle annee</td>
                        </tr>
                        <?php do {?>
                        <tr>
                            <td><a href="php_form/form_modifie_an.php?id_annee=<?php echo $champs['id_annee'];?>">Modifier</a></td>
                            <td rowspan="2"><?php echo $champs['id_annee'];?></td>
                            <td rowspan="2"><?php echo $champs['libelle_annee'];?></td>
                        </tr>
                        <tr class="separe">
                            <td><a href="php_supp/supprimer_an.php?id_annee=<?php echo $champs['id_annee'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annee académique ?')">Supprimer</a></td>
                        </tr>
                    <?php }while ($champs = mysqli_fetch_array($resultat));?>
                    </table>
                    <?php } else { ?>
                    <div>
                        <div class="pub_info">Aucun étudiant inscrit</div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </div>
    <script src="js/script_admin.js"></script>
</body>
</html>