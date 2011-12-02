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
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "link";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/flinks',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
