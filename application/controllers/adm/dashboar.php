<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboar
 *
 * @author phepen
 */
class dashboar extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_smile');
        $this->load->model('model_conter');
        $this->load->helper('smiley');
        $this->load->library('table');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {
            $i = 0;
            foreach ($this->model_conter->getLimit2() as $r) {
                $i++;
                $cek["aa$i"] = $this->model_conter->coun($r->tanggal);
            }
            $cek['conTgl'] = $this->model_conter->getAll2();
            $cek['cekl'] = "";
            $cek['msg'] = "";
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/fdashboar', $cek);
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
                $i = 0;
                foreach ($this->model_conter->getLimit2() as $r) {
                    $i++;
                    $cek["aa$i"] = $this->model_conter->coun($r->tanggal);
                }
                $cek['cekl'] = "";
                $cek['msg'] = "gagal";
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/fdashboar', $cek);
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
                redirect('adm/dashboar/success');
            }
        } else {
            redirect('admin/');
        }
    }

    function success() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {
            $i = 0;
            foreach ($this->model_conter->getLimit2() as $r) {
                $i++;
                $cek["aa$i"] = $this->model_conter->coun($r->tanggal);
            }
            $cek['msg'] = "success";
            $cek['cekl'] = "";

            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/fdashboar', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
