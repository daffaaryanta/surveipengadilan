<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_hukum extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_hukum');
	}

	public function index(){
		
		$this->data['all_hukum'] = $this->mod_hukum->cetak();
		$this->data['total_hukum'] = $this->mod_hukum->get_total_cetak();
		$this->data['no'] = 1;
        $this->load->library('mypdf');
        
        $file_pdf = "laporanhukum";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporanhukum',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
	} 

}