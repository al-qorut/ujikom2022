<?php
	include "header.php";
	require_once "config.php";
	?>
	<div class="list-catatan">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-sort">
			<label for="list">Urutkan Berdasarkan </label>
			<select name="sort">
				<option value="tgl">Tanggal</option>
				<option value="waktu">Waktu</option>
				<option value="lokasi">Lokasi</option>
				<option value="suhu">Suhu</option>
			</select>
			<input type="submit" value="Urutkan"/>
		</form>
		<div class="list-data">
		<?php
			$sort = 'tgl';
			if(!empty($_POST['sort'])){
				$sort = $_POST['sort'];
			}
			$query = 'select * from catat where nik="'.$_SESSION['nik'].'" order by '.$sort;
			$data = mysqli_query($connect, $query);
			echo "<table width=100% border=0><thead><tr><th>Tanggal</th><th>Jam</th><th>Tempat</th><th>Suhu</th></th></thead>";
			while($row = mysqli_fetch_array($data)){
				echo "<tr><td>".$row['tgl']."</td><td>".$row['waktu']."</td><td>".$row['lokasi']."</td><td>".$row['suhu']."</td></tr>";
			}
			echo "</tbody></table>";
			echo '<div class="box-button"><a href="isidata.php" class="tombol">Isi Catatan Perjalanan</a></div>';	
		?>
		</div>
	</div>
	<?php
	include "footer.php";
?>