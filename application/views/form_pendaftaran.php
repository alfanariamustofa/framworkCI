<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
	<head>
		<title>Form Pendaftaran</title>
	</head>
	<body>
		<fieldset>
			<h3>
				Isi form pendaftaran dibawah ini
			</h3>
			<form action="#" method="POST">
				<label>Nama</label>
	<input name="nama" size="20" 
		value="<?php echo $nama_peserta; ?>">
			</form>
		</fieldset>
	</body>
</html>