<?php
  function hitungdeterminan($a, $b, $c, $d){
    echo '<h1 style="border-right: solid black 3px;
            border-left: solid black 3px;
            width:50px; height: 100px; 
            padding:0 12px;
            margin: 10px;
            cellspadding: 5;
            cellspacing: 5;">';
    echo "<p> $a $b </p>"; 
    echo "<p> $c $d </p>"; 
    echo "</h1>";
    $determinan = (($a * $d) - ($b * $c));
    echo "<h3>Determinan dari matriks tersebut adalah $determinan </h3>";
  }

  hitungDeterminan(1, 2, 3, 4);
?>
