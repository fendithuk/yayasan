<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_content
 *
 * @author phepen
 */
class model_content extends Ci_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function add($data) {
        $insert = $this->db->insert('contentdua', $data);
        return $insert;
    }

    function addcon($data) {
        $insert = $this->db->insert('contentsatu', $data);
        return $insert;
    }

    function getContentSatu($id) {
        $this->db->select('contentsatu.idcontentsatu as idsketsa,contentsatu.judul as judulsketsa, contentsatu.tanggal as tanggalsketsa,contentsatu.gambar as gambarsketsa, contentsatu.isi as isisketsa');
        $this->db->from('contentsatu');
        $this->db->join('kategori', 'kategori.idkategori = contentsatu.idkategori');
        $this->db->where('kategori.idkategori', $id);


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    function getContentDua($id) {
        $this->db->select('contentdua.idcontentdua as id,contentdua.judul as judul, contentdua.isi as isi');
        $this->db->from('contentdua');
        $this->db->join('kategori', 'kategori.idkategori = contentdua.idkategori');
        $this->db->where('kategori.idkategori', $id);


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    function getBeranda($id) {
        $this->db->select('kategori.namakategori as nama,contentsatu.idcontentsatu as idsketsa,contentsatu.judul as judulsketsa, contentsatu.tanggal as tanggalsketsa,contentsatu.gambar as gambarsketsa, contentsatu.isi as isisketsa');
        $this->db->from('contentsatu');
        $this->db->join('kategori', 'kategori.idkategori = contentsatu.idkategori');
        $this->db->where('kategori.idkategori', 1);
        $this->db->where('contentsatu.idcontentsatu', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    function getKegiatan($id) {
        $this->db->select('kategori.namakategori as nama,contentsatu.idcontentsatu as idsketsa,contentsatu.judul as judulsketsa, contentsatu.tanggal as tanggalsketsa,contentsatu.gambar as gambarsketsa, contentsatu.isi as isisketsa');
        $this->db->from('contentsatu');
        $this->db->join('kategori', 'kategori.idkategori = contentsatu.idkategori');
        $this->db->where('kategori.idkategori', 4);
        $this->db->where('contentsatu.idcontentsatu', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    
    function getProfil($id) {
        $this->db->select('kategori.namakategori as nama,contentdua.idcontentdua as idsketsa,contentdua.judul as judulsketsa, contentdua.isi as isisketsa');
        $this->db->from('contentdua');
        $this->db->join('kategori', 'kategori.idkategori = contentdua.idkategori');
        $this->db->where('kategori.idkategori', 2);
        $this->db->where('contentdua.idcontentdua', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    
    function getPeluang($id) {
        $this->db->select('kategori.namakategori as nama,contentdua.idcontentdua as idsketsa,contentdua.judul as judulsketsa, contentdua.isi as isisketsa');
        $this->db->from('contentdua');
        $this->db->join('kategori', 'kategori.idkategori = contentdua.idkategori');
        $this->db->where('kategori.idkategori', 3);
        $this->db->where('contentdua.idcontentdua', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

}

?>
