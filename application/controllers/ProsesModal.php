<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProsesModal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('mod_modal');
	}

	function index(){
		$x['data']=$this->mod_modal->show_responden();		
       $this->load->view('web',$x);
	}

	function simpan_responden(){
		$id_bagian=$this->input->post('id_bagian');
		$nama_responden=ucwords($this->input->post('nama_responden'));
		$umur_responden=$this->input->post('umur_responden');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$pekerjaan_responden=$this->input->post('pekerjaan_responden');
		$pendidikan_responden=$this->input->post('pendidikan_responden');
		$tingkat_kepuasan=$this->input->post('tingkat_kepuasan');
		$this->mod_modal->simpan_responden($id_bagian,$nama_responden,$umur_responden,$jenis_kelamin,$pekerjaan_responden,$pendidikan_responden,$tingkat_kepuasan);
		redirect('ProsesModal');
	}

}
