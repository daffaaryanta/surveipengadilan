<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Con_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('mod_user');
        is_logged_in_usertable();
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
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'date_created' => $this->input->post('date_created'),
        ];

        if ($this->mod_user->ubah($data, $id_user)) {
            redirect('admin/con_user');
        } else {
            redirect('admin/con_user');
        }
    }
    public function hapus($id_user)
    {
        if ($this->mod_user->hapus($id_user)) {
            redirect('admin/con_user');
        } else {
            redirect('admin/con_user');
        }
    }

    public function tambah()
    {
        // $this->data['user'] = $this->mod_user->lihat_id($id_user);
        $this->load->view('admin/user/tambah_user');
    }
    public function proses_tambah()
    {

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[user.username]',
            [
                'required' => 'Username tidak boleh kosong!',
                'is_unique' => 'Username telah terdaftar!'
            ]
        );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password tidak boleh kosong!',
            'matches' => 'Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Password tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/user/tambah_user');
        } else {
            $data = [
                'nama_user' => ucwords($this->input->post('nama_user')),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_role' => $this->input->post('id_role'),
                'active' => 1

            ];

            $this->db->insert('user', $data);

            redirect('admin/con_user');
        }
    }
}
