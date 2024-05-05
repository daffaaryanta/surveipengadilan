<?php

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_graph');
    }

    public function index()
    {
        //graphic data
        $data['SP'] = $this->mod_graph->get_nilai_sangat_puas();
        $data['CP'] = $this->mod_graph->get_nilai_cukup_puas();
        $data['TP'] = $this->mod_graph->get_nilai_tidak_puas();

        //IKM calculation variable
        $data['SP_VALUE'] = $data['SP'] * 3;
        $data['CP_VALUE'] = $data['CP'] * 2;
        $data['TP_VALUE'] = $data['TP'];
        $data['TOTAL_VALUE'] = $data['SP_VALUE'] + $data['CP_VALUE'] + $data['TP_VALUE'];
        $data['TOTAL_MAX'] = ($data['SP'] + $data['CP'] + $data['TP']) * 3;

        //responden data
        $data['TOTAL_RESPONDEN'] = $data['SP'] + $data['CP'] + $data['TP'];
        //jenis kelamin
        $data['JK_LK'] = $this->mod_graph->get_jenis_kelamin_l();
        $data['JK_PR'] = $this->mod_graph->get_jenis_kelamin_p();
        //pekerjaan
        $data['K_NEGERI'] = $this->mod_graph->get_pekerjaan_negeri();
        $data['K_SWASTA'] = $this->mod_graph->get_pekerjaan_swasta();
        $data['K_PELAJAR'] = $this->mod_graph->get_pekerjaan_pelajar();
        $data['K_USAHAWAN'] = $this->mod_graph->get_pekerjaan_usahawan();
        $data['K_LAIN'] = $this->mod_graph->get_pekerjaan_lain();
        //pendidikan
        $data['P_SD'] = $this->mod_graph->get_pendidikan_sd();
        $data['P_SMP'] = $this->mod_graph->get_pendidikan_smp();
        $data['P_SMA'] = $this->mod_graph->get_pendidikan_sma();
        $data['P_D_TIGA'] = $this->mod_graph->get_pendidikan_d_tiga();
        $data['P_S_SATU'] = $this->mod_graph->get_pendidikan_s_satu();
        $data['P_S_DUA'] = $this->mod_graph->get_pendidikan_s_dua();
        $data['P_S_TIGA'] = $this->mod_graph->get_pendidikan_s_tiga();
        //nama user
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // nama sistem
        $data['SKPM'] = 'Survei Kepuasan Pelayanan Masyarakat';

        // load view admin/overview.php


        $this->load->view('pimpinan/overview', $data);
    }
}
