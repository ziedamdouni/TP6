<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Formulaire</h1>
    <form action="zied.php" method="post">

        <fieldset>
            <legend> Civilité </legend>
            <p>
                <strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label>
                <input id="nom" name="name" value="<?= $name ?> size=" 28" type="text" /> <br><br>

                <strong>Prénom :</strong> <label for="prenom"></label>
                <input id="prenom" name="prénom" value="<?= $prénom ?>  size=" 27" type="text"/> </br ></br>

                <strong>Adresse : </strong> <label for="adresse">
                </label>
                <input id="adresse" name="adresse" value="<?= $adresse ?>  value=" <?= $name ?>" size="31" type="text"/> 
                </br></br>
                <strong>Code Postal :</strong> <label for="code">
                </label>
                <input id="code" name="code" value="<?= $code ?> size=" 13" type="text" />
                <strong>Ville : </strong> <label for="ville"></label>
                <input id="ville" name="ville" value="<?= $ville ?>  size= " 39" type="text" /> <br /><br />
                <strong>Téléphone<span style="color: #ff0000;">*</span> :<label for="telephone"></label></strong>
                <input id="telephone" name="telephone" value="<?= $telephone ?>  size=" 27" type="text" />
                <strong>Fax :</strong> <label for="fax"></label>
                <input id="fax" name="fax" value="<?= $fax ?>  size=" 27" type="text" /> <br /> <br />
                <strong>Mail <span style="color: #ff0000;">*</span> : </strong> <label for="mail"> </label>
                <input id="mail" name="mail" value="<?= $mail ?>  size=" 31" type="text" />
            </p>
            <div>
                <label for="date_nais">Votre année de <br> naissance:</label>
                <select id="date_nais" name="date_nais" value="<?= $date_nais ?>">
                    <option value="">Choisir un onglet</option>
                    <option value="achats">Achats</option>
                    <option value="maintenance">Maintenance</option>
                    <option value="oders">Commandes</option>
                    <option value="other">Autre</option>
                </select><br><br>
            </div>
            <div>
                <label for="utilise">Votre sexe :</label>
                <label for="Homme" class="inline">Homme</label>
                <input type="radio" name="CSS" value="<?php if (isset($_POST["email"])) {
                                                            echo $_POST["email"];
                                                        } ?>" id="oui" checked="checked" />
                <label for="Femme" class="inline">Femme</label>
                <input type="radio" name="CSS" value="<?php if (isset($_POST["email"])) {
                                                            echo $_POST["email"];
                                                        } ?>" id="non" /><br>
            </div>
            <p>Votre catégorie: ?
                <label for="motif"></label>
                <select id="motif" name="motif">
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>"> enseignant</option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>">Etudaient</option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>">Pour un article</option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>">Pour autre chose</option>
                </select> <br>
            </p>
            <p> <label for="email">categorie:</label>
                <select name=" menu" size=4 multiple>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>" Bac+1></option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>" Bac+2</option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>" Bac+3</option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>" Bac+4</option>
                    <option value="<?php if (isset($_POST["email"])) {
                                        echo $_POST["email"];
                                    } ?>" Bac+5</option>
                </select><br>
            </p>
            <p>
                <input type="submit" value="valider" />
                <input type="reset" value="Annuler" />
            </p>
    </form>
    </fieldset>
</body>

</html>
