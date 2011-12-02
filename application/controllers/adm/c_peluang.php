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
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "Content";
        $cek['menu2'] = "Peluang";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fpeluang',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
