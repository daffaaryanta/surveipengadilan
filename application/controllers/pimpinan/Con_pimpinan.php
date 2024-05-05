<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_pimpinan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_hukum');
        $this->load->model('mod_perdata');
        $this->load->model('mod_phi');
        $this->load->model('mod_pidana');
        $this->load->model('mod_tipikor');
        $this->load->model('mod_umum');
        is_logged_in();
    }

    public function hukum()
    {
        $this->data['all_hukum'] = $this->mod_hukum->lihat();
        $this->data['no'] = 1;
        $this->data['SKPM'] = 'Survei Kepuasan Pelayanan Masyarakat';
        $this->load->view('pimpinan/tampil_hukum', $this->data);
    }

    public function perdata()
    {
        $this->data['all_perdata'] = $this->mod_perdata->lihat();
        $this->data['no'] = 1;
        $this->load->view('pimpinan/tampil_perdata', $this->data);
    }

    public function phi()
    {
        $this->data['all_phi'] = $this->mod_phi->lihat();
        $this->data['no'] = 1;
        $this->load->view('pimpinan/tampil_phi', $this->data);
    }
    public function pidana()
    {
        $this->data['all_pidana'] = $this->mod_pidana->lihat();
        $this->data['no'] = 1;
        $this->data['SKPM'] = 'Survei Kepuasan Pelayanan Masyarakat';
        $this->load->view('pimpinan/tampil_pidana', $this->data);
    }
    public function tipikor()
    {
        $this->data['all_tipikor'] = $this->mod_tipikor->lihat();
        $this->data['no'] = 1;
        $this->load->view('pimpinan/tampil_tipikor', $this->data);
    }
    public function umum()
    {
        $this->data['all_umum'] = $this->mod_umum->lihat();
        $this->data['no'] = 1;
        $this->load->view('pimpinan/tampil_umum', $this->data);
    }
}
