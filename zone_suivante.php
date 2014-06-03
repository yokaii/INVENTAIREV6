<?php
session_start();
$B = $_SESSION['zone'];
include "db2.php";

//Requête pour récupérer l'id de la zone
$query = "SELECT id FROM zone WHERE ZONE = '$B' ";
$result = mysql_query($query);

//Requête pour récupérer le résultat de la requête précendente en ajoutant 1 
//pour passer a la zone suivante
$A = mysql_result($result, 0);
$id = $A +1;

//Requête pour récupérer la zone de la variable $id 
$query2 = "SELECT ZONE FROM zone WHERE id = '$id' ";
$result1 = mysql_query($query2);

//Requête pour récupérer le résultat de la requête précendente
$C = mysql_result($result1, 0);
$D = $C;
$_SESSION['zone'] = $D;




?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Index Inventaire</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.container{
		display: block;
		width: 100%;
	}
	.fisrt{
		display: block;
		float: left;
	}
	#content2{
		display: block;
	}
	</style>
</head>
<body>
	<div class="content">
		<div class="title-head"><h1><center>Inventaire</center></h1></div>
		
	</div>

	<div class="container">
		<div class="fisrt">
	

 </body>

<div class="content">
		<div class="title-head"><br><?php echo "La zone est : " .$D ;?></div>
		
</div>

<div class="product">
<form  action="action_produit_suivant.php" method="post">
<p> Réference : <input type="text" name="ref" /></p>
<p><input class ="valid1" type="submit" value="Accepter"></p>
</form>		

<form action="index.php" method="post">
<p><input class="retour" type="submit" value="Retour Accueil"></p>
</form>	
</div>






</html>

