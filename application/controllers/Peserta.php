<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function index()
	{
		$data['peserta'] = $this->DbModel->daftar('peserta,bidang',"peserta.id_bidang=bidang.id_bidang");
		$this->load->view('tabel_peserta',$data);
	}
	
	public function simpan($id=null){
		$set = array(
				"id_bidang" 	=> $this->input->post('id_bidang'),
				"nama_peserta" 	=> $this->input->post('nama_peserta'),
				"program_studi"	=> $this->input->post('program_studi'),
				"telepon"		=> $this->input->post('telepon')
			);
			
		if($id==null){
			$insert = $this->DbModel->simpan('peserta',$set);
		}
		else{
			$insert = $this->DbModel->update('peserta',$set,$id);
		}
		
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
	
	public function ubah($id=null){
		if($id==null){
			$this->pesan('parameter id tidak ditemukan','peserta');
		}
		else{
			$peserta = $this->db->where("id_peserta=$id")->get('peserta')->result();
			if(count($peserta)>0){
				$data['data'] = $peserta[0];
				$this->load->view('form_tambah_peserta',$data);
			}
			else{
				$this->pesan('data peserta dengan id '.$id.' tidak ditemukan','peserta');
			}
		}
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


