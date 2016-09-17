<?php
	include 'data.php';
	session_start();
	if ($_GET['tabel']=='tabel1'){
		if ($_SESSION['pref']=='tpi') {
			mysql_query("delete from transaksi1 where idt1 = $_GET[id]");
		}
		echo "<script>window.alert('data terhapus');
		window.location=('modul.php?isi=tabel1')</script>";
	}

	if ($_GET['tabel']=='tabel2'){
		if ($_SESSION['pref']=='tpi') {
			mysql_query("delete from transaksi2 where idt2 = $_GET[id]");
		}
		echo "<script>window.alert('data terhapus');
		window.location=('modul.php?isi=tabel2')</script>";
	}

	if ($_GET['tabel']=='tabel3'){
		if ($_SESSION['pref']=='tpi') {
			mysql_query("delete from laporan where idl = $_GET[id]");
		}
		echo "<script>window.alert('data terhapus');
		window.location=('modul.php?isi=tabel3')</script>";
	}

?>