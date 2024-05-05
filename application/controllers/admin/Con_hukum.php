<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_hukum extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_hukum');
		is_logged_in();
	}

	public function index()
	{
		$this->data['all_hukum'] = $this->mod_hukum->lihat();
		$this->data['no'] = 1;
		$this->data['SKPM'] = 'Survei Kepuasan Pelayanan Masyarakat';
		$this->load->view('admin/hukum/tampil_hukum', $this->data);
	}



	public function ubah($id_responden)
	{
		$this->data['hukum'] = $this->mod_hukum->lihat_id($id_responden);

		$this->load->view('admin/hukum/ubah_hukum', $this->data);
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
			'kritiksaran' => $this->input->post('kritiksaran'),
			'tingkat_kepuasan' => $this->input->post('tingkat_kepuasan'),
			'waktu_input' => $this->input->post('waktu_input'),
		];

		if ($this->mod_hukum->ubah($data, $id_responden)) {
			redirect('admin/con_hukum');
		} else {
			redirect('admin/con_hukum');
		}
	}
	public function hapus($id_responden)
	{
		if ($this->mod_hukum->hapus($id_responden)) {
			redirect('admin/con_hukum');
		} else {
			redirect('admin/con_hukum');
		}
	}
}
