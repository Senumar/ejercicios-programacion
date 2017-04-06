<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="ejercicio2.css">

</head>

<body>

<div class="content">

<h1 class="text">Catálogo de Series</h1>

<?php

$peliculas=[["name"=>"Los Simpsons","cadena"=>"Fox","año"=>1989],
			["name"=>"Juego de Tronos","cadena"=>"HBO","año"=>2011],
			["name"=>"Black Mirror","cadena"=>"Netflix","año"=>2011]];


echo '<ul class="list">';
foreach ($peliculas as $indice=>$series) {
	echo '<li class="options"><a class="hypervinculo" href="detalle.php?id='.$indice.'">'.$series["name"].'</a></li>';
}
echo '</ul>';

?>

</div>


</body>
</html>





