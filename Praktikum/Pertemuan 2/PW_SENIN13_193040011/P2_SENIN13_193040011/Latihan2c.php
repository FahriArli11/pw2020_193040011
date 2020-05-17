<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lingkaran {
            width: 50px;
            height: 50px;
            margin-bottom: 5px;
            margin-right: 5px;
            display: inline-block;
            border-radius: 50px;
            line-height: 50px;
            text-align: center;
            border: 3px solid black;
            color: black;
            background-color: #FA8072;
        }
    </style>
    </head>
    <body>
        <?php 
            $a = "1";
            echo '<div class="lingkaran">' .$a. '</div>';
            echo "<br>";

            $b = "2";
            echo '<div class="lingkaran">'.$b.'</div>';
            echo '<div class="lingkaran">'.$b.'</div>';
            echo "<br>";

            $c = "3";
            echo '<div class="lingkaran">'.$c.'</div>';
            echo '<div class="lingkaran">'.$c.'</div>';
            echo '<div class="lingkaran">'.$c.'</div>';
        ?>    
    </body>
</html>