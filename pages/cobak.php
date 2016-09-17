<?php
	include"config.php";
	$sql="select * from nelayan";
	$q=mysql_query($sql) or die(mysql_error());
	while ($row=mysql_fetch_array($q)){	
		echo $row['nama']." ";
	}
?>