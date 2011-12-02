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

}

?>
