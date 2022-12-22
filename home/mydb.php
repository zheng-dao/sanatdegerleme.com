<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=xoryazil_art;charset=utf8",'xoryazil_art','xoryazilimart');

}

catch (PDOExpception $e) {

	echo $e->getMessage();

}

?>