<?php
    function tumpukanbola($tumpukan) {
        for ($i = 0; $i <= $tumpukan; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='bola'>$i</div>";
            }
            echo "<div class='clear'></div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040011</title>
    <style>
    .bola {
        font-size: 20px;
        line-height: 35px;
        background-color: salmon;
        float: left;
        width: 35px;
        height: 35px;
        border-radius: 35px;
        border: 2px solid black;
        text-align: center;
    }
    .clear {
        clear: both;
    }
    </style>
</head>
<body>
    
    <?php tumpukanBola(5);?>

</body>
</html>