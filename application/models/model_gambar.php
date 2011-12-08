<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_gambar
 *
 * @author phepen
 */
class Model_gambar extends Ci_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    function getAll(){
         return $this->db->get('gambar')->result();
    }
    
    function editGambar($data,$gmb,$idc){
        $this->db->where('idgambar', $idc);
        $this->db->set('links', $data);
        $this->db->set('nmgambar', $gmb);
        $update = $this->db->update('gambar');
        return $update;
    }
    
    function getGambar($id) {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('idgambar', $id);


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
    
}

?>
