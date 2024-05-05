<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_umum extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_umum');
	}

	public function index(){
		
		$this->data['all_umum'] = $this->mod_umum->cetak();
		$this->data['total_umum'] = $this->mod_umum->get_total_cetak();
		$this->data['no'] = 1;
		$this->load->library('mypdf');
        $file_pdf = "laporanumum";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporanumum',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
	} 

}