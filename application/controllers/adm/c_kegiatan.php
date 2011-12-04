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
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "kegiatan";
        $cek['kegiatan'] = $this->model_content->getContentSatu(4);
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fkegiatan',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
