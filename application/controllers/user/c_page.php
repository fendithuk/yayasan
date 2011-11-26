<?php

class C_page extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title']="home";
        $this->load->view('user/v_header',$data);
        $this->load->view('user/frontend/v_menu');
        $this->load->view('user/frontend/v_content');
        $this->load->view('user/v_footer');
    }

}

?>
