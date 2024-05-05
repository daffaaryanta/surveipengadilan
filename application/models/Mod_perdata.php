<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_perdata extends CI_Model {

	protected $_table = 'responden';
	

	public function lihat(){
		$query = $this->db->get_where($this->_table, array('id_bagian' => 4));
		return $query->result();
	} 
	public function get_total_cetak(){
		$query = $this->db->get_where($this->_table, array('id_bagian' => 4));
		return $query->num_rows();
	}
	public function cetak(){
		$query = $this->db->get_where($this->_table, array('id_bagian' => 4));
		return $query->result();
	} 

	public function tambah($id_bagian,$nama_responden,$umur_responden,$jenis_kelamin,$pekerjaan_responden,$pendidikan_responden,$tingkat_kepuasan,$waktu_input){
		$hasil=$this->db->query("INSERT INTO responden (id_bagian,nama_responden,umur_responden,jenis_kelamin,pekerjaan_responden,pendidikan_responden,tingkat_kepuasan,waktu_input) VALUES ('4','$nama_responden','$umur_responden','$jenis_kelamin','$pekerjaan_responden','$pendidikan_responden','$tingkat_kepuasan','$waktu_input')");
		return $hasil;
		
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
	//public function kode_perdata(){
	//	$kodeperdata = $this->db->query('SELECT id_bagian FROM responden WHERE id_bagian=1');
	//	return $kodeperdata->result();
	//}

	//function show_perdata(){
	//	$hasilperdata=$this->db->query('SELECT * FROM RESPONDEN');
	//	return $hasilperdata;
	//	$this->load->view('admin/admin_perdata');
	//}
}