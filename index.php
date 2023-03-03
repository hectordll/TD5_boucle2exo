<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échiquier</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="board">
    <?php
        // $rows = 8; // nombre de lignes
        // $cols = 8; // nombre de colonnes
    
        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                $color = ($i + $j) % 2 == 0 ? "white_tile" : "black_tile";
                echo "<div class='board-onecase $color'></div>";
                // echo "<div class='board-grid $color'></div>";
        }}
?>

</div>
</body>

</html>