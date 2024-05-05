<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_modal extends CI_Model {



	function show_responden(){
		$hasil=$this->db->query("SELECT * FROM responden");
		return $hasil;
	}

	function simpan_responden($id_bagian,$nama_responden,$umur_responden,$jenis_kelamin,$pekerjaan_responden,$pendidikan_responden,$tingkat_kepuasan){
		$hasil=$this->db->query("INSERT INTO responden (id_bagian,nama_responden,umur_responden,jenis_kelamin,pekerjaan_responden,pendidikan_responden,tingkat_kepuasan) VALUES ('$id_bagian','$nama_responden','$umur_responden','$jenis_kelamin','$pekerjaan_responden','$pendidikan_responden','$tingkat_kepuasan')");
		return $hasil;
	}
	}
