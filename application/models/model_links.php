<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_links
 *
 * @author phepen
 */
class Model_links extends Ci_Model {

    //put your code here

    public function __construct() {
        parent::__construct();
    }

    function getFb() {
        $this->db->select('idlinks, links');
        $this->db->from('links');
        $this->db->where('kategori', 'fb');


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    function editFb($data) {
        $this->db->where('kategori', 'fb');
        $this->db->set('links', $data);
        $update = $this->db->update('links');
        return $update;
    }

    function getYm() {
        $this->db->select('idlinks, nama, links');
        $this->db->from('links');
        $this->db->where('kategori', 'ym');


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    function addYm($data) {
        $insert = $this->db->insert('links', $data);
        return $insert;
    }

    function editYm($data,$code,$id) {
        $this->db->where('idlinks', $id);
        $this->db->set('nama', $data);
        $this->db->set('links', $code);
        $update = $this->db->update('links');
        return $update;
    }
    
    function deleteYm($id){
        $this->db->where('idlinks',$id);
        $update = $this->db->delete('links');
        return $update;
    }

}

?>
