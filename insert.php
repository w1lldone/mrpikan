<?php
	include 'data.php';
	for ($i=10; $i<21 ; $i++) {
		$nama="Pedagang ".$i; 
		mysql_query("INSERT INTO pedagang(nama)
			VALUES(
					'$nama')");
	}
?>