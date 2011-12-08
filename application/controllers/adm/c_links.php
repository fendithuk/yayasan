<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_links
 *
 * @author phepen
 */
class C_links extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_links');
        $this->load->library('form_validation');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "link";
            $cek['fb'] = $this->model_links->getFb();
            $cek['ym'] = $this->model_links->getYm();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/flinks', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function editFbSimpan() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $this->form_validation->set_rules('code', 'Code', 'required');
            if ($this->form_validation->run() == FALSE) {
                $cek['msg'] = "gagal";
                $cek['cekl'] = "adm";
                $cek['menu'] = "content";
                $cek['menu2'] = "link";
                $cek['fb'] = $this->model_links->getFb();
                $cek['ym'] = $this->model_links->getYm();
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/content/flinks', $cek);
                $this->load->view('admin/adminfooter');
            } else {
                $data = $this->input->post('code');
                $this->model_links->editFb($data);
                $cek['msg'] = "success";
                $cek['cekl'] = "adm";
                $cek['menu'] = "content";
                $cek['menu2'] = "link";
                $cek['fb'] = $this->model_links->getFb();
                $cek['ym'] = $this->model_links->getYm();
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/content/flinks', $cek);
                $this->load->view('admin/adminfooter');
            }
        } else {
            redirect('admin/');
        }
    }

    function addYm() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('codeYm', 'CodeYm', 'required');
            if ($this->form_validation->run() == FALSE) {
                $cek['msg'] = "gagal";
                $cek['cekl'] = "adm";
                $cek['menu'] = "content";
                $cek['menu2'] = "link";
                $cek['fb'] = $this->model_links->getFb();
                $cek['ym'] = $this->model_links->getYm();
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/content/flinks', $cek);
                $this->load->view('admin/adminfooter');
            } else {

                $dataYm = array(
                    'idlinks' => NULL,
                    'kategori' => "ym",
                    'nama' => $this->input->post('nama'),
                    'links' => $this->input->post('codeYm'),
                );

                $this->model_links->addYm($dataYm);
                redirect('adm/c_links/success');
            }
        } else {
            redirect('admin/');
        }
    }

    function success() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "link";
            $cek['fb'] = $this->model_links->getFb();
            $cek['ym'] = $this->model_links->getYm();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/flinks', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function editYmSimpan() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $this->form_validation->set_rules('codeYm', 'CodeYm', 'required');
            $this->form_validation->set_rules('namay', 'Nama', 'required');

            if ($this->form_validation->run() == FALSE) {
                $cek['msg'] = "gagal";
                $cek['cekl'] = "adm";
                $cek['menu'] = "content";
                $cek['menu2'] = "link";
                $cek['fb'] = $this->model_links->getFb();
                $cek['ym'] = $this->model_links->getYm();
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/content/flinks', $cek);
                $this->load->view('admin/adminfooter');
            } else {
                $id = $this->input->post('idy');
                $nama = $this->input->post('namay');
                $code = $this->input->post('codeYm');


                $this->model_links->editYm($nama, $code, $id);
                redirect('adm/c_links/success');
            }
        } else {
            redirect('admin/');
        }
    }

    function hapus() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $id = $this->input->post('idang');
            $this->model_links->deleteYm($id);
            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "link";
            $cek['fb'] = $this->model_links->getFb();
            $cek['ym'] = $this->model_links->getYm();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/flinks', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
