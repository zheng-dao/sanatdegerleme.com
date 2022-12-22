<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=artexpertswebsit_art;charset=utf8",'root','xincheng1201');

}

catch (PDOExpception $e) {

	echo $e->getMessage();

}

?>