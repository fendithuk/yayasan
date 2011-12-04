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
        $this->load->model('model_content');
    }

    function index() {

        $cek['msg'] = "";
        $cek['cekl'] = "adm";
        $cek['menu'] = "Master";
        $cek['menu2'] = "Tambah Content";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/master/ftambahcontent', $cek);
        $this->load->view('admin/adminfooter');
    }

    function add() {
        $coba = $this->input->post('select');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $gambar = $this->input->post('file');
        $tanggal = $this->input->post('tanggal');
        $thn = substr($tanggal, 6);
        $hr = substr($tanggal, 3, 2);
        $bln = substr($tanggal, 0, 2);

        if ($coba == 1 || $coba == 4) {
            if ($judul != "" && $isi != "" && $tanggal != "" && $gambar != "") {
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|gif|png|JPG';
                $config['max_size'] = '4000';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                $config['remove_spaces'] = TRUE;

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('file');
                if ($data) {
                    $file = $this->upload->data();
                    $namaFile = $file['file_name'];
                    $dataContent = array(
                        'idcontentsatu' => NULL,
                        'judul' => $this->input->post('judul'),
                        'tanggal' => "$thn-$bln-$hr",
                        'gambar' => $namaFile,
                        'isi' => $this->input->post('isi'),
                        'idkategori' => $coba
                    );

                    $this->model_content->addcon($dataContent);

                    redirect('adm/t_content/success');
                } else {
                    $cek['cekl'] = "adm";
                    $cek['menu'] = "Master";
                    $cek['menu2'] = "Tambah Content";
                    $cek['msg'] = "gagal";
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/master/ftambahcontent', $cek);
                    $this->load->view('admin/adminfooter');
                }
            } else {
                $cek['cekl'] = "adm";
                $cek['menu'] = "Master";
                $cek['menu2'] = "Tambah Content";
                $cek['msg'] = "gagal";
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/master/ftambahcontent', $cek);
                $this->load->view('admin/adminfooter');
            }
        } else if ($coba == 2 || $coba == 3) {
            if ($judul == "" || $isi == "") {

                $cek['cekl'] = "adm";
                $cek['menu'] = "Master";
                $cek['menu2'] = "Tambah Content";
                $cek['msg'] = "gagal";
                $cek = array(
                    'judul' => $judul,
                    'isi' => $isi
                );
                $this->load->view('admin/adminheader');
                $this->load->view('admin/admincontent/master/ftambahcontent', $cek);
                $this->load->view('admin/adminfooter');
            } else {
                $dataContent = array(
                    'idcontentdua' => NULL,
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'idkategori' => $coba
                );

                $this->model_content->add($dataContent);

                redirect('adm/t_content/success');
            }
        } else {
            $cek['cekl'] = "adm";
            $cek['menu'] = "Master";
            $cek['menu2'] = "Tambah Content";
            $cek['msg'] = "gagal";
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/master/ftambahcontent', $cek);
            $this->load->view('admin/adminfooter');
        }
    }

    function success() {
        $cek['cekl'] = "adm";
        $cek['menu'] = "Master";
        $cek['menu2'] = "Tambah Content";
        $cek['msg'] = "success";
        $this->load->view('admin/adminheader');
        $this->load->view('admin/admincontent/master/ftambahcontent', $cek);
        $this->load->view('admin/adminfooter');
    }
    
    

}

?>
