<?php
	require_once('config.php');
	$aksi = '';
	if(!empty($_POST['aksi'])){
		$aksi=$_POST['aksi'];
	}
	switch($aksi){
		case 'Masuk!':
			$nik = $_POST['nik'];
			$query='select * from user where nik="'.$nik.'"';
			$hasil = mysqli_query($connect,$query); 
			while($row = mysqli_fetch_array($hasil)){
				$nik = $row[0];
				$nama = $row[1];
			}
			if(mysqli_num_rows($hasil)>0){
				$_SESSION['nik'] = $nik;
				$_SESSION['nama'] = $nama ;
				header('Location: index.php');
			}else{
				header('Location: login.php?status=tidak');
			}
			break;
		case 'Saya Pengguna Baru':
			$nik = $_POST['nik'];
			$nama = $_POST['nama'];
			if(empty($_POST['nama']) || empty($_POST['nik'])){
				header('Location: login.php?status=kosong');
				break;
			}
			$query ='insert into user values("'.$nik.'", "'.$nama.'")';
			$run = mysqli_query($connect,$query); 
			if($run){
				header('Location: login.php?status=sukses');
			}else{
				header('Location: login.php?status=gagal');
			}
			break;
			
		default:	
		{
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Login...</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	</head>
	<body>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
			
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran pengguna baru berhasil! Silahkan masuk";
            } else if($_GET['status'] == 'tidak') {
                echo "<p style ='color:red;'>Maaf pengguna tidak terdaftar</p>";
            }else if($_GET['status'] == 'kosong') {
                echo "<p style ='color:red;'>Maaf NIK dan Nama tidak boleh kosong</p>";
            }else{
				echo "<p style ='color:red;'>Maaf Pendaftaran pengguna baru gagal... NIK sudah ada</p>";
			}
        ?>
    </p>
<?php endif; ?> 
			
	<div class="login">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=login" method="POST">
			<input type="text" name="nik" placeholder="NIK" value="">
			<input type="text" name="nama" placeholder="Nama Lengkap" value="">
			<input type="submit" name="aksi" value="Saya Pengguna Baru">
			<input type="submit" name="aksi" value="Masuk!">
			</form>
	</div>		
	</body>
</html>
<?php
		}
	}	
?>