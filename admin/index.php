<?php
    require "functions.php"
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="add_project.php" method="post">
            <label for="name">Nom du projet:</label>
            <input type="text" name="name" value="" />
            <br>
            <label for="da">Direction artistique:</label>
            <input type="text" name="da" value="" />
            <br>
            <label for="date">Date du projet:</label>
            <input type="date" name="date" value="">
            <br>
            <label for="team">Equipe:</label>
            <input type="text" name="team" value="" />
            <br>

            <input type="submit" name="submit" value="Envoyer">
        </form>

        <div>
            <?php 
                // foreach (get_project() as $key => $value) {
                //     // echo $value + "<br>";
                // }
                print_r(get_project())
            ?>
        </div>
    </body>
</html>
