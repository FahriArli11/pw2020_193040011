<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040011</title>
    <style>
    .pembungkus {
        border: 1px solid;
        box-shadow: 1px 1px 10px black;
    }
    </style>
</head>
<body>
    <?php
        $jawabanIsset = "Isset adalah = Salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form <br><br>";
        $jawabanEmpty = "Empty adalah =  Empty pada php berfungsi sebagai penanda suatu kondisi";
        $GLOBALS['Isset'] = $jawabanIsset;
        $GLOBALS['Empty'] = $jawabanEmpty;
        function soal($style) {
            echo "<div class='$style'>
            <p>$GLOBALS[Isset]</p>
            <p>$GLOBALS[Empty]</p>
            </div>";
        }
    ?>
    <?php
        echo soal("pembungkus");
    ?>
</body>
</html>