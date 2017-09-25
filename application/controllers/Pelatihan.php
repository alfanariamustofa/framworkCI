<?php

class Pelatihan extends CI_Controller {
	
	public function index(){
		echo '
			<center>
			Selamat datang peserta pelatihan
			</center>';
	}
	
	public function pendaftaran(){
		
		$this->load->view('form_pendaftaran');
		
		$data['nama_peserta']  = "Alfan Aria Mustofa";
		
		$this->load->view('form_pendaftaran',$data);
	}
	
	public function hapus($id = null){
		
		
		if($id == null){
			echo 'id tidak ditemukan!';
		}
		else{
						
			
			//Otomatis load model dengan menambahkan peserta di 
			// folder config/autoload.php -> $autoload['model'] = array('peserta')
			
			//Singkat pemanggilan method model
			
			if( $this->peserta->hapusRecord('tb_peserta', $id) ){
				echo 'Sukses menghapus data record dengan id = '.$id;
			}
			else{
				echo 'Gagal menghapus data record dengan id = '.$id;
			}
			
			
			/*
			//- Manual load model peserta
			//- Inisialisasi model sebagai sebuah variabel
			$this->load->model('peserta');
			$peserta = $this->peserta;
			if( $peserta->hapusRecord('tb_peserta', $id) ){
				echo 'Sukses menghapus data record dengan id = '.$id;
			}
			else{
				echo 'Gagal menghapus data record dengan id = '.$id;
			}
			*/
		}
		
	}
	
	public function ubahPeserta($id = null){
		echo '<a href="'.base_url().'">Kembali</a>';
		echo ' | <a href="'.base_url().'pelatihan/hapus/12">Hapus Data Ini</a>';
	}
	
	
	
	
	
	
	
	
	
	
	
	
}

