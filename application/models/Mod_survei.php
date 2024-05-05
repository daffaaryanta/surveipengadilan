<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_Survei extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function GetResult()
	{
		$senang = $this->db->query("SELECT * FROM responden WHERE tingkat_kepuasan = 'Sangat Puas'")->row_array();
		$cukup = $this->db->query("SELECT * FROM responden WHERE tingkat_kepuasan = 'Cukup Puas'")->row_array();
		$kurang = $this->db->query("SELECT * FROM responden WHERE tingkat_kepuasan = 'Kurang Puas'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
	}
}
