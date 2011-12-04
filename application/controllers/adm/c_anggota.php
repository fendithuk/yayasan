<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_anggota
 *
 * @author phepen
 */
class C_anggota extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_anggota');
        $this->load->library('form_validation');
    }

    function index() {
        $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "anggota";
        $cek['msg'] = "";
        $cek['anggota'] = $this->model_anggota->getAll();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fanggota', $cek);
        $this->load->view('admin/adminfooter');
    }

    function edit() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "anggota";
            $cek['msg'] = "gagal";
            $cek['anggota'] = $this->model_anggota->getAll();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fanggota', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            $dataAnggota = array(
                'nama' => $this->input->post('nama'),
                'thnAngkatan' => $this->input->post('angkatan'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
            );
            $id = $this->input->post('idangkatan');
            $this->model_anggota->editAnggota($id, $dataAnggota);
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "anggota";
            $cek['msg'] = "success";
            $cek['anggota'] = $this->model_anggota->getAll();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fanggota', $cek);
            $this->load->view('admin/adminfooter');
        }
    }

    function confirm() {

        $id = $this->input->post('idangkat');
        $this->model_anggota->editStatus($id, "ok");
        $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "anggota";
        $cek['msg'] = "";
        $cek['anggota'] = $this->model_anggota->getAll();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fanggota', $cek);
        $this->load->view('admin/adminfooter');
    }

    function hapus() {
        $id = $this->input->post('idangka');
        $this->model_anggota->delete($id);
        redirect('adm/c_anggota');
    }

}

?>
