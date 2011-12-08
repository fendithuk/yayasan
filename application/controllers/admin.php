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
        $this->load->model('model_login');
    }
    
    function index(){
        
        $this->load->view('admin/adminheader');
        $this->load->view('admin/flogin');
        $this->load->view('admin/adminfooter');
    }
    
     function cekLogin(){
        $username = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        foreach ($this->model_login->getAll() as $r):
            if($username == $r->username && $pass == $r->password){
                $data = array('ID' => $r->idadmin,'USERNAME' => $r->username,'PASS' => $r->password);
                $this->session->set_userdata($data);
                redirect('adm/dashboar');
            }else{
                $this->index();
            }
        endforeach;
    }
    
    
    function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('ID');
        $this->index();
    }
}

?>
