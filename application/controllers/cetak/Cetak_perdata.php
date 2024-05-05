<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_perdata extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_perdata');
	}

	public function index(){
		
		$this->data['all_perdata'] = $this->mod_perdata->cetak();
		$this->data['total_perdata'] = $this->mod_perdata->get_total_cetak();
		$this->data['no'] = 1;
        $this->load->library('mypdf');
        
        $file_pdf = "laporanperdata";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporanperdata',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
	} 

}