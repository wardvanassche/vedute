<?php
	try {
		$con = new PDO("mysql:host=localhost;dbname=vedute", "root", "");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "connected succesfully";
	}
	catch(PDOException $e){
		echo "Connection failed".$e->getMessage();
	}
?>
