<!DOCTYPE html>
<html lang=fr>

<head>
    <meta charset="UTF-8">
</head>

<?php
$nameErr = $PrénomErr = $numberErr = $emailErr = $catégorieErr = $sexeErr = $date_naissErr = $qualificationsErr = $messageErr = "";
$name = $Prénom = $number = $email = $catégorie = $sexe = $date_naiss = $qualifications = $message = "";
$favFruit = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Nom requis";
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST["Prénom"])) {
        $PrénomErr = "Prénom requis";
    } else {
        $Prénom = $_POST["Prénom"];
    }

    if (empty($_POST["number"])) {
        $numberErr = "Numéro de téléphone requis";
    } else {
        $number = $_POST["number"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Mail requis";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["catégorie"])) {
        $catégorieErr = "Veuillez choisir une option";
    } else {
        $subject = $_POST["catégorie"];
    }
    if (empty($_POST["sexe"])) {
        $sexeErr = "Veuillez choisir une option";
    } else {
        $sexe = $_POST["sexe"];
    }
    if (empty($_POST["date_naiss"])) {
        $date_naissErr = "Veuillez choisir une option";
    } else {
        $date_naiss = $_POST["date_naiss"];
    }
    if (empty($_POST["qualifications"])) {
        $qualificationsErr = "Veuillez choisir une option";
    } else {
        $qualifications = $_POST["qualifications"];
    }

    if (empty($_POST["message"])) {
        $messageErr = "Veuillez écrire votre message";
    } else {
        $message = $_POST["message"];
    }
}

if ($name and $number and $email and $message) {
    if (isset($_POST)) {
        echo '<form action="action.php" method="POST">';
    }
}
?>

<body>

    <form action="ind.php" method="POST">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="nom" name="name" required="required" value="<?php if (isset($_POST["name"])) {
                                                                                    echo $_POST["name"];
                                                                                } ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>
        <div>
            <label for="name">Prénom :</label>
            <input type="text" id="Prénom" name="Prénom" required="required" value="<?php if (isset($_POST["Prénom"])) {
                                                                                        echo $_POST["Prénom"];
                                                                                    } ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>

        <div>
            <label for="number">Numéro de téléphone :</label>
            <input type="tel" pattern="[0-9]{11}" id="number" name="number" required="required" value="<?php if (isset($_POST["number"])) {
                                                                                                            echo $_POST["number"];
                                                                                                        } ?>">
            <span class="error"><?php echo $numberErr; ?></span>
        </div>

        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="email" name="email" required="required" value="<?php if (isset($_POST["email"])) {
                                                                                        echo $_POST["email"];
                                                                                    } ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <div class="grid-item3"> <label>Votre catégorie :</label>
            <select name="catégorie" id="catégorie" required="required">
                <option value="Etudiant">Etudiant</option>
                <option value="Enseignant">Enseignant</option>
                <option value="Directeur">Directeur</option>
            </select><br><br>

            <div class="grid-item4"><label id="sexe" for="sexe" required="required">Votre sexe:</label>
                <input type="radio" name="sexe" value="Femme" cheked>Femme
                <input type="radio" name="sexe" value="Homme">Homme
            </div><br>

            <div>
                <input id="date_naiss" name="date_naiss" type="date"   required="required" />
            </div><br>
            <br><br>
            <div class="right"> <label for="qualifications" id="qualifications">Quels sont vos qualifications :</label>
            </div>
            <div class="left"> <select multiple name="qualifications" id="qualifications">
                    <option value="BAC+2">BAC+2</option>
                    <option value="BAC+3">BAC+3</option>
                    <option value="BAC+4">BAC+4</option>
                    <option value="BAC+5">BAC+5</option>
                </select></div><br>
        </div>


        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required="required"><?php if (isset($message)) echo $message; ?></textarea>
            <span class="error"><?php echo $messageErr; ?></span>
        </div>

        <div class="button">
            <button type="submit">Envoyer votre message</button>

        </div>
    </form>
</body>

</html>