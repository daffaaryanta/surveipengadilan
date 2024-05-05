<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_user');
    }

    public function index()
    {
        $this->load->library('mypdf');
        $this->data['all_user'] = $this->mod_user->cetak();
        $this->data['total_user'] = $this->mod_user->get_total_cetak();
        $this->data['no'] = 1;
        $file_pdf = "laporanuser";
        $paper = "A4";
        $orientation = "landscape";
        $html = $this->load->view('laporan/laporanuser',  $this->data, true);
        $this->mypdf->generate($html, $file_pdf, $paper, $orientation);
    }
}
