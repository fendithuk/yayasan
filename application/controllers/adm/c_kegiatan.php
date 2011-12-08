<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_kegiatan
 *
 * @author phepen
 */
class c_kegiatan extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_content');
        $this->load->helper('text');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "kegiatan";
            $cek['kegiatan'] = $this->model_content->getContentSatu(4);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fkegiatan', $cek);
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
            $cek['data'] = $this->model_content->getKegiatan($id);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/edit/editcontentsatu', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function hapus() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $id = $this->input->post('idan');
            $cek['msg'] = "successDel";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "kegiatan";
            $this->model_content->deleteCs($id);
            $cek['beranda'] = $this->model_content->getContentSatu(4);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fkegiatan', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
