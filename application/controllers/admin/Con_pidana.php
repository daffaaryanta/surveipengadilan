<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_pidana extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_pidana');
		is_logged_in();
	}

	function index()
	{
		$this->data['all_pidana'] = $this->mod_pidana->lihat();
		$this->data['no'] = 1;
		$this->load->view('admin/pidana/tampil_pidana', $this->data);
	}



	public function ubah($id_responden)
	{
		$this->data['pidana'] = $this->mod_pidana->lihat_id($id_responden);

		$this->load->view('admin/pidana/ubah_pidana', $this->data);
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

		if ($this->mod_pidana->ubah($data, $id_responden)) {
			redirect('admin/con_pidana');
		} else {
			redirect('admin/con_pidana');
		}
	}
	public function hapus($id_responden)
	{
		if ($this->mod_pidana->hapus($id_responden)) {
			redirect('admin/con_pidana');
		} else {
			redirect('admin/con_pidana');
		}
	}
}
