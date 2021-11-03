


<?php
if (isset($_POST['submit']));


echo "Bonjour" . " " . $_POST['name'] . " " . $_POST['Prénom'];
echo '<br>';
echo 'Votre numéro est' . $_POST['number'];
echo '<br>';
echo 'Vous email est' . $_POST['email'];
echo '<br>';
echo "Vous etes un" . " " . $_POST['catégorie'];
echo '<br>';
echo "Vous etes un " . " "  . $_POST['sexe'];
echo '<br>';
$datetime1 = 2021;
$datetime2 = $_POST['date_naiss'];
$age = $datetime1 - $datetime2;
echo "Vous avez" . " "  . $age . " " . "ans";
echo '<br>';
echo "Vous avez un diplome >" . $_POST['qualifications'];
echo '<br>';
echo "Vous message " . $_POST['message'];



?>