
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon PHP</title>
</head>
<body>
    <?php
        $tab = ["HTML","CSS","PHP","JavaScript"];

        // echo "<table width='300' border='1'>";
        //     for ($i=0; $i < count($tab) ; $i++) { 
        //         echo "<tr>";
        //             echo "<td>".$i."</td>";
        //             echo "<td>".$tab[$i]."</td>";
        //         echo "</tr>";
        //     }
        // echo "</table>";
    ?>
    <table width='300' border='1'>
        <?php for ($i=0; $i < count($tab) ; $i++) {?>
                <tr>
                    <td><?php echo $i; ?></td>
                </tr>
            <?php }?>
    </table>
</body>
</html>