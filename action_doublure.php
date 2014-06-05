<?php
session_start();
include ("db.php");	
$A = $_SESSION["reference"];
$zonechoose	= $_SESSION["zone"];
$sqlInventaire = $db->query("SELECT * FROM inventaire WHERE REF = $A");
$row1 = $sqlInventaire->fetch();
$zone1 = $row1['DP_CODEinv'];
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
		<div class="title-head"><h1><center><br><u>Attention un autre produit de référence <?php echo $A ?> existe déjà dans la zone :<?php echo $zone1 ?></u></center></h1></div>
		
	</div>

<?php
$filename1 = "img/$A.jpg";
	if (file_exists($filename1)) {    //Vérifie si le fichier existe et renvoie la bonne photo ou la photo de demande.
		echo "<img src='img/$A.jpg' width='180px' height='200px'><br><table border='3'>";
	} 
?>			
<table border ="2">
	<tr>
		</tr>
		<?php foreach ($row1 as $value => $key):
			switch($value)
			{
				case 'CODE';
				break;
				case 'FAM';
				break;
				case 'DETAIL';
				break;
				case 'FIBRE';
				break;
				case 'COULEUR';
				break;
				case 'BACK';
				break;
				case 'GRS';
				break;
				case 'LARG';
				break;
				case 'LONG';
				break;
				case 'HDIAM';
				break;
				case 'PNET';
				break;
				case 'PBRUT';
				break;
				case 'MARQUE';
				break;
				case 'REMARQUE';
				break;
				case 'DEFAUT';
				break;
				case 'ACTION';
				break;
				case 'INT_CONDITION';
				break;
				case 'MANDRIN';
				break;
				case 'NB';
				break;
				case 'DP_CODE';
				break;
				case 'COM_DE';
				break;
				default;
					echo '<td>'.$value.'</td>';	
				break;
			}
						
		?>
			
		<?php endforeach ?>
	</tr>
	<tr>
		<?php foreach ($row1 as $value => $key):
		switch($value)
			{
				case 'CODE';
				break;
				case 'FAM';
				break;
				case 'DETAIL';
				break;
				case 'FIBRE';
				break;
				case 'COULEUR';
				break;
				case 'BACK';
				break;
				case 'GRS';
				break;
				case 'LARG';
				break;
				case 'LONG';
				break;
				case 'HDIAM';
				break;
				case 'PNET';
				break;
				case 'PBRUT';
				break;
				case 'MARQUE';
				break;
				case 'REMARQUE';
				break;
				case 'DEFAUT';
				break;
				case 'ACTION';
				break;
				case 'INT_CONDITION';
				break;
				case 'MANDRIN';
				break;
				case 'NB';
				break;
				case 'DP_CODE';
				break;
				case 'COM_DE';
				break;
				default;
					echo '<td>'.$key.'</td>';
				break;
			}
		?>	 	
		<?php endforeach ?>
	</tr>
</table>
<br/>
<div class="content">
		<div class="title-head"><h1><center><br><u>Vous êtes dans la zone : <?php echo $zonechoose ?></u></center></h1></div>
		
</div>
<br/>
<br/>
<?php
$sql = $db->query("SELECT * FROM allref WHERE REF = $A"); 
$filename = "img/$A.jpg";

    if($sql->rowCount() > 0) 
    { 
			if (file_exists($filename)) {    //Vérifie si le fichier existe et renvoie la bonne photo ou la photo de demande.
				echo "<img src='img/$A.jpg' width='180px' height='200px'><br><table border='3'>";
			} else {
				echo "<img src='img/NOPHOTO.jpg' width='470px' height='200px'><br><table border='3'>";
			}
              
        $row = $sql->fetch();
		$_SESSION['table'] = "allref";        
    } 
	else{ //Sinon fait la requete sur la table oldref et affiche un message comme quoi la rfrence ne doit pas etre en stock normalement
	 $sql2 = $db->query("SELECT * FROM oldref WHERE REF = $A"); 	
	 if($sql2->rowCount() > 0)
		{
			echo "Bobine normalement pas au dépot<br>";
			if (file_exists($filename)) {    //Vérifie si le fichier existe et renvoie la bonne photo ou la photo de demande.
				echo "<img src='img/$A.jpg' width='180px' height='200px'><br><table border='3'>";
			} else {
				echo "<img src='img/NOPHOTO.jpg' width='470px' height='200px'><br><table border='3'>";
			}
              
        $row = $sql2->fetch(); 
		$_SESSION['table'] = "oldref";        
    	} 
	}     
?>
<tr>
	</tr>
	<?php foreach ($row as $value => $key):
		if ($value !== "DECHET"){
		echo '<td>'.$value.'</td>';
		}		
	?>
		
	<?php endforeach ?>
</tr>
<tr>
	<?php foreach ($row as $value => $key):
	
	if ($value !== "DECHET"){
		echo '<td>'.$key.'</td>';
	}?>	 	
	<?php endforeach ?>
</tr>
<form id="Form1" action="action2.php" method="post">
 <label>
  <input id="check1" type="checkbox" name="DECHETMODIF" value="1" <?php if($row['DECHET'] == 1) echo 'checked'?> >
    DECHET</label>
			<tr>
				<td></td>
				<td><input type="text" name="CODEMODIF"  style="width:50px; height:30px" value="<?= isset($_POST['CODE']) ? $_POST['CODE'] : ''; ?>" autofocus/> </td>
				<td></td>
				<td><input type="text" name="DETAILMODIF" style="width:150px; height:30px;" /></td>
				<td><input type="text" name="FIBREMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="COULEURMODIF" style="width:100px; height:30px;" /></td>
				<td><input type="text" name="BACKMODIF" style="width:100px; height:30px;" /></td>
				<td><input type="text" name="GRSMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="LARGMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="LONGMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="HDIAMMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="PNETMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="PBRUTMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="MARQUEMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="REMARQUEMODIF" style="width:150px; height:30px;" /></td>
				<td><input type="text" name="DEFAUTMODIF" style="width:150px; height:30px;" /></td>
				<td><input type="text" name="ACTIONMODIF" style="width:150px; height:30px;" /></td>
				<td><input type="text" name="CONDITIONMODIF" style="width:150px; height:30px;" /></td>
				<td><input type="text" name="MANDRINMODIF" style="width:50px; height:30px;" /></td>
				<td><input type="text" name="NBMODIF" style="width:50px; height:30px;" /></td>
				<td><b><?php echo "$zonechoose" ?></b></td>
				<td><input type="textarea" name="COM_INV" style="width:250px; height:30px;" /></td>
				
					
			</tr>

<table>
	 
	   <tr><td><input class="valid" type="button" value="Validation" onClick="confirmDechet();" /></td>
	</form>
		

	<form action="index.php" method="post">
		<td><input class="valid" type="submit" value="X"/></td></tr>
	</form>
	</body>
</table>

