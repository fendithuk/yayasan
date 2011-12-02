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
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fpeluang');
        $this->load->view('admin/adminfooter');
    }
}

?>
