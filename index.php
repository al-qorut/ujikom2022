<?php
	include "header.php";
	?>
	<div class="welcome">Selamat datang <b><i><?php echo($_SESSION['nama']); ?> </b></i> di aplikasi peduli diri</div>
	<div class="box-button">
	<a href="isidata.php" class="tombol">Isi Catatan Perjalanan</a>
	</div>
	<?php
	include "footer.php";
?>