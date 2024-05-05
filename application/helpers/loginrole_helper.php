<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $id_role = $ci->session->userdata('id_role');

        $menu = $ci->uri->segment(1);
        $querymenu = $ci->db->get_where('role', ['nama_role' => $menu])->row_array();
        $menu_id = $querymenu['id_role'];
        if ($menu_id != $id_role) {
            redirect('auth/block');
        }
    }
}

function is_logged_in_overview()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $id_role = $ci->session->userdata('id_role');

        $menu = $ci->uri->segment(1);
        $querymenu = $ci->db->get_where('role', ['nama_role' => $menu])->row_array();
        $menu_id = $querymenu['id_role'];
        if ($menu_id != $id_role) {
            redirect('auth/block');
        }
    }
}
function is_logged_in_usertable()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $id_role = $ci->session->userdata('id_role');

        if ($id_role == 1) {
            redirect('auth/block');
        }
    }
}
