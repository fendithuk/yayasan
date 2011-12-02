<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_anggota
 *
 * @author phepen
 */
class C_anggota extends Ci_controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "anggota";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fanggota',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
