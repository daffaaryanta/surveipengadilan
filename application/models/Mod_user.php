<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_user extends CI_Model
{

	protected $_table = 'user';




	public function lihat()
	{
		//$this->db->select('(SELECT u.id_user, u.nama_user, u.username, r.nama_role FROM user u JOIN role r ON u.id_role = r.id_role)')
		$this->db->select('u.id_user, u.nama_user, u.username, r.nama_role, u.date_created');
		$this->db->from('user u');
		$this->db->join('role r', 'u.id_role = r.id_role');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_total_cetak()
	{
		$this->db->select('u.id_user, u.nama_user, u.username, r.nama_role, u.date_created');
		$this->db->from('user u');
		$this->db->join('role r', 'u.id_role = r.id_role');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cetak()
	{
		$this->db->select('u.id_user, u.nama_user, u.username, r.nama_role, u.date_created');
		$this->db->from('user u');
		$this->db->join('role r', 'u.id_role = r.id_role');
		$query = $this->db->get();
		return $query->result();
	}
	/*public function tambah($id_bagian, $nama_responden, $umur_responden, $jenis_kelamin, $pekerjaan_responden, $pendidikan_responden, $tingkat_kepuasan, $waktu_input)
	{
		$hasil = $this->db->query("INSERT INTO responden (id_bagian,nama_responden,umur_responden,jenis_kelamin,pekerjaan_responden,pendidikan_responden,tingkat_kepuasan,waktu_input) VALUES ('3','$nama_responden','$umur_responden','$jenis_kelamin','$pekerjaan_responden','$pendidikan_responden','$tingkat_kepuasan','$waktu_input')");
		return $hasil;
	}*/
	public function lihat_id($id_user)
	{
		$query = $this->db->get_where($this->_table, ['id_user' => $id_user]);
		return $query->row();
	}
	public function ubah($data, $id_user)
	{
		$query = $this->db->set($data);
		$query = $this->db->where(['id_user' => $id_user]);
		$query = $this->db->update($this->_table);
		return $query;
	}
	public function hapus($id_user)
	{
		return $this->db->delete($this->_table, ['id_user' => $id_user]);
	}
}
