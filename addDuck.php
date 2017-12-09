<?php
echo("testi");

if(!empty($_REQUEST["species"])){
	$spe = $_REQUEST['species'];
	$des = $_REQUEST['description'];
	$dat = $_REQUEST['day'];
	$cou = $_REQUEST['count'];
	$loc = $_REQUEST['location'];	
	$db = new PDO('sqlite:ducks.sqlite');
	$db->exec("INSERT INTO sightins(species, description, dateTime, count, location) VALUES('$spe','$des','$dat','$cou','$loc');");	
	$db=null;			
}

?> 