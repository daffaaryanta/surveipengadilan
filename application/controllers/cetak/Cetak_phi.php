<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_phi extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_phi');
	}

	public function index(){
		
		$this->data['all_phi'] = $this->mod_phi->cetak();
		$this->data['total_phi'] = $this->mod_phi->get_total_cetak();
		$this->data['no'] = 1;
        $this->load->library('mypdf');
        $file_pdf = "laporanphi";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporanphi',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
	} 

}