<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_model extends CI_Model {
	public function get_all_thirdday()
	{
		$query=$this->db->get('thirdday');
		return $query->result();
	}
}
?>