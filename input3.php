<?php 
	include"data.php";
	$hpd=$_POST['hg_beli']/$_POST['vol'];
	$bpd=$_POST['biaya']/$_POST['vol'];
	if($_GET['act']=='input'){
		mysql_query("INSERT INTO laporan(idsk, tanggal, idpd, b3, h3, vol)
		VALUES(
					'$_POST[sektor]',
					'$_POST[tanggal]',
					'$_POST[pedagang]',
					'$bpd',	
					'$hpd',
					'$_POST[vol]')");
		
	} //if act input

	else if ($_GET['act']=='edit'){		
		mysql_query("update laporan set 
			tanggal='$_POST[tanggal]', 
			idpd=$_POST[pedagang], 
			b3=$bpd, 
			h3=$hpd,			
			vol=$_POST[vol]
			where idl=$_POST[id]");
	}// act edit

		//begin update rata
		$br3=hasil("select avg(b3) from laporan where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		$hr3=hasil("select avg(h3) from laporan where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		$vr4=hasil("select sum(vol) from laporan where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		$sql2="select * from rata where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]";
		$q2=mysql_query($sql2) or die(mysql_error());
		$counts=mysql_num_rows($q2);
		if ($counts==0){		
			mysql_query("INSERT INTO rata(idsk, tanggal, br3, hr3, vr4)
			VALUES(
					'$_POST[sektor]',
					'$_POST[tanggal]',
					'$br3',							
					'$hr3',
					'$vr4')");	
		} else{
			mysql_query("update rata set 
				br3=$br3, 
				hr3=$hr3,
				vr4=$vr4
				where tanggal='$_POST[tanggal]' and idsk='$_POST[sektor]'");	
		}
		//end update rata

		//update margin
		margin();

		echo "<script>window.alert('data tersimpan');
		window.location=('modul.php?isi=tabel3')</script>";				
?>