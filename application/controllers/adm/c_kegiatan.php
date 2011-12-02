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
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "kegiatan";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fkegiatan',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
