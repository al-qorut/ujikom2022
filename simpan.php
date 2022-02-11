<?php
require_once "config.php";
	if(empty($_POST['tgl']) || empty($_POST['jam']) || empty($_POST['lokasi']) || empty($_POST['suhu'])) {
		header('Location: isidata.php?status=kosong');
	}
		$nik = $_SESSION['nik'];
		$tgl = $_POST['tgl'];
		$jam = $_POST['jam'];
		$lokasi = $_POST['lokasi'];
		$suhu = $_POST['suhu'];
		echo $nik.$tgl.$jam.$lokasi.$suhu;
		$query ='insert into catat values("'.$nik.'","'.$tgl.'","'.$jam.'","'.$lokasi.'",'.$suhu.')';
		$run = mysqli_query($connect,$query);
		if($run){
				header('Location: isidata.php?status=sukses');
			}else{
				header('Location: isidata.php?status=gagal');
			}
	
?>