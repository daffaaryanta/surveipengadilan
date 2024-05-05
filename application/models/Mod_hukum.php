<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_hukum extends CI_Model {

	protected $_table = 'responden';
	
	public function get_total_cetak(){
		$query = $this->db->get_where($this->_table, array('id_bagian' => 2));
		return $query->num_rows();
	}

	 public function lihat(){
		$query = $this->db->get_where($this->_table, array('id_bagian' => 2));
		return $query->result();
	} 
	public function cetak(){
		$query = $this->db->get_where($this->_table, array('id_bagian' => 2));
		return $query->result();
	} 

	public function lihat_id($id_responden){
		$query = $this->db->get_where($this->_table, ['id_responden' => $id_responden]);
		return $query->row();
	}
	public function ubah($data, $id_responden){
		$query = $this->db->set($data);
		$query = $this->db->where(['id_responden' => $id_responden]);
		$query = $this->db->update($this->_table);
		return $query;
	}
	public function hapus($id_responden){
		return $this->db->delete($this->_table, ['id_responden' => $id_responden]);
	}
}