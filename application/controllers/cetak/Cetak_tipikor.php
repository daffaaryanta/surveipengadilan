<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_tipikor extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_tipikor');
	}

	public function index(){
		
		$this->data['all_tipikor'] = $this->mod_tipikor->cetak();
		$this->data['total_tipikor'] = $this->mod_tipikor->get_total_cetak();
		$this->data['no'] = 1;
        $this->load->library('mypdf');
        
        $file_pdf = "laporantipikor";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporantipikor',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
	} 

}