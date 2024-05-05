<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_tipikor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mod_tipikor');
		is_logged_in();
	}

	function index()
	{
		$this->data['all_tipikor'] = $this->mod_tipikor->lihat();
		$this->data['no'] = 1;
		$this->load->view('admin/tipikor/tampil_tipikor', $this->data);
	}



	public function ubah($id_responden)
	{
		$this->data['tipikor'] = $this->mod_tipikor->lihat_id($id_responden);

		$this->load->view('admin/tipikor/ubah_tipikor', $this->data);
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

		if ($this->mod_tipikor->ubah($data, $id_responden)) {
			redirect('admin/con_tipikor');
		} else {
			redirect('admin/con_tipikor');
		}
	}

	public function hapus($id_responden)
	{
		if ($this->mod_tipikor->hapus($id_responden)) {
			redirect('admin/con_tipikor');
		} else {
			redirect('admin/con_tipikor');
		}
	}
}
