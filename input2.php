<?php 
	session_start();
	$idsk=$_POST['sektor'];
	include"data.php";
	$hpd=$_POST['hg_jual']/$_POST['vol'];
	if($_GET['act']=='input'){
	mysql_query("INSERT INTO transaksi2(tanggal, idsk, idpd, idpk, h2, v3)
	VALUES(
				'$_POST[tanggal]',
				'$idsk',
				'$_POST[pedagang]',
				'$_POST[pengepul]',
				'$hpd',	
				'$_POST[vol]')");
	} //if act input

	else if ($_GET['act']=='edit'){		
		mysql_query("update transaksi2 set 
			tanggal='$_POST[tanggal]', 
			idpd=$_POST[pedagang], 
			idpk=$_POST[pengepul], 
			h2=$hpd,			
			v3=$_POST[vol]
			where idt2=$_POST[id]");
	}// act edit


	$hr2=hasil("select avg(h2) from transaksi2 where tanggal = '$_POST[tanggal]' and idsk=$idsk");
	$vr3=hasil("select sum(v3) from transaksi2 where tanggal = '$_POST[tanggal]' and idsk=$idsk");
		
	$sql2="select * from rata where tanggal = '$_POST[tanggal]' and idsk=$idsk";
	$q2=mysql_query($sql2) or die(mysql_error());
	$counts=mysql_num_rows($q2);
	if ($counts==0){
		mysql_query("INSERT INTO rata(idsk, tanggal, hr2, vr3)
		VALUES(
				'$idsk',
				'$_POST[tanggal]',
				'$hr2',							
				'$vr3')");	
	} else{
		mysql_query("update rata set hr2=$hr2, vr3=$vr3 where tanggal='$_POST[tanggal]' and idsk=$idsk");	
	}
	
	margin();

	echo "<script>window.alert('data tersimpan');
	window.location=('modul.php?isi=tabel2')</script>";
?>