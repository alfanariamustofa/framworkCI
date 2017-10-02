<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function index()
	{
		$data['peserta'] = $this->DbModel->daftar('peserta',null);
		$this->load->view('tabel_peserta',$data);
	}
	
	public function simpan(){
		$set = array(
				"id_bidang" 	=> $this->input->post('id_bidang'),
				"nama_peserta" 	=> $this->input->post('nama_peserta'),
				"program_studi"	=> $this->input->post('program_studi'),
				"telepon"		=> $this->input->post('telepon')
			);

		$insert = $this->DbModel->simpan('peserta',$set);
		
		if($insert){
			$this->pesan('sukses simpan data peserta','peserta');
		}
		else{
			$this->pesan('gagal simpan data peserta','peserta');
		}
	}
	
	public function tambah(){
		$this->load->view('form_tambah_peserta');
	}
	
	public function hapus($id = null){
		if($id==null){
			$this->pesan('Maaf paramater id tidak ditemukan atau kosong','peserta');
		}
		else{
			$hapus = $this->DbModel->hapus('peserta',$id);
			if($hapus){
				$this->pesan('sukses hapus data peserta','peserta');
			}
			else{
				$this->pesan('gagal hapus data peserta','peserta');
			}
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	private function pesan($pesan,$landing){
		echo '
			<script>
				alert("'.$pesan.'");
				window.location = "'.base_url().$landing.'";
			</script>
		';
	}
}


