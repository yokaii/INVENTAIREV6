<?php 
	require_once('db.php');
	$color = $db->quote($_GET['color']);
	$sql = $db->query("SELECT * FROM zone WHERE ALLEE = $color");
	$fetch = $sql->fetchAll();
	 ?>
<html>
<head>
	<title></title>
</head>
<body>
<form action="action.php" method="post">
	<div id="content2">
		<div class="product">
		<select name="zone">
			<?php foreach ($fetch as $k): ?>
				<option><?= $k['ZONE']; ?></option>
			<?php endforeach ?>
		</select>
			
				<p> Réference : <input type="text" name="ref" /></p>
				<p><input type="submit" value="OK"></p>
			</form>
		</div>

</body>
</html>