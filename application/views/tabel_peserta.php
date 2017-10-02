<html>
	<head>
		<title>Daftar Peserta</title>
	</head>
	<body>
		<h2>Daftar Peserta Pelatihan</h2>
		<button onclick="tombolAksi('tambah')">Tambah Peserta</button>
		<table>
			<thead>
				<tr>
					<th>Id Peserta</th>
					<th>Nama Peserta</th>
					<th>Program Studi</th>
					<th>No Telepon</th>
					<th>Bidang Konsentrasi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach($peserta as $row){
			echo '
				<tr>
					<td>'.$row->id_peserta.'</td>
					<td>'.$row->nama_peserta.'</td>
					<td>'.$row->program_studi.'</td>
					<td>'.$row->telepon.'</td>
					<td>'.$row->id_bidang.'</td>
					<td>
						<button onclick="tombolUbah('.$row->id_peserta.')">Ubah</button>
						<button onclick="tombolHapus('.$row->id_peserta.')">Hapus</button>
					</td>
				</tr>
			';
		}
	?>
			</tbody>
		</table>
		
<script>

function tombolAksi(halaman){
	window.location = "<?php echo base_url();?>"+"peserta/"+halaman;
}

function tombolHapus(id){
	if(confirm("Apakah anda yakin ingin menghapus data dengan id "+id)){
		window.location = "<?php echo base_url();?>"+"peserta/hapus/"+id;
	}
}

function tombalUbah(id){
	window.location = "<?php echo base_url();?>"+"peserta/ubah/"+id;
}

</script>
		
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>