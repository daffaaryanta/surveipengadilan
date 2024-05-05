<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_perdata extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_perdata');
	}

	public function index()
	{
	}
	public function admin()
	{
		$this->data['all_perdata'] = $this->mod_perdata->lihat();
		$this->data['no'] = 1;
		$this->load->view('admin/perdata/tampil_perdata', $this->data);
	}
	public function pimpinan()
	{
		$this->data['all_perdata'] = $this->mod_perdata->lihat();
		$this->data['no'] = 1;
		$this->load->view('pimpinan/tampil_perdata', $this->data);
	}

	public function ubah($id_responden)
	{
		$this->data['perdata'] = $this->mod_perdata->lihat_id($id_responden);

		$this->load->view('admin/perdata/ubah_perdata', $this->data);
	}

	public function proses_ubah($id_responden)
	{
		$data = [
			'id_responden' => $this->input->post('id_responden'),
			'id_bagian' => $this->input->post('id_bagian'),
			'nama_responden' => ucwords($this->input->post('nama_responden')),
			'umur_responden' => $this->input->post('umur_responden'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'pekerjaan_responden' => $this->input->post('pekerjaan_responden'),
			'pendidikan_responden' => $this->input->post('pendidikan_responden'),
			'tingkat_kepuasan' => $this->input->post('tingkat_kepuasan'),
			'waktu_input' => $this->input->post('waktu_input'),
		];

		if ($this->mod_perdata->ubah($data, $id_responden)) {
			redirect('con_perdata/admin');
		} else {
			redirect('con_perdata/admin');
		}
	}

	public function hapus($id_responden)
	{
		if ($this->mod_perdata->hapus($id_responden)) {
			redirect('con_perdata/admin');
		} else {
			redirect('con_perdata/admin');
		}
	}
}
