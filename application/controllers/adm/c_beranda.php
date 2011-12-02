<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_beranda
 *
 * @author phepen
 */
class C_beranda extends Ci_controller{
    //put your code here
     public function __construct() {
        parent::__construct();
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "beranda";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fberanda',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
