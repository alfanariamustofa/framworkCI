<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Pelatihan Web</title>

    <!-- Bootstrap -->
    <link href="<?php echo str_replace("index.php/","",base_url());?>assets/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		.navbar{
			border-radius:0px;
		}
	</style>
	
  </head>
  <body>
	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Pelatihan Web</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#">Page 1</a></li>
			  <li><a href="#">Page 2</a></li>
			  <li><a href="#">Page 3</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-12 col-xs-12">
				
				<h2>Daftar Peserta Pelatihan</h2>
				<button class="btn btn-success" onclick="tombolAksi('tambah')">Tambah Peserta</button>
				<table class="table table-default table-hover">
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
							<td>'.$row->bidang_konsentarasi.'</td>
							<td>
								<button class="btn btn-warning btn-sm" onclick="tombolUbah('.$row->id_peserta.')">Ubah</button>
								<button class="btn btn-danger btn-sm" onclick="tombolHapus('.$row->id_peserta.')">Hapus</button>
							</td>
						</tr>
					';
				}
			?>
					</tbody>
				</table>
				
			</div>
		</div>
		
	</div>
	
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo str_replace("index.php/","",base_url());?>assets/js/jquery.min.js"></script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo str_replace("index.php/","",base_url());?>assets/js/bootstrap.min.js"></script>
	
	<script>

		function tombolAksi(halaman){
			window.location = "<?php echo base_url();?>"+"peserta/"+halaman;
		}

		function tombolHapus(id){
			if(confirm("Apakah anda yakin ingin menghapus data dengan id "+id)){
				window.location = "<?php echo base_url();?>"+"peserta/hapus/"+id;
			}
		}

		function tombolUbah(id){
			window.location = "<?php echo base_url();?>"+"peserta/ubah/"+id;
		}

	</script>
  
  </body>
</html>