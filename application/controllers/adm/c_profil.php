<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_profil
 *
 * @author phepen
 */
class c_profil extends Ci_controller{
    //put your code here
     public function __construct() {
        parent::__construct();
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "Content";
        $cek['menu2'] = "Profil";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fprofil',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
