<?php
defined('BASEPATH') OR exit ('no direct script access allowed');
class Login_model extends CI_Model {
	
	function cek_login($table,$user)
	{
		return $this->db->get_where($table,$user);
	}

}
?>