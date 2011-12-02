<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of t_content
 *
 * @author phepen
 */
class T_content extends Ci_controller {
    //put your code here
    
     public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/master/ftambahcontent');
        $this->load->view('admin/adminfooter');
    }
}

?>
