<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetas</title>
</head>
<body>
    <?php
        $planetas = [
            "Mercúrio",
            "Vênus",
            "Terra",
            "Marte",
            "Júpiter",
            "Saturno",
            "Urano",
            "Netuno"
        ];
    ?>
    <ul>
        <?php foreach ($planetas as $planeta) :?>
            <li>
                <a href="get.php?planeta=<?php echo $planeta ?>"><?php echo $planeta ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>