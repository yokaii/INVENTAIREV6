<?php
mysql_connect('localhost', 'root', '') or die ("Erreur de connexion au serveur"); 
mysql_select_db('inventaire') or die ("Erreur de connexion a la base de donnees"); 
mysql_set_charset('utf8');
?>