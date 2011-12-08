<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_linksGambar
 *
 * @author phepen
 */
class C_linksGambar extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_gambar');
        $this->load->library('form_validation');
        $this->load->model('model_smile');
        $this->load->helper('smiley');
        $this->load->library('table');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "link gambar";
            $cek['data'] = $this->model_gambar->getAll();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/flinksgambar', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function editSimpan() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $id = $this->input->post('idgambar');
            $this->form_validation->set_rules('link', 'Link', 'required');
            if ($this->form_validation->run() == FALSE) {
                $cek['msg'] = "gagal";
                $cek['cekl'] = "adm";
                $cek['menu'] = "content";
                $cek['menu2'] = "link gambar";
                $cek['data'] = $this->model_gambar->getGambar($id);
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/edit/editgambar', $cek);
                $this->load->view('admin/adminfooter');
            } else {
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|gif|png|JPG';
                $config['max_size'] = '4000';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                $config['remove_spaces'] = TRUE;

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('file');
                if ($data) {
                    $file = $this->upload->data();
                    $namaFile = $file['file_name'];
                    $links = $this->input->post('link');
                    $id = $this->input->post('idgambar');

                    $this->model_gambar->editGambar($links, $namaFile, $id);
                    redirect('adm/c_linksGambar/success');
                } else {

                    $cek['msg'] = "gagal";
                    $cek['cekl'] = "adm";
                    $cek['menu'] = "content";
                    $cek['menu2'] = "link gambar";
                    $cek['data'] = $this->model_gambar->getGambar($id);
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/edit/editgambar', $cek);
                    $this->load->view('admin/adminfooter');
                }
            }
        } else {
            redirect('admin/');
        }
    }

    function edit() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $id = $this->uri->segment(4);
            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "link gambar";
            $cek['data'] = $this->model_gambar->getGambar($id);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/edit/editgambar', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function success() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "link gambar";
            $cek['data'] = $this->model_gambar->getAll();
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/flinksgambar', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
