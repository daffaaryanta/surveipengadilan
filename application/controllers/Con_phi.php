<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_phi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_phi');
	}

	function index()
	{
	}
	public function admin()
	{
		$this->data['all_phi'] = $this->mod_phi->lihat();
		$this->data['no'] = 1;
		$this->load->view('admin/phi/tampil_phi', $this->data);
	}
	public function pimpinan()
	{
		$this->data['all_phi'] = $this->mod_phi->lihat();
		$this->data['no'] = 1;
		$this->load->view('pimpinan/tampil_phi', $this->data);
	}

	public function ubah($id_responden)
	{
		$this->data['phi'] = $this->mod_phi->lihat_id($id_responden);

		$this->load->view('admin/phi/ubah_phi', $this->data);
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

		if ($this->mod_phi->ubah($data, $id_responden)) {
			redirect('con_phi/admin');
		} else {
			redirect('con_phi/admin');
		}
	}
	public function hapus($id_responden)
	{
		if ($this->mod_phi->hapus($id_responden)) {
			redirect('con_phi/admin');
		} else {
			redirect('con_phi/admin');
		}
	}
}
