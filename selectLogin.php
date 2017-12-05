<?php
try{	
	$db = new PDO('sqlite:login.sqlite');	
	$name = $_REQUEST['name'];
	$pwd = $_REQUEST['pwd'];
	$sql  = "SELECT id, name FROM users WHERE name='$name' AND pwd='$pwd'";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);
}catch(PDOException $e){
	echo("Ei ok!" . $e);
}
$db=null;
?> 