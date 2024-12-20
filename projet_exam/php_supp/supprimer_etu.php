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

    $requete_ins = 
        "DELETE 
        FROM inscription
        WHERE id_inscription = '" . $etu['id_inscription'] . "'";
    
    echo $requete_ins;
    $resultat_ins = mysqli_query($connexion, $requete_ins);

    $requete_spEt = 
        "DELETE 
        FROM etudiant
        WHERE id_etudiant = '" . $etu['id_etudiant'] . "'";
    
    echo $requete_spEt;
    $resultat_spEt = mysqli_query($connexion, $requete_spEt);

    $requete_spUser = 
        "DELETE 
        FROM user 
        WHERE id_user = '" . $etu['id_user'] . "'";
    
    echo $requete_spUser;
    $resultat_spUser = mysqli_query($connexion, $requete_spUser);

    if ($resultat_etu && $requete_spEt && $requete_spUser) {?>
        <script>
            //alert('suppression réussi.');
            window.location.href = '../part_admin.php';
        </script>
    <?php
    } else {?>
        <script>
            //alert('Erreur lors de la suppression.');
            window.location.href = '../part_admin.php';
        </script>
        <?php
    }
?>
