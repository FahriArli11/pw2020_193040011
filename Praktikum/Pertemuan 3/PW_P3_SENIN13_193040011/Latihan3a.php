<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040011</title>
    <style>
    .tulisan {
        font-family: arial;
        font-size: 28px;
        color: #8c782d;
        font-style: italic;
        font-weight: bolder;
        text-align: center;
        width: 50%;
        margin: auto;
    }
    .pembungkus {
        border: 1px solid;
        box-shadow: 1px 1px 10px black;
    }
    </style>
</head>
<body>
    <?php
        function gantiStyle($tulisan, $style1, $style2) {
            echo "<div class='$style1'>
            <p class='$style2'>$tulisan</p>
            </div>";
        }
    ?>
    <?php
    echo gantiStyle("Selamat datang di praktikum PW 2020","tulisan","pembungkus");
    ?>
</body>
</html>