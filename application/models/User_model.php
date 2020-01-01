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
}
