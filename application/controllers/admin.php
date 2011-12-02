<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author phepen
 */
class Admin extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $this->load->view('admin/adminheader');
        $this->load->view('admin/flogin');
        $this->load->view('admin/adminfooter');
    }
}

?>
