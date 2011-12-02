<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboar
 *
 * @author phepen
 */
class dashboar extends CI_Controller{
    //put your code here
     public function __construct() {
        parent::__construct();
    }
    
    function index(){
         $cek['cekl'] = "";
       
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/fdashboar',$cek);
        $this->load->view('admin/adminfooter');
    }
}

?>
