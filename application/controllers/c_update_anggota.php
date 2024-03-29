<?php

class C_update_anggota extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_links');
        $this->load->model('model_gambar');
        $this->load->model('model_content');
        $this->load->model('model_anggota');
        $this->load->model('model_conter');
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
        $data['komen'] = $this->model_smile->getKomenOk();
        $data['pengunjung'] = $this->model_conter->counAll();

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
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
           
        if ($_SESSION['security_code'] == $this->input->post('cap')) {
            if($this->input->post('nama') == "Nama" || $this->input->post('angkatan') == "Angkatan" || $this->input->post('alamat') == "Alamat" || $this->input->post('email') == "Email/Telp" || ( $this->input->post('angkatan') <= 1969 || $this->input->post('angkatan') >= 2021) || $this->form_validation->run() == FALSE) {
                redirect('c_update_anggota/gagal');
            }else{
                 $dataAnggota = array(
                'iddataangkatan' => NULL,
                'nama' => $this->input->post('nama'),
                'thnangkatan' => $this->input->post('angkatan'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'status' => "belum"
            );

            $this->model_anggota->add($dataAnggota);
            redirect('c_update_anggota/success');
            @session_destroy();
            }
           
        } else {
            redirect('c_update_anggota/gagal');
        }
    }
    
    function success(){
         $data['fb'] = $this->model_links->getFb();
        $data['ym'] = $this->model_links->getYm();
        $data['gbr'] = $this->model_gambar->getAll();
        $data['profil'] = $this->model_content->getContentDua(2);
        $data['peluang'] = $this->model_content->getContentDua(3);
        $data['kegiatan'] = $this->model_content->getContentSatu(4);
        $data['komen'] = $this->model_smile->getKomenOk();
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['msg'] = "success";

        $image_array = get_clickable_smileys('../smileys/', 'comments');

        $col_array = $this->table->make_columns($image_array, 4);

        $data['smiley_table'] = $this->table->generate($col_array);

        $data['title'] = "update anggota";
        $this->load->view('user/v_header', $data);
        $this->load->view('user/frontend/v_menu');
        $this->load->view('user/frontend/update/f_notifiview', $data);
        $this->load->view('user/v_footer');
    }

    function gagal(){
         $data['fb'] = $this->model_links->getFb();
        $data['ym'] = $this->model_links->getYm();
        $data['gbr'] = $this->model_gambar->getAll();
        $data['profil'] = $this->model_content->getContentDua(2);
        $data['peluang'] = $this->model_content->getContentDua(3);
        $data['kegiatan'] = $this->model_content->getContentSatu(4);
        $data['komen'] = $this->model_smile->getKomenOk();
        $data['pengunjung'] = $this->model_conter->counAll();
        $data['msg'] = "gagal";

        $image_array = get_clickable_smileys('../smileys/', 'comments');

        $col_array = $this->table->make_columns($image_array, 4);

        $data['smiley_table'] = $this->table->generate($col_array);

        $data['title'] = "update anggota";
        $this->load->view('user/v_header', $data);
        $this->load->view('user/frontend/v_menu');
        $this->load->view('user/frontend/update/f_notifiview', $data);
        $this->load->view('user/v_footer');
    }

}

?>
