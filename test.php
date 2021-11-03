<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
</head>

<body>

    <fieldset>
        <legend>
            <h1>Vos Commentaires</h1>
        </legend>

        <form action="" method="POST" style="margin-left: 200px;">
            <label for="nom">Nom ou Pseudo</label><br>
            <input type="text" name="nom"><br>
            <label for="email">Adresse email:</label><br>
            <input type="email" name="email"><br>
            <label for="note">Commentaires:</label><br>
            <textarea type="text" name="note" id="note" cols="90" rows="10" id="todoInput"></textarea><br><br>
            <input type="submit" value="PREVISUALISER">
        </form>

        <h2>Commentaires :</h2><br><br>

        <ol>
            <li>
                <?php
                if (isset($_POST["submit"]));
                $name = $_POST["nom"];
                $email = $_POST["email"];
                $message = $_POST["note"];
                echo "Le" . " " . date("d/m/Y") . " " . "à" . " " . date("H:i:s") . " " . $name . " " . $message;

                ?>
            </li>
        </ol>



    </fieldset>
</body>

</html>