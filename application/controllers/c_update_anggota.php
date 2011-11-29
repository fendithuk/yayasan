<?php

class C_update_anggota extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper('smiley');
        $this->load->library('table');

        $image_array = get_clickable_smileys('../smileys/', 'comments');

        $col_array = $this->table->make_columns($image_array, 4);

        $data['smiley_table'] = $this->table->generate($col_array);
        
        $data['title'] = "update anggota";
        $this->load->view('user/v_header', $data);
        $this->load->view('user/frontend/v_menu');
        $this->load->view('user/frontend/update/v_content_update', $data);
        $this->load->view('user/v_footer');
    }

}

?>
