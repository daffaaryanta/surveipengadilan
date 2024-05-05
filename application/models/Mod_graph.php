<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_graph extends CI_Model {

    protected $_table = 'responden';

    //get nilai kepuasan
    public function get_nilai_sangat_puas(){
        $query = $this->db->get_where($this->_table, array("tingkat_kepuasan" => "Sangat Puas"));
		return $query->num_rows();
    }
    public function get_nilai_cukup_puas(){
        $query = $this->db->get_where($this->_table, array("tingkat_kepuasan" => "Cukup Puas"));
		return $query->num_rows();
    }
    public function get_nilai_tidak_puas(){
        $query = $this->db->get_where($this->_table, array("tingkat_kepuasan" => "Tidak Puas"));
		return $query->num_rows();
    }

    //get jenis kelamin
    public function get_jenis_kelamin_l(){
        $query = $this->db->get_where($this->_table, array("jenis_kelamin" => "Laki-laki"));
		return $query->num_rows();
    }
    public function get_jenis_kelamin_p(){
        $query = $this->db->get_where($this->_table, array("jenis_kelamin" => "Perempuan"));
		return $query->num_rows();
    }

    //get pekerjaan
    public function get_pekerjaan_negeri(){
        $query = $this->db->get_where($this->_table, array("pekerjaan_responden" => "PNS/TNI/POLRI"));
		return $query->num_rows();
    }
    public function get_pekerjaan_swasta(){
        $query = $this->db->get_where($this->_table, array("pekerjaan_responden" => "Pegawai/Swasta"));
		return $query->num_rows();
    }
    public function get_pekerjaan_pelajar(){
        $query = $this->db->get_where($this->_table, array("pekerjaan_responden" => "Pelajar/Mahasiswa"));
		return $query->num_rows();
    }
    public function get_pekerjaan_usahawan(){
        $query = $this->db->get_where($this->_table, array("pekerjaan_responden" => "Wiraswasta/Usahawan"));
		return $query->num_rows();
    }
    public function get_pekerjaan_lain(){
        $query = $this->db->get_where($this->_table, array("pekerjaan_responden" => "Lain-lain"));
		return $query->num_rows();
    }

    //get pendidikan
    public function get_pendidikan_sd(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "SD/Sederajat"));
		return $query->num_rows();
    }
    public function get_pendidikan_smp(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "SMP/Sederajat"));
		return $query->num_rows();
    }
    public function get_pendidikan_sma(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "SMP/Sederajat"));
		return $query->num_rows();
    }
    public function get_pendidikan_d_tiga(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "D3"));
		return $query->num_rows();
    }
    public function get_pendidikan_s_satu(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "S1"));
		return $query->num_rows();
    }
    public function get_pendidikan_s_dua(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "S2"));
		return $query->num_rows();
    }
    public function get_pendidikan_s_tiga(){
        $query = $this->db->get_where($this->_table, array("pendidikan_responden" => "S3"));
		return $query->num_rows();
    }
}