<?php 
try {
	$db=new PDO("mysql:host=localhost;dbname=logreg;charset=utf8",'root','');
	//echo "Error";
}

catch (PDOExpception $e) {
	echo $e->getMessage();
}
 ?>