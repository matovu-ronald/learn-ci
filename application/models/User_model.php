<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_into_users_table($data)
	{
		return $this->db->insert("users", $data);
	}

	public function get_all_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
		return $result = $query->result_array();
	}
}
