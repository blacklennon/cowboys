<?php
    require "../functions.php"
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <label for="name">Nom du projet:</label>
            <input type="text" name="name" value="" />
            <br>
            <label for="text">Text:</label>
            <input type="text" name="text" value="">
            <br>
            <label for="image">Image:</label>
            <input type="file"
                id="image" name="image"
                accept="image/*, video/*" />
            <br>

            <input type="submit" name="submit" value="Envoyer">
        </form>
        <button onClick="addImageInput()">+</button>

        <div>
            <?php 
                // foreach (get_project() as $key => $value) {
                //     echo $value + "<br>";
                // // }
                print_r(get_project());
                print_r(get_files(get_project()[0]));
                print_r(get_text(get_project()[0]));
                print_r(get_files_path(get_project()[0]))
            ?>
        </div>
    </body>
</html>

<script>
    function addImageInput() {
        // document.getElementById('image').after(document.createElement('input'))
    }
</script>