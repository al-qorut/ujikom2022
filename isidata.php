<?php
	include "header.php";
	if(isset($_GET['status'])): 
            if($_GET['status'] == 'sukses'){
                echo "Isi catatan suksess disimpan";
            } else if($_GET['status'] == 'kosong') {
                echo "<p style ='color:red;'>Maaf data tidak boleh kosong</p>";
            }else{
				echo "<p style ='color:red;'>Isi catatan gagal disimpan</p>";
			}
	endif;  ?>
	<div class="list-data">
			<form action="simpan.php" method="POST" class="add">
			<table><tbody>
			<tr><td>Tanggal</td><td><input type="date" name="tgl" placeholder="Tanggal"></tr>
			<tr><td>Pukul</td><td><input type="time" name="jam" placeholder="Jam"></tr>
			<tr><td>Lokasi yang dikujungi</td><td><input type="text" name="lokasi" placeholder="Lokasi yang dikunjungi"></tr>
			<tr><td>Suhu Tubuh</td><td><input type="number" name="suhu" placeholder="Suhu Tubuh"></tr>
			<tr><td colspan=2 align=center></td></tr></tbodY>
			</table>
			<br><div class="box-button">
			<input type="submit" name="simpan" value="Simpan!"></div>
			</form>
	</div>
	<?php
	include "footer.php";
?>