<?php
	include "data.php";
	echo grafik("select tanggal, br1, br2 from rata order by tanggal desc limit 0,4");
?>