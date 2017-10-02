<html>
	<head>
		<title>Tambah Peserta</title>
	</head>
	<body>
		<h2>Tambah Peserta Pelatihan</h2>
		<form action="<?php echo base_url().'peserta/simpan';?>" method="POST">
			<label>Nama Peserta</label><br>
			<input type="text" name="nama_peserta" required><br>
			<label>Program Studi</label><br>
			<select name="program_studi" required>
				<option>Teknik Komputer</option>
				<option>Manajemen Informatika</option>
				<option>Teknik Informatika</option>
				<option>Sistem Informasi</option>
			</select><br>
			<label>No Telepon</label><br>
			<input type="text" name="telepon" required><br>
			<label>Bidang Konsentrasi</label><br>
			<select name="id_bidang" required>
<?php
$bidang = $this->db->get('bidang')->result();
foreach($bidang as $row){
	echo '<option value="'.$row->id_bidang.'">'.$row->bidang_konsentarasi.'</option>';
}
?>
			</select><br><br>
			<input type="submit" value="Simpan">
		</form>
	</body>
</html>