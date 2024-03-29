<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_smile
 *
 * @author phepen
 */
class model_smile extends Ci_Model{
    
    //put your code here
    function add($data) {
        $insert = $this->db->insert('komentar', $data);
        return $insert;
    }
    
    function getKomen() {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('konfirmasi', 'belum');
        $this->db->order_by('idkomentar','desc');
        $this->db->limit('20');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    
    function getKomenOk() {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->where('konfirmasi', 'ok');
        $this->db->order_by('idkomentar','desc');
        $this->db->limit('20');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    
    function editConfirm($id) {
        $this->db->where('idkomentar', $id);
        $this->db->set('konfirmasi', 'ok');
        $update = $this->db->update('komentar');
        return $update;
   }
    
   function delete($id){
        $this->db->where('idkomentar',$id);
        $update = $this->db->delete('komentar');
        return $update;
    }
}

?>
