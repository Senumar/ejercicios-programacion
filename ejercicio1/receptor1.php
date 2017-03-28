<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
<script>
	var nombre="asdasdas";
</script>
	<title>
		
	</title>
</head>
<body>


<div class="wrapper-header">


<?php

$Username = $_POST['dato1'];
$Password = $_POST['dato2'];


if ($Username=="" || $Password=="") {
	echo "<div class='correct-user'>Revisa tus credenciales, falta información 🤓</div>"; 
} else {	



	if ($Username=="Senumar" && $Password=="12345") {
		echo "<div class='correct-user'>  Welcome back, 
		<span class='user-name'>&nbsp&nbsp"
	 .$Username. "</span></div>"; 
	} else {
		echo "<div class='correct-user'>
		<span class='user-name'>"
	 .$Username. "&nbsp&nbsp</span> is not a registered user</div>"; 
} 	
}
?>

</div>


</div>

</body>
</html>
