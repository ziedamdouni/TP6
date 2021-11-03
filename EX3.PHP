

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    echo "Nous sommes " . '<font color="blue">' . date("d/m/Y") . "</font>"; // Affiche la date du jour
    echo "  Il est " . '<font color="red">' . date("H:i:s") . "</font>"; // Affiche l'heure
    ?>

</body>

</html>
