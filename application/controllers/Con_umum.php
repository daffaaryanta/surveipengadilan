<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_umum extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_umum');
	}

	function index()
	{
	}
	public function admin()
	{
		$this->data['all_umum'] = $this->mod_umum->lihat();
		$this->data['no'] = 1;
		$this->load->view('admin/umum/tampil_umum', $this->data);
	}

	public function pimpinan()
	{
		$this->data['all_umum'] = $this->mod_umum->lihat();
		$this->data['no'] = 1;
		$this->load->view('pimpinan/tampil_umum', $this->data);
	}

	public function ubah($id_responden)
	{
		$this->data['umum'] = $this->mod_umum->lihat_id($id_responden);
		$this->load->view('admin/umum/ubah_umum', $this->data);
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

		if ($this->mod_umum->ubah($data, $id_responden)) {
			redirect('con_umum/admin');
		} else {
			redirect('con_umum/admin');
		}
	}
	public function hapus($id_responden)
	{
		if ($this->mod_umum->hapus($id_responden)) {
			redirect('con_umum/admin');
		} else {
			redirect('con_umum/admin');
		}
	}
}
