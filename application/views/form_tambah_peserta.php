<?php
	if(!isset($data)){
		$data = (object) array(
			"id_peserta" 	=> "",
			"nama_peserta" 	=> "",
			"program_studi" => "",
			"telepon"		=> "",
			"id_bidang"		=> ""
		);
	}
?>

<html>
	<head>
		<title>Tambah Peserta</title>
	</head>
	<body>
		<h2>Tambah Peserta Pelatihan</h2>
<form action="<?php echo base_url().'peserta/simpan/'.$data->id_peserta;?>" method="POST">
			<label>Nama Peserta</label><br>
<input type="text" name="nama_peserta" value="<?php echo $data->nama_peserta;?>" required><br>
			<label>Program Studi</label><br>
	<select name="program_studi" required>
		<option value="Teknik Komputer" 
		<?php echo $data->program_studi=='Teknik Komputer' ? 'selected' : '';?>
		>Teknik Komputer</option>
		<option value="Manajemen Informatika" 
		<?php echo $data->program_studi=='Manajemen Informatika' ? 'selected' : '';?>
		>Manajemen Informatika</option>
		<option value="Teknik Informatika"
		<?php echo $data->program_studi=='Teknik Informatika' ? 'selected' : '';?>
		>Teknik Informatika</option>
		<option value="Sistem Informasi"
		<?php echo $data->program_studi=='Sistem Informasi' ? 'selected' : '';?>
		>Sistem Informasi</option>
	</select><br>
			<label>No Telepon</label><br>
			<input type="text" name="telepon" value="<?php echo $data->telepon;?>" required><br>
			<label>Bidang Konsentrasi</label><br>
			<select name="id_bidang" required>
<?php
$bidang = $this->db->get('bidang')->result();
foreach($bidang as $row){
	if($row->id_bidang == $data->id_bidang){
		echo '<option value="'.$row->id_bidang.'" selected>'.$row->bidang_konsentarasi.'</option>';
	}
	else{
		echo '<option value="'.$row->id_bidang.'">'.$row->bidang_konsentarasi.'</option>';
	}
}
?>
			</select><br><br>
			<input type="submit" value="Simpan">
		</form>
	</body>
</html>