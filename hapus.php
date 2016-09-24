<?php
	include 'data.php';
	session_start();
	if ($_GET['tabel']=='tabel1'){
		//ngecek hak akses (harus tpi)
		if ($_SESSION['pref']=='tpi') {
			//ambil nilai tanggal dan sektor
			$tanggal=hasil("select tanggal from transaksi1 where idt1 = $_GET[id]");
			$sektor=hasil("select idsk from transaksi1 where idt1 = $_GET[id]");
			
			//hapus data
			mysql_query("delete from transaksi1 where idt1 = $_GET[id]");

			//begin update rata
			$br1=hasil("select avg(b1) from transaksi1 where tanggal = '$tanggal' and idsk = $sektor");
			if ($br1==null) {
				$br1=0;
			}
			$br2=hasil("select avg(b2) from transaksi1 where tanggal = '$tanggal' and idsk = $sektor");
			if ($br2==null) {
				$br2=0;
			}
			$persenr=hasil("select avg(persen) from transaksi1 where tanggal = '$tanggal' and idsk = $sektor");
			if ($persenr==null) {
				$persenr=0;
			}
			$volt=hasil("select sum(vol) from transaksi1 where tanggal = '$tanggal' and idsk = $sektor");
			if ($volt==null) {
				$volt=0;
			}

			mysql_query("update rata set 
					br1=$br1, 
					br2=$br2,
					vr1=$volt, 
					persen=$persenr 
					where tanggal='$tanggal' and idsk= $sektor");
		}
		//end update rata

		echo "<script>window.alert('data terhapus');
		window.location=('modul.php?isi=tabel1')</script>";
	}

	if ($_GET['tabel']=='tabel2'){
		if ($_SESSION['pref']=='tpi') {

			$tanggal=hasil("select tanggal from transaksi2 where idt2 = $_GET[id]");
			$sektor=hasil("select idsk from transaksi2 where idt2 = $_GET[id]");

			mysql_query("delete from transaksi2 where idt2 = $_GET[id]");

			$hr2=hasil("select avg(h2) from transaksi2 where tanggal = '$tanggal' and idsk=$sektor");
			if ($hr2==null) {
				$hr2=0;
			}
			$vr3=hasil("select sum(v3) from transaksi2 where tanggal = '$tanggal' and idsk=$sektor");
			if ($vr3==null) {
				$vr3=0;
			}
			mysql_query("update rata set hr2=$hr2, vr3=$vr3 where tanggal='$tanggal' and idsk=$sektor");
		}
		echo "<script>window.alert('data terhapus');
		window.location=('modul.php?isi=tabel2')</script>";
	}

	if ($_GET['tabel']=='tabel3'){

		$tanggal=hasil("select tanggal from laporan where idl = $_GET[id]");
		$sektor=hasil("select idsk from laporan where idl = $_GET[id]");

		if ($_SESSION['pref']=='tpi') {
			mysql_query("delete from laporan where idl = $_GET[id]");

			$br3=hasil("select avg(b3) from laporan where tanggal = '$tanggal' and idsk = $sektor");
			if ($br3==null) {
				$br3=0;
			}
			$hr3=hasil("select avg(h3) from laporan where tanggal = '$tanggal' and idsk = $sektor");
			if ($hr3==null) {
				$hr3=0;
			}
			$vr4=hasil("select sum(vol) from laporan where tanggal = '$tanggal' and idsk = $sektor");
			if ($vr4==null) {
				$vr4=0;
			}

			mysql_query("update rata set 
				br3=$br3, 
				hr3=$hr3,
				vr4=$vr4
				where tanggal='$tanggal' and idsk= $sektor");
		}
		echo "<script>window.alert('data terhapus');
		window.location=('modul.php?isi=tabel3')</script>";
	}

	cekrata();
	margin();

?>