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
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fberanda');
        $this->load->view('admin/adminfooter');
    }
}

?>
