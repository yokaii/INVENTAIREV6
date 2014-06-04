<?php
session_start();
$B = $_SESSION['zone'];
include "db.php";

//Requête pour récupérer l'id de la zone
$sql = $db->query("SELECT id FROM zone WHERE ZONE = '$B' ");
$fetch = $sql->fetch();
$A = $fetch['id'];
$id = $A + 1;


//Requête pour récupérer la zone de la variable $id 
$fetch2 = $db->query("SELECT ZONE FROM zone WHERE id = '$id' ");
$result1 = $fetch2->fetch();

//Requête pour récupérer le résultat de la requête précendente
$C = $result1['ZONE'];
$_SESSION['zone'] = $C;




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
		<div class="title-head"><br><?php echo "La zone est : " .$C ;?></div>
		
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

