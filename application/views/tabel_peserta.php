<html>
	<head>
		<title>Daftar Peserta</title>
	</head>
	<body>
		<h2>Daftar Peserta Pelatihan</h2>
		<button>Tambah Peserta</button>
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
						<button>Ubah</button>
						<button>Hapus</button>
					</td>
				</tr>
			';
		}
	?>
			</tbody>
		</table>
	</body>
</html>