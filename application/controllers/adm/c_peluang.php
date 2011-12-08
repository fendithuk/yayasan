<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_peluang
 *
 * @author phepen
 */
class C_peluang extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_content');
        $this->load->helper('text');
        $this->load->model('model_smile');
        $this->load->helper('smiley');
        $this->load->library('table');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

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

    function edit() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $id = $this->uri->segment(4);
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "EDIT kegiatan";
            $cek['data'] = $this->model_content->getPeluang($id);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/edit/editcontentdua', $cek);
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
            $cek['menu2'] = "Peluang";
            $id = $this->input->post('idan');
            $this->model_content->deleteCd($id);
            $cek['profil'] = $this->model_content->getContentDua(3);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fpeluang', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
