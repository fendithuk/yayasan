<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_linksGambar
 *
 * @author phepen
 */
class C_linksGambar extends Ci_controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/flinksgambar');
        $this->load->view('admin/adminfooter');
    }
}

?>
