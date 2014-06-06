<?php
session_start();
include ("db.php");	
$A = $_SESSION["reference"];
$zonechoose	= $_SESSION["zone"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>Prodiconseil: Inventaire</title>
		<SCRIPT type="text/javascript"> 
		 function confirmDechet() { 
		  if (document.getElementById("check1").checked == true) { 
			   if (confirm("Vous etes sur que c'est un dechet")) { 
			   document.getElementById("Form1").submit(); 
			  }
			  else{
				 return false;
				}
			 }
		 else{
			 document.getElementById("Form1").submit(); 
			}  
		  }
		  
  </SCRIPT> 
	</head>
	<body>
	
	<div class="content">
		<div class="title-head"><h1><center><br><u>référence: <?php echo $A ?> zone :<?php echo $zonechoose ?></u></center></h1></div>
		
	</div>

<br/>

	<DIV align='left' STYLE='font-family: Arial Black; color: blue; font-size: 20pt; margin-top: -20pt'>
	 <p>Merci de prendre une photo si possible, etc ....					 
	</DIV>
			

<form id="Form1" action="action2_nouveau.php" method="post">
 <label>
  <input id="check1" type="checkbox" name="DECHETMODIF" value="1">
    DECHET</label>
    <br/><br/>
<table border="2">			
		<tr>
			<td class='police'>REF</td>
			<td class='police'>CODE</td>
			<td class='police'>Famille</td>
			<td class='police'>Details</td>
			<td class='police'>Fibre</td>
			<td class='police'>Couleur</td>
			<td class='police'>Back</td>
			<td class='police'>GRS</td>
			<td class='police'>Largeur</td>
			<td class='police'>Longueur</td>
			<td class='police'>HDIAM</td>
			</tr>
		
			<tr>
			<td class='police'><?php echo $A ?></td>
			<td class='police'><input type="text" name="CODEMODIF" style="width:60px; height:30px" value="<?= isset($_POST['CODE']) ? $_POST['CODE'] : ''; ?>" autofocus/> </td>
			<td class='police'></td>
			<td class='police'><textarea class="police" class="police" name="DETAILMODIF" style="width:150px; height:50px;" /></textarea></td>
			<td class='police'><input type="text" name="FIBREMODIF" style="width:150px; height:30px;" /></td>
			<td class='police'><textarea class="police" name="COULEURMODIF" style="width:150px; height:50px;" /></textarea></td>
			<td class='police'><input type="text" name="BACKMODIF" style="width:150px; height:30px;" /></td>
			<td class='police'><input type="text" name="GRSMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><input type="text" name="LARGMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><input type="text" name="LONGMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><input type="text" name="HDIAMMODIF" style="width:50px; height:30px;" /></td>
			</tr>
		
			<tr>
			<td class='police'>PDNET</td>
			<td class='police'>PBRUT</td>
			<td class='police'>Marque</td>
			<td class='police'>Remarque</td>
			<td class='police'>Defaut</td>
			<td class='police'>Action</td>
			<td class='police'>Int_Condition</td>
			<td class='police'>Mandrin</td>
			<td class='police'>Nombre</td>
			<td class='police'>DP_Code</td>
			<td class='police'>Commentaire_DE</td>
			</tr>	
			
			<tr>
			<td class='police'><input type="text" name="PNETMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><input type="text" name="PBRUTMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><input type="text" name="MARQUEMODIF" style="width:100px; height:30px;" /></td>
			<td class='police'><textarea class="police" name="REMARQUEMODIF" style="width:150px; height:50px;" /></textarea></td>
			<td class='police'><textarea class="police" name="DEFAUTMODIF" style="width:150px; height:50px;" /></textarea></td>
			<td class='police'><textarea class="police" name="ACTIONMODIF" style="width:150px; height:50px;" /></textarea></td>
			<td class='police'><textarea class="police" name="CONDITIONMODIF" style="width:150px; height:50px;" /></textarea></td>
			<td class='police'><input type="text" name="MANDRINMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><input type="text" name="NBMODIF" style="width:50px; height:30px;" /></td>
			<td class='police'><b><?php echo "$zonechoose" ?></b></td>
			<td class='police'><input type="hidden" name="COM_INV" style="width:250px; height:50px;" /></td>
			</tr>		
</table>
<table>
	 
	   <tr><td><input class="valid" type="button" value="Validation" onClick="confirmDechet();" /></td>
	</form>
		

	<form action="index.php" method="post">
		<td><input class="cancel" type="submit" value="X"/></td></tr>
	</form>
</table>
	</body>


