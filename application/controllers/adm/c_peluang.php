<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_peluang
 *
 * @author phepen
 */
class C_peluang extends Ci_controller {
    //put your code here
     public function __construct() {
        parent::__construct();
        $this->load->model('model_content');
        $this->load->helper('text');
    }
    
    function index(){
         $cek['cekl'] = "adm";
        $cek['menu'] = "Content";
        $cek['menu2'] = "Peluang";
        $cek['profil'] = $this->model_content->getContentDua(3);
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fpeluang',$cek);
        $this->load->view('admin/adminfooter');
    }
    
    function edit(){
        $cek['msg'] = "";
        $id = $this->uri->segment(4);
        $cek['cekl'] = "adm";
        $cek['menu'] = "content";
        $cek['menu2'] = "EDIT kegiatan";
        $cek['data'] = $this->model_content->getPeluang($id);
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/edit/editcontentdua', $cek);
        $this->load->view('admin/adminfooter');
    }
    
    function hapus() {
        $cek['msg'] = "successDel";
        $cek['cekl'] = "adm";
        $cek['menu'] = "Content";
        $cek['menu2'] = "Peluang";
        $id = $this->input->post('idan');
        $this->model_content->deleteCd($id);
        $cek['profil'] = $this->model_content->getContentDua(3);
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/content/fpeluang', $cek);
        $this->load->view('admin/adminfooter');
    }

}

?>
