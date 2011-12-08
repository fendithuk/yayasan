<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_profil
 *
 * @author phepen
 */
class c_profil extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_content');
        $this->load->helper('text');
        $this->load->library('form_validation');
        $this->load->model('model_smile');
        $this->load->helper('smiley');
        $this->load->library('table');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "Content";
            $cek['menu2'] = "Profil";
            $cek['profil'] = $this->model_content->getContentDua(2);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fprofil', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function edit() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $id = $this->uri->segment(4);
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "EDIT kegiatan";
            $cek['data'] = $this->model_content->getProfil($id);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/edit/editcontentdua', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function editSimpan() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $con = $this->input->post('content');
            $id = $this->input->post('idc');
            if ($con == "PROFIL") {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('isi', 'Isi', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $cek['msg'] = "gagal";

                    $cek['cekl'] = "adm";
                    $cek['menu'] = "content";
                    $cek['menu2'] = "EDIT kegiatan";
                    $cek['data'] = $this->model_content->getProfil($id);
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/edit/editcontentdua', $cek);
                    $this->load->view('admin/adminfooter');
                } else {
                    $dataContent = array(
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                    );
                    $this->model_content->editContentDua($dataContent, 2, $id);
                    redirect('adm/c_profil/success');
                }
            } else if ($con == "PELUANG") {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('isi', 'Isi', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $cek['msg'] = "gagal";

                    $cek['cekl'] = "adm";
                    $cek['menu'] = "content";
                    $cek['menu2'] = "EDIT PELUANG";
                    $cek['data'] = $this->model_content->getProfil($id);
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/edit/editcontentdua', $cek);
                    $this->load->view('admin/adminfooter');
                } else {
                    $dataContent = array(
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi'),
                    );
                    $this->model_content->editContentDua($dataContent, 3, $id);
                    redirect('adm/c_profil/success2');
                }
            }
        } else {
            redirect('admin/');
        }
    }

    function success() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "Content";
            $cek['menu2'] = "Profil";
            $cek['profil'] = $this->model_content->getContentDua(2);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fprofil', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function success2() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "Content";
            $cek['menu2'] = "Peluang";
            $cek['profil'] = $this->model_content->getContentDua(3);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fpeluang', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function hapus() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "successDel";

            $cek['cekl'] = "adm";
            $cek['menu'] = "Content";
            $cek['menu2'] = "Profil";
            $id = $this->input->post('idan');
            $this->model_content->deleteCd($id);
            $cek['profil'] = $this->model_content->getContentDua(2);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fprofil', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
