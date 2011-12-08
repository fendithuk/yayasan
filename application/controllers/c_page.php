<?php

class C_page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_links');
        $this->load->model('model_gambar');
        $this->load->model('model_content');
        $this->load->helper('text');
        $this->load->library('form_validation');
        $this->load->helper('smiley');
        $this->load->library('table');
        $this->load->model('model_smile');
        $this->load->model('model_anggota');
        $this->load->model('model_content');
    }

    function index() {

        $data['title'] = "home";
        $data['fb'] = $this->model_links->getFb();
        $data['ym'] = $this->model_links->getYm();
        $data['gbr'] = $this->model_gambar->getAll();
        $data['profil'] = $this->model_content->getContentDua(2);
        $data['peluang'] = $this->model_content->getContentDua(3);
        $data['kegiatan'] = $this->model_content->getContentSatu(4);
        $data['sketsa'] = $this->model_content->getSketsa();
        $this->load->view('user/v_header', $data);
        $this->load->view('user/frontend/v_menu');
        $this->load->view('user/frontend/v_content');
        $this->load->view('user/v_footer');
    }
    
    function getAngkatan(){
        $tahun = $this->uri->segment(3);
        $tahun1 =  substr($tahun,0, 4);
        $tahun2 =  substr($tahun, 5);
       
        $this->load->model('model_anggota');
        $data['anggota'] = $this->model_anggota->getTahun($tahun1,$tahun2);
        $this->load->view('user/frontend/scroll/table',$data);
        
        
    }
    
    function getSketsa(){
        $id= $this->uri->segment(3);
        $data['sketsa'] = $this->model_content->getBeranda($id);
        
        $this->load->view('user/frontend/scroll/sketsa',$data);
    }

}

?>
