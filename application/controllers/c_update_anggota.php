<?php

class C_update_anggota extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_links');
        $this->load->model('model_gambar');
        $this->load->model('model_content');
        $this->load->model('model_anggota');
        $this->load->helper('text');
        $this->load->library('form_validation');
        $this->load->helper('smiley');
        $this->load->library('table');
        $this->load->model('model_smile');
    }

    function index() {

        $data['fb'] = $this->model_links->getFb();
        $data['ym'] = $this->model_links->getYm();
        $data['gbr'] = $this->model_gambar->getAll();
        $data['profil'] = $this->model_content->getContentDua(2);
        $data['peluang'] = $this->model_content->getContentDua(3);
        $data['kegiatan'] = $this->model_content->getContentSatu(4);
        $data['komen'] = $this->model_smile->getKomen();


        $image_array = get_clickable_smileys('../smileys/', 'comments');

        $col_array = $this->table->make_columns($image_array, 4);

        $data['smiley_table'] = $this->table->generate($col_array);

        $data['title'] = "update anggota";
        $this->load->view('user/v_header', $data);
        $this->load->view('user/frontend/v_menu');
        $this->load->view('user/frontend/update/v_content_update', $data);
        $this->load->view('user/v_footer');
    }

    function comment() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('comments', 'Comments', 'required');
        if ($this->form_validation->run() == FALSE) {
            redirect('c_update_anggota');
        } else {
            $date = date("Y-m-d H:i:s");
            $dataComment = array(
                'idkomentar' => NULL,
                'nama' => $this->input->post('nama'),
                'isikomentar' => $this->input->post('comments'),
                'date' => date("Y-m-d H:i:s"),
                'konfirmasi' => "belum",
            );
            $this->model_smile->add($dataComment);

            redirect('c_update_anggota');
        }
    }

    function daftar() {
        @session_start();
        if ($_SESSION['security_code'] == $this->input->post('cap')) {
            $dataAnggota = array(
                'iddataangkatan' => NULL,
                'nama' => $this->input->post('nama'),
                'thnangkatan' => $this->input->post('angkatan'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'status' => "ok"
            );

            $this->model_anggota->add($dataAnggota);
            @session_destroy();
        } else {
            echo "salah";
        }
    }

}

?>
