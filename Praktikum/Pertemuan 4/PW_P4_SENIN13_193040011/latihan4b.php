<?php 
$pemain = ["Mohammad Sallah" , "Cristiano Ronaldo" , "Lionel Messi" , "Zlatan Ibrahimovic" , "Neymar Jr"]
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Document</title>
 </head>
 <body>
  	<h3>Daftar Pemain Bola</h3>
  	<ol>
  		<?php foreach ($pemain as $p) :  ?>
  			<li><?=$p; ?></li>
  		<?php endforeach ?>
  	</ol>

  	<?php 
  	$pemain [] = "Luca Modric";
  	$pemain [] = "Sadio Mane";
  	$pemain [] = "Marcus Rashford";
  	$pemain [] = "Bruno Hernandez";
  	sort($pemain)
  	?>
  	<h3>Daftar Pemain Bola Terkenal</h3>
  	<ol>
  		<?php foreach ($pemain as $p) :  ?>
  			<li><?=$p; ?></li>
  		<?php endforeach ?>
  	</ol>
 </body>
 </html>