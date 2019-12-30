<?php

class Action_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function select_all_data()
	{
		// Select all data from table
		// $this->db->select('*');
		// $query = $this->db->get("users");
		// select * from users

		// $this->db->select("name, email");
		// $this->db->from("users");
		// $query = $this->db->get();

		$this->db->select("*");
		$this->db->from("users");
		// $this->db->where("email", "maronwhite6@gmail.com");
		$this->db->where(['id' => 1, "email" => 'maronwhite6@gmail.com']);
		$query = $this->db->get();

		return $result = $query->result();
	}

	public function update_table_data($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("users", $data);
		return TRUE;
	}

	public function get_all_users_data()
	{
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where('id', 1);
		$query = $this->db->get();
		// select * from tbl_users
		// return $result = $query->result(); // Array of objects
		// return $result = $query->result_array(); // Array of Arrays
		// return $result = $query->row(); // Sinlge object
		return $result = $query->row_array(); // Single Array
	}

	public function delete_specific_user()
	{
		// $this->db->where("id", 4);
		// return $this->db->delete("users");
		// Delete from table users where id is 4
		return $this->db->delete("users", ["id" => 3]);
	}
}
