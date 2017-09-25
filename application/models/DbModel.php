<?php

class DbModel extends CI_Model {

		public function __construct(){
			parent::__construct();
		}
		
		public function simpan($tabel, $data){
			return $this->db->insert($tabel,$data);
		}
		
		public function update($tabel, $data, $id){
			$this->db->set($data);
			$this->db->where("id_".$tabel." = '$id'");
			return $this->db->update($tabel);
		}
		
		public function hapus($tabel, $id){
			$this->db->where("id_".$tabel." = '$id'");
			return $this->db->delete($tabel);
		}
		
		public function daftar($tabel, $where = null){
			if($where != null ){
				$this->db->where($where);
			}
			return $this->db->get($tabel)->result();
		}
		
		

}