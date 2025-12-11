<?php

$etablissement = "Université Cadi Ayyad";
$module = "Programmation Web";
$annee = 2025;

$a = 10;
$b = 5;

$addition = $a + $b;
$multiplication = $a * $b;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info PHP - TP6</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; background-color: #f5f5f5; }
        h1, h2 { color: #4CAF50; }
        p { margin: 0.5rem 0; }
    </style>
</head>
<body>
    <h1>Nom de l’établissement</h1>
    <p><?php echo $etablissement; ?></p>

    <h1>Module</h1>
    <p><?php echo $module; ?></p>

    <h1>Année</h1>
    <p><?php echo $annee; ?></p>

    <h1>Exemples de variables numériques</h1>
    <p>A = <?php echo $a; ?></p>
    <p>B = <?php echo $b; ?></p>

    <h1>Résultat d’addition et multiplication</h1>
    <p>Addition : <?php echo $addition; ?></p>
    <p>Multiplication : <?php echo $multiplication; ?></p>
    
</body>
</html>
