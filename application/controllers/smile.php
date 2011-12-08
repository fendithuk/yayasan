<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of smile
 *
 * @author phepen
 */
class smile extends Ci_controller{
    //put your code here
    function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper('smiley');
		$this->load->library('table');

		$image_array = get_clickable_smileys('http://example.com/images/smileys/', 'comments');

		$col_array = $this->table->make_columns($image_array, 8);

		$data['smiley_table'] = $this->table->generate($col_array);

		$this->load->view('smile_view', $data);
	}

}

?>
