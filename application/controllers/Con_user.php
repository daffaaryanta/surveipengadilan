<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_user');
    }

    function index()
    {
        $this->data['all_user'] = $this->mod_user->lihat();
        $this->data['no'] = 1;
        $this->load->view('admin/user/tampil_user', $this->data);
    }

    public function ubah($id_user)
    {
        $this->data['user'] = $this->mod_user->lihat_id($id_user);
        $this->load->view('admin/user/ubah_user', $this->data);
    }

    public function proses_ubah($id_user)
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'nama_user' => ucwords($this->input->post('nama_user')),
            'username' => $this->input->post('username'),
            'id_role' => $this->input->post('id_role'),
            'date_created' => $this->input->post('date_created'),
        ];

        if ($this->mod_user->ubah($data, $id_user)) {
            redirect('con_user');
        } else {
            redirect('con_user');
        }
    }
    public function hapus($id_user)
    {
        if ($this->mod_user->hapus($id_user)) {
            redirect('con_user');
        } else {
            redirect('con_user');
        }
    }
}
