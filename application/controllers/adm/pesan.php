<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pesan
 *
 * @author phepen
 */
class pesan extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_smile');
        $this->load->helper('smiley');
        $this->load->library('table');
    }

    function index() {
        $cek['cekl'] = "";
        $cek['komen'] = $this->model_smile->getKomen();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fpesan', $cek);
        $this->load->view('admin/adminfooter');
    }
    
    function confirm(){
        $id = $this->input->post('idpsn');
        $this->model_smile->editConfirm($id);
        $cek['cekl'] = "";
        $cek['komen'] = $this->model_smile->getKomen();
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fpesan', $cek);
        $this->load->view('admin/adminfooter');
    }

}

?>
