<?php
    require("../config.php");
    $connexion = connect_db();

    if (!isset($_GET['id_information'])) {
        die("Aucun ID fourni !");
    }

    $id = intval($_GET['id_information']); // Sécuriser l'ID
    
    // Effectuer la suppression
    $requete = "DELETE FROM information WHERE id_information = $id;";
    $resultat = mysqli_query($connexion, $requete);

    if ($resultat) {?>
        <script>
            alert('suppression réussi.');
            window.location.href = '../part_admin.php';
        </script>
    <?php
        // header("Location: part_admin.php");
    } else {?>
        <script>
            alert('Erreur lors de la suppression.');
            window.location.href = '../part_admin.php';
        </script>
        <?php
    }
?>
