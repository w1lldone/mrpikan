<?php
	session_start();
	$bnel=$_POST['b_nelayan']/$_POST['vol'];
	$bpeng=$_POST['b_pengepul']/$_POST['vol'];
	$persen=$_POST['persen']/100;
	include 'data.php';
	if ($_GET['act']=='input') {
		mysql_query("INSERT INTO transaksi1(tanggal, idsk, idn, idpk, b1, b2, vol, persen)
		VALUES(
					'$_POST[tanggal]',
					'$_POST[sektor]',
					'$_POST[nelayan]',
					'$_POST[pengepul]',
					'$bnel',
					'$bpeng',
					'$_POST[vol]',				
					'$persen')");
	}//act input
	else if ($_GET['act']=='edit'){		
		mysql_query("update transaksi1 set 
			tanggal='$_POST[tanggal]', 
			idn=$_POST[nelayan], 
			idpk=$_POST[pengepul], 
			b1=$bnel, 
			b2=$bpeng, 
			vol=$_POST[vol], 
			persen=$persen 
			where idt1=$_POST[idt1]");
	}// act edit
		
		$br1=hasil("select avg(b1) from transaksi1 where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		$br2=hasil("select avg(b2) from transaksi1 where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		$persenr=hasil("select avg(persen) from transaksi1 where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		$volt=hasil("select sum(vol) from transaksi1 where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]");
		
		$sql2="select * from rata where tanggal = '$_POST[tanggal]' and idsk = $_POST[sektor]";
		$q2=mysql_query($sql2) or die(mysql_error());
		$counts=mysql_num_rows($q2);
		if ($counts==0){		
			mysql_query("INSERT INTO rata(idsk, tanggal, br1, br2, vr1, persen)
			VALUES(
					'$_POST[sektor]',
					'$_POST[tanggal]',
					'$br1',							
					'$br2',
					'$volt',
					'$persenr')");	
		} else{
			mysql_query("update rata set 
				br1=$br1, 
				br2=$br2,
				vr1=$volt, 
				persen=$persenr 
				where tanggal='$_POST[tanggal]' and idsk='$_POST[sektor]'");	
		}

		margin();

		echo "<script>window.alert('data tersimpan');
		window.location=('modul.php?isi=tabel1')</script>";

?>		