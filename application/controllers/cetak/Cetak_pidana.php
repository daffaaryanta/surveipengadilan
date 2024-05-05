<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_pidana extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_pidana');
	}

	public function index(){
		
		$this->data['all_pidana'] = $this->mod_pidana->cetak();
		$this->data['total_pidana'] = $this->mod_pidana->get_total_cetak();
		$this->data['no'] = 1;
        $this->load->library('mypdf');
        
        $file_pdf = "laporanpidana";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporanpidana',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
	} 

}