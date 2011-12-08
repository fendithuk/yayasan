<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_beranda
 *
 * @author phepen
 */
class C_beranda extends Ci_controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('model_content');
        $this->load->helper('text');
        $this->load->library('form_validation');
    }

    function index() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "beranda";
            $cek['beranda'] = $this->model_content->getContentSatu(1);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fberanda', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function edit() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $id = $this->uri->segment(4);

            $cek['msg'] = "";
            $cek['cekl'] = "adm";
            $cek['menu'] = "Content";
            $cek['menu2'] = "Edit Beranda";
            $cek['data'] = $this->model_content->getBeranda($id);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/edit/editcontentsatu', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function editSimpan() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $con = $this->input->post('content');
            if ($con == "BERANDA") {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
                $this->form_validation->set_rules('isi', 'Isi', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $id = $this->input->post('idc');
                    $cek['msg'] = "gagal";
                    $cek['cekl'] = "adm";
                    $cek['menu'] = "Content";
                    $cek['menu2'] = "Edit Beranda";
                    $cek['data'] = $this->model_content->getBeranda($id);
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/edit/editcontentsatu', $cek);
                    $this->load->view('admin/adminfooter');
                } else {
                    $config['upload_path'] = 'uploads';
                    $config['allowed_types'] = 'jpg|jpeg|gif|png|JPG';
                    $config['max_size'] = '4000';
                    $config['max_width'] = '2000';
                    $config['max_height'] = '2000';
                    $config['remove_spaces'] = TRUE;

                    $this->load->library('upload', $config);
                    $data = $this->upload->do_upload('file');
                    if ($data) {
                        $tanggal = $this->input->post('tanggal');
                        $thn = substr($tanggal, 6);
                        $hr = substr($tanggal, 3, 2);
                        $bln = substr($tanggal, 0, 2);
                        $file = $this->upload->data();
                        $namaFile = $file['file_name'];
                        $dataContent = array(
                            'judul' => $this->input->post('judul'),
                            'tanggal' => "$thn-$bln-$hr",
                            'gambar' => $namaFile,
                            'isi' => $this->input->post('isi'),
                        );
                        $idc = $this->input->post('idc');

                        $this->model_content->editContentSatu($dataContent, 1, $idc);
                        redirect('adm/c_beranda/success');
                    } else {
                        $id = $this->input->post('idc');
                        $cek['msg'] = "gagal";
                        $cek['cekl'] = "adm";
                        $cek['menu'] = "Content";
                        $cek['menu2'] = "Edit Beranda";
                        $cek['data'] = $this->model_content->getBeranda($id);
                        $this->load->view('admin/adminheader');
                        $this->load->view('admin/admincontent/edit/editcontentsatu', $cek);
                        $this->load->view('admin/adminfooter');
                    }
                }
            } else if ($con == "KEGIATAN") {
                $this->form_validation->set_rules('judul', 'Judul', 'required');
                $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
                $this->form_validation->set_rules('isi', 'Isi', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $id = $this->input->post('idc');
                    $cek['msg'] = "gagal";
                    $cek['cekl'] = "adm";
                    $cek['menu'] = "Content";
                    $cek['menu2'] = "Edit Kegiatan";
                    $cek['data'] = $this->model_content->getKegiatan($id);
                    $this->load->view('admin/adminheader');
                    $this->load->view('admin/admincontent/edit/editcontentsatu', $cek);
                    $this->load->view('admin/adminfooter');
                } else {
                    $config['upload_path'] = 'uploads';
                    $config['allowed_types'] = 'jpg|jpeg|gif|png|JPG';
                    $config['max_size'] = '4000';
                    $config['max_width'] = '2000';
                    $config['max_height'] = '2000';
                    $config['remove_spaces'] = TRUE;

                    $this->load->library('upload', $config);
                    $data = $this->upload->do_upload('file');
                    if ($data) {
                        $tanggal = $this->input->post('tanggal');
                        $thn = substr($tanggal, 6);
                        $hr = substr($tanggal, 3, 2);
                        $bln = substr($tanggal, 0, 2);
                        $file = $this->upload->data();
                        $namaFile = $file['file_name'];
                        $dataContent = array(
                            'judul' => $this->input->post('judul'),
                            'tanggal' => "$thn-$bln-$hr",
                            'gambar' => $namaFile,
                            'isi' => $this->input->post('isi'),
                        );
                        $idc = $this->input->post('idc');

                        $this->model_content->editContentSatu($dataContent, 4, $idc);
                        redirect('adm/c_beranda/successKeg');
                    } else {
                        $id = $this->input->post('idc');
                        $cek['msg'] = "gagal";
                        $cek['cekl'] = "adm";
                        $cek['menu'] = "Content";
                        $cek['menu2'] = "Edit Beranda";
                        $cek['data'] = $this->model_content->getKegiatan($id);
                        $this->load->view('admin/adminheader');
                        $this->load->view('admin/admincontent/edit/editcontentsatu', $cek);
                        $this->load->view('admin/adminfooter');
                    }
                }
            }
        } else {
            redirect('admin/');
        }
    }

    function success() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "beranda";
            $cek['beranda'] = $this->model_content->getContentSatu(1);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fberanda', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function successKeg() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $cek['msg'] = "success";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "beranda";
            $cek['beranda'] = $this->model_content->getContentSatu(4);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fkegiatan', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

    function hapus() {
        if ($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('PASS') == TRUE) {

            $id = $this->input->post('idan');
            $cek['msg'] = "successDel";
            $cek['cekl'] = "adm";
            $cek['menu'] = "content";
            $cek['menu2'] = "beranda";
            $this->model_content->deleteCs($id);
            $cek['beranda'] = $this->model_content->getContentSatu(1);
            $this->load->view('admin/adminheader');
            $this->load->view('admin/admincontent/content/fberanda', $cek);
            $this->load->view('admin/adminfooter');
        } else {
            redirect('admin/');
        }
    }

}

?>
