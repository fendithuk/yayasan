<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author phepen
 */
class Admin extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        $this->load->library('form_validation');
        $this->load->helper('smiley');
        $this->load->library('table');
        $this->load->model('model_smile');
    }

    function index() {

        $this->load->view('admin/adminheader');
        $this->load->view('admin/flogin');
        $this->load->view('admin/adminfooter');
    }

    function cekLogin() {
        $username = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        foreach ($this->model_login->getAll() as $r):
            if ($username == $r->username && $pass == $r->password) {
                $data = array('ID' => $r->idadmin, 'USERNAME' => $r->username, 'PASS' => $r->password);
                $this->session->set_userdata($data);
                redirect('adm/dashboar');
            } else {
                $this->index();
            }
        endforeach;
    }

    function logout() {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('ID');
        $this->index();
    }

    function change() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {
            $this->form_validation->set_rules('admin', 'Nama', 'required');
            $this->form_validation->set_rules('pl', 'Nama', 'required');
            $this->form_validation->set_rules('pb', 'Angkatan', 'required');
            $this->form_validation->set_rules('upb', 'Alamat', 'required');
            $pl = $this->input->post('pl');
            $pb = $this->input->post('pb');
            $upb = $this->input->post('upb');


            if (md5($pl) == $this->session->userdata('PASS') || $pb == $upb) {
                if ($this->form_validation->run() == FALSE) {
                    $cek['cekl'] = "";
                    $cek['msg'] = "gagal";
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/fdashboar', $cek);
                    $this->load->view('admin/adminfooter');
                } else {

                    $dataAdmin = array(
                        'username' => $this->input->post('admin'),
                        'password' => md5($this->input->post('upb')),
                    );

                    $this->model_login->editAdmin($this->input->post('idadmin'), $dataAdmin);
                    redirect('admin/logout');
                }
            } else {
                $cek['cekl'] = "";
                $cek['msg'] = "gagal2";
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/fdashboar', $cek);
                $this->load->view('admin/adminfooter');
            }
        }
    }

}

?>
