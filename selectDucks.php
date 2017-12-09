<?php
try{	
	$db = new PDO('sqlite:ducks.sqlite');	
	$sql  = "SELECT dateTime, description, species, count, location FROM sightings ORDER BY dateTime DESC";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);
}catch(PDOException $e){
	echo("Ei ok!" . $e);
}
$db=null;
?> 