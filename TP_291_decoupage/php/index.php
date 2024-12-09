<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Découpage</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <img src="../images/logo_UGB.png" alt="">
        <h1>POÈSIE AFFICAINE</h1>
    </header>
    <nav>
        <div class="left">
            <ul>
                <ol><a href="#">Accueil</a></ol>
                <ol class="vertical">&VerticalLine;</ol>
                <ol><a href="#">Poème</a></ol>
                <ol class="vertical">&VerticalLine;</ol>
                <ol><a href="#">Auteurs</a></ol>
                <ol class="vertical">&VerticalLine;</ol>
                <ol><a href="#">Contactez-nous</a></ol>
                <ol class="vertical">&VerticalLine;</ol>
            </ul>
        </div>
        <div class="right">
            <input type="text" placeholder="Rechercher">
        </div>
    </nav>
    <section>
        <div class="left">
            <h2>Poème du jour</h2>
            <h3>Titre poème</h3>
            <!-- <p>
                Lorem ipsum dolor sit amet, consecetur adipiscong elit. Nullan fermantum lustus
                lacinia. Integer rhoncus vehiculia nulla. Aliquan adipiscing egestas leo ut bibendum
                Duis et erat aliquam, condimentum nibh nec, faucibus.<br><br>
                Denec bibendum, elit nec venenatis pulvinar, est sapien vehicula ipsum, puis gravida eros
                libero in nisl. Lorem ipsum dolor sit amet,consectetur adipisicing elit, fermentum volutpat
                at vitae tortor. Quisque tincidunt neque ac.
            </p> -->
        </div>
        <div class="right">
            <h3>Sites webs interessants</h3>
            <ul>
                <li><a href="#">Wikipedia.org</a></li>
                <li><a href="#">Google.fr</a></li>
                <li><a href="#">Uva.org</a></li>
            </ul>
        </div>
        <div class="clear">
            <?php
                require("../config.php");
                $connexion = connect_db();
                $requete = "SELECT * FROM poèsie";
                $resultat = mysqli_query($connexion, $requete);
            ?>
            <a href="form_ajouter.php">Ajouter</a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Auteur</th>
                    <th>Poèmes</th>
                    <th>Année de publication</th>
                    <th>Theme</th>
                    <th>Date de création</th>
                </tr>
                <?php while ($poème = mysqli_fetch_array($resultat)) {?>
                    <tr>
                        <td><?php echo $poème['id'];?></td>
                        <td><?php echo $poème['Auteur'];?></td>
                        <td><?php echo $poème['poèmes'];?></td>
                        <td><?php echo $poème['annee_publication'];?></td>
                        <td><?php echo $poème['theme'];?></td>
                        <td><?php echo $poème['date_creation'];?></td>
                        <td>
                            <a href="form_modifier.php?id=<?php echo $poème['id'];?>">Modifier</a>
                            <a href="supprimer.php?id=<?php echo $poème['id'];?>">Supprimer</a>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </section>
    <footer>Copiright 2014. &copy; Université Virtuelle Affricaine</footer>
</body>

</html>