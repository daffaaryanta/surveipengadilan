<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->form_validation->set_rules('username_login', 'Username', 'required|trim', [
            'required' => 'Username tidak boleh kosong!',
        ]);
        $this->form_validation->set_rules('password_login', 'Password', 'required|trim', [
            'required' => 'Password tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->post('username_login');
        $password = $this->input->post('password_login');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            //usernya ada
            if ($user['active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'id_role' => $user['id_role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['id_role'] == 1) {
                        redirect('pimpinan/overview');
                    } else {
                        redirect('admin/overview');
                    }
                } else {
                    $this->session->set_flashdata('messagePassword', '<span class="error">Password Salah</span>');
                    $this->session->set_flashdata('UsernameValueBefore', $username);
                    $this->session->set_flashdata('PasswordValueBefore', $password);
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('messageActivation', '<span class="error">User belum diaktivasi</span>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('UsernameValueBefore', $username);
            $this->session->set_flashdata('PasswordValueBefore', $password);
            $this->session->set_flashdata('messageUsername', '<span class="error">User belum terdaftar</span>');
            redirect('auth');
        }
    }


    public function registrasi()
    {
        $this->form_validation->set_rules('register_name', 'Nama_user', 'required|trim', [
            'required' => 'Nama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules(
            'username_signup',
            'Username',
            'required|trim|is_unique[user.username]',
            [
                'required' => 'Username tidak boleh kosong!',
                'is_unique' => 'Username telah terdaftar!'
            ]
        );
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password tidak boleh kosong!',
            'min_length' => 'jumlah karakter password minimal 3',
            'matches' => 'Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Password tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $error['stats'] = 'error';
            $this->load->view('register', $error);
        } else {
            $data = [
                'nama_user' => ucwords($this->input->post('username_signup')),
                'username' => $this->input->post('username_signup'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_role' => 2,
                'active' => 1

            ];

            $this->db->insert('user', $data);
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        redirect('auth');
    }
}
