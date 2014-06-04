<?php
session_start();
$A = $_SESSION["reference"];
$B = $_SESSION["zone"];
include ("db.php");

//Recupération résultat requête REF
$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
//$sql = $db->prepare("SELECT * FROM allref WHERE REF = '$A' ");
//$sql->execute();

$REF =  $sql->fetchColumn(0);


$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$CODE =  $sql->fetchColumn(1);


$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' "); 
$FAM =  $sql->fetchColumn(2); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$DETAIL =  $sql->fetchColumn(3);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' "); 
$FIBRE =  $sql->fetchColumn(4);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$COULEUR =  $sql->fetchColumn(5);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$BACK =  $sql->fetchColumn(6);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$GRS =  $sql->fetchColumn(7);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$LARG =  $sql->fetchColumn(8); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$LONG =  $sql->fetchColumn(9); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$HDIAM =  $sql->fetchColumn(10);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$PNET =  $sql->fetchColumn(11);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$PBRUT =  $sql->fetchColumn(12); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$MARQUE =  $sql->fetchColumn(13); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$REMARQUE =  $sql->fetchColumn(14); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$DEFAUT =  $sql->fetchColumn(15);

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$ACTION =  $sql->fetchColumn(16); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$INT_CONDITION =  $sql->fetchColumn(17); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$MANDRIN =  $sql->fetchColumn(18); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$NB =  $sql->fetchColumn(19); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$DP_CODE =  $sql->fetchColumn(20); 

$sql = $db->query("SELECT * FROM allref WHERE REF = '$A' ");
$COM_DE =  $sql->fetchColumn(21);

$CODEinv	=	$_POST['CODEMODIF'];
$DETAILinv	=	$_POST['DETAILMODIF'];
$FIBREinv	=	 $_POST['FIBREMODIF'];
$COULEURinv	=	 $_POST['COULEURMODIF'];
$BACKinv		=	 $_POST['BACKMODIF'];
$GRSinv		=	 $_POST['GRSMODIF'];
$LARGinv		=	 $_POST['LARGMODIF'];
$LONGinv		=	 $_POST['LONGMODIF'];
$HDIAMinv		=	 $_POST['HDIAMMODIF'];
$PNETinv	=	 $_POST['PNETMODIF'];
$PBRUTinv		=	 $_POST['PBRUTMODIF'];
$MARQUEinv	=	 $_POST['MARQUEMODIF'];
$REMARQUEinv	=	 $_POST['REMARQUEMODIF'];
$DEFAUTinv	=	 $_POST['DEFAUTMODIF'];
$ACTIONinv		=	 $_POST['ACTIONMODIF'];
$CONDITIONinv		=	 $_POST['CONDITIONMODIF'];
$MANDRINinv	=	 $_POST['MANDRINMODIF'];
$NBinv		=	 $_POST['NBMODIF'];
$COMinv		=	 $_POST['COM_INV'];
	
$query1 = $db->query("INSERT INTO `inventaire`(`REF`, `CODE`, `FAM`, `DETAIL`, `FIBRE`, `COULEUR`, `BACK`, `GRS`, `LARG`, `LONG`, `HDIAM`, `PNET`, `PBRUT`, `MARQUE`, `REMARQUE`, `DEFAUT`, `ACTION`, `INT_CONDITION`, `MANDRIN`, `NB`, `DP_CODE`, `COM_DE`, `CODEinv`, `DETAILinv`, `FIBREinv`, `COULEURinv`, `BACKinv`, `GRSinv`, `LARGinv`, `LONGinv`, `HDIAMinv`, `PNETinv`, `PBRUTinv`, `MARQUEinv`, `REMARQUEinv`, `DEFAUTinv`, `ACTIONinv`, `INT_CONDITIONinv`, `MANDRINinv`, `NBinv`, `DP_CODEinv`, `COM_INV`)
VALUES ('$REF','$CODE','$FAM','$DETAIL','$FIBRE','$COULEUR','$BACK','$GRS','$LARG','$LONG','$HDIAM','$PNET','$PBRUT','$MARQUE',
'$REMARQUE','$DEFAUT','$ACTION','$INT_CONDITION','$MANDRIN','$NB','$DP_CODE','$COM_DE','$CODEinv','$DETAILinv','$FIBREinv','$COULEURinv','$BACKinv',
'$GRSinv','$LARGinv','$LONGinv','$HDIAMinv','$PNETinv','$PBRUTinv','$MARQUEinv','$REMARQUEinv','$DEFAUTinv','$ACTIONinv',
'$CONDITIONinv','$MANDRINinv','$NBinv','$B','$COMinv')");


?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>Prodiconseil: Inventaire</title>
	</head>
<body>
	<div class="content">
		<div class="title-head"><h6><center><br><?php echo "L'insertion du produit " . $A;echo " a ete effectue"; ?></center></h6></div>
		
	</div>

<div class="product">	

	<form action="produit_suivant.php" method="post">
	<td><input class="valid" type="submit" value="Produit suivant"/></td></tr>
	</form>


	<form action="zone_suivante.php" method="post">
	<td><input class="valid" type="submit" value="Zone Suivante"/></td></tr>
	</form>

	<form action="index.php" method="post">
	<td><input class="valid" type="submit" value="Allee Suivante"/></td></tr>
	</form>

	<form action="index.php" method="post">
	<td><input class="valid" type="submit" value="Retour a l'accueil"/></td></tr>
	</form>
</div>
	</div>
</body>
