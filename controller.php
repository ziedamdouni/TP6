
<?php

$firstnameError = '';
$lastnameError  = '';
$subjectError   = '';
$mailError      = '';
$phoneError     = '';
$messageError   = '';
$nbError        = 0;




if (empty($_POST['firstname'])) {
    $nbError++;
    $firstname      = $_POST['firstname'];
    $firstnameError = 'Vous devez entrer un nom.';
}
if (empty($_POST['lastname'])) {
    $nbError++;
    $lastname      = $_POST['lastname'];
    $lastnameError = 'Vous devez entrer un prénom.';
}
if (empty($_POST['subject'])) {
    $nbError++;
    $subject      = $_POST['subject'];
    $subjectError = 'Vous devez sélectionner un sujet.';
}
if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    $nbError++;
    $mail         = $_POST['mail'];
    $mailError    = 'Vous devez saisir un email au format demandé.';
}
if (empty($_POST['phone'])) {
    $nbError++;
    $phone        = $_POST['phone'];
    $phoneError   = 'Vous devez saisir un numéro de téléphone au format demandé.';
}
if (empty($_POST['message'])) {
    $nbError++;
    $message       = $_POST['message'];
    $messageError  = 'Vous devez saisir un message.';
}


echo $firstnameError . '<br>';
echo $lastnameError . '<br>';
echo $subjectError . '<br>';
echo $mailError . '<br>';
echo $phoneError . '<br>';
echo $messageError . '<br>';

if ($nbError === 0) {
    header('Location:thanks.php?lastname=' . $_POST['lastname'] . ' ' . '&firstname=' . $_POST['firstname'] . ' ' . '&subject=' . $_POST['subject'] . ' ' . '&mail=' . $_POST['mail'] . ' ' . '&phone=' . $_POST['phone'] . ' ' . '&message=' . $_POST['message']);
}
