<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="ejercicio2.css">

</head>

<body>

<div class="content">
<?php

$id = $_GET['id'];

$peliculas=[["name"=>"Los Simpsons","cadena"=>"Fox","año"=>1989,"año"=>1989,"foto"=>"simpsons.jpg"],
	["name"=>"Juego de Tronos","cadena"=>"HBO","año"=>2011,"foto"=>"http://www.diariocritico.com/fotos/1/caminantes_blancos_thumb_1280.jpg"],
	["name"=>"Black Mirror","cadena"=>"Netflix","año"=>2011,"foto"=>"http://www.hobbyconsolas.com/sites/hobbyconsolas.com/public/styles/main_element/public/media/image/2016/10/black-mirror-temporada-3_0.jpg?itok=hCRHBfLm"]];


echo '<h1 class="text">'.$peliculas[$id]["name"].'</h1>';
echo '<p class="text">'.$peliculas[$id]["cadena"].'</p>';
echo '<p class="text">'.$peliculas[$id]["año"].'</p>';
echo '<img class="imagen" src="'.$peliculas[$id]["foto"].'"">';



?>
<br>
<a class="hypervinculo" href="index.php">Volver</a>

</div>


</body>
</html>





