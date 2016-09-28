<?php
	include 'data.php';
	session_start();
	if ($_SESSION['pref']=='admin') {
		if ($_GET['act']=='inputn') {
			mysql_query("INSERT INTO nelayan(nama, no_hp, alamat, idsk)
				VALUES(
					'$_POST[nama]',
					'$_POST[no_hp]',
					'$_POST[alamat]',
					'$_POST[idsk]')");

			echo "<script>window.alert('data tersimpan');
			window.location=('modul.php?isi=tabel_n')</script>";
		}
		if ($_GET['act']=='editn') {
			mysql_query("update nelayan set 
			nama='$_POST[nama]', 
			no_hp='$_POST[no_hp]', 
			alamat='$_POST[alamat]', 
			idsk=$_POST[idsk]
			where idn=$_POST[idn]");

			echo "<script>window.alert('data tersimpan');
			window.location=('modul.php?isi=tabel_n')</script>";
		}
		if ($_GET['act']=='hapusn') {
			mysql_query("delete from nelayan where idn = $_GET[id]");

			echo "<script>window.alert('data terhapus');
			window.location=('modul.php?isi=tabel_n')</script>";
		}

		if ($_GET['act']=='inputpk') {
			mysql_query("INSERT INTO p_kapal(nama, no_hp, alamat, idsk)
				VALUES(
					'$_POST[nama]',
					'$_POST[no_hp]',
					'$_POST[alamat]',
					'$_POST[idsk]')");

			echo "<script>window.alert('data tersimpan');
			window.location=('modul.php?isi=tabel_pk')</script>";
		}
		if ($_GET['act']=='editpk') {
			mysql_query("update p_kapal set 
			nama='$_POST[nama]', 
			no_hp='$_POST[no_hp]', 
			alamat='$_POST[alamat]', 
			idsk=$_POST[idsk]
			where idpk=$_POST[idpk]");

			echo "<script>window.alert('data tersimpan');
			window.location=('modul.php?isi=tabel_pk')</script>";
		}
		if ($_GET['act']=='hapuspk') {
			mysql_query("delete from p_kapal where idpk = $_GET[id]");

			echo "<script>window.alert('data terhapus');
			window.location=('modul.php?isi=tabel_pk')</script>";
		}
	}
?>