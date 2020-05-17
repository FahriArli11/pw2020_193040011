<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>193040011</title>
    </head>
    <body>
    <canvas width="400" Height="400" id="kanvas" style="background-color:white;border:10px white solid">
        <!-- canvas tidak akan muncul -->
    </canvas>
    <script>
        var kanvas, x, y, ct;
        var kotak=5;
        kanvas=document.getElementById("kanvas");
        ct=kanvas.getContext("2d");
        ct.fillStyle="blue";
        ct.beginPath();
        for(y=0;y<kotak;y++){
            for(x=0;x<kotak;x++){
                if((x+y)%2==0)ct.rect(x*80, y*80, 80, 80);
            }
        }
        ct.fill();
    </script>
    </body>
</html> 