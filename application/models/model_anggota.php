<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_anggota
 *
 * @author phepen
 */
class Model_anggota extends Ci_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function add($data) {
        $insert = $this->db->insert('dataangkatan', $data);
        return $insert;
    }
    
    function getAll(){
        //return $this->db->get('dataangkatan')->result();
        $this->db->select('*');
        $this->db->from('dataangkatan');
        $this->db->order_by('status','ASC');
        
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }
    
    function getTahun($tahun1,$tahun2){
        $q="SELECT * FROM dataangkatan where thnangkatan >= $tahun1 && thnangkatan <= $tahun2 && status= 'ok' ";
        return $this->db->query($q)->result();
    }
    
    function editAnggota($id, $data) {
        $this->db->where('iddataangkatan', $id);
        $update = $this->db->update('dataangkatan', $data);
        return $update;
    }
    
    function editStatus($id,$data) {
        $this->db->where('iddataangkatan', $id);
        $this->db->set('status', $data);
        $update = $this->db->update('dataangkatan');
        return $update;
   }
    
    function delete($id){
        $this->db->where('iddataangkatan',$id);
        $update = $this->db->delete('dataangkatan');
        return $update;
    }

}

?>
