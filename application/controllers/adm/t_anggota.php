<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of t_anggota
 *
 * @author phepen
 */
class T_anggota extends Ci_controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/master/ftambahanggota');
        $this->load->view('admin/adminfooter');
    }
}

?>