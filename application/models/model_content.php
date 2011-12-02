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
}

?>
