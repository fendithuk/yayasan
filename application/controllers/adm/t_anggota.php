<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of t_anggota
 *
 * @author phepen
 */
class T_anggota extends Ci_controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_anggota');
        $this->load->model('model_smile');
        $this->load->helper('smiley');
        $this->load->library('table');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "Master";
            $cek['menu2'] = "Tambah Anggota";
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/master/ftambahanggota', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function add() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                $cek['cekl'] = "adm";
                $cek['menu'] = "Master";
                $cek['menu2'] = "Tambah Anggota";
                $cek['msg'] = "";
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/master/ftambahanggota', $cek);
                $this->load->view('admin/adminfooter');
            } else {
                $dataAnggota = array(
                    'iddataangkatan' => NULL,
                    'nama' => $this->input->post('nama'),
                    'thnangkatan' => $this->input->post('angkatan'),
                    'alamat' => $this->input->post('alamat'),
                    'email' => $this->input->post('email'),
                    'status' => "ok"
                );

                $this->model_anggota->add($dataAnggota);
                redirect('adm/t_anggota/success');
            }
        } else {
            redirect('admin/');
        }
    }

    function success() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "Master";
            $cek['menu2'] = "Tambah Anggota";
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/master/ftambahanggota', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
