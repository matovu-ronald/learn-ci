<?php

class Action_model extends CI_Model
{
	public function __construct()
	{
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

	public function get_where_condition_query()
	{
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("salary >=", 4500);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function get_and_condition()
	{
		$this->db->select("*");
		$this->db->from("users");
		// $this->db->where([
		// 	'id' => 3,
		// 	'email' => 'ritahnakibirige@gmail.com'
		// ]);
		$this->db->where('id', 3);
		$this->db->or_where('email', 'ritahnakibirige@gmail.com1');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		// select * from users where id = 3 AND email = 'ritahnakibirige@gmail.com';
		// select * from users where id = 3 OR email = 'ritahnakibirige@gmail.com';
	}

	public function get_where_in()
	{
		$this->db->select("*");
		$this->db->from("users");
		// $this->db->where_in("salary", ["6000", "2500", "3000"]);
		// $this->db->like("email", "gmail.com"); // %gmail.com%
		// $this->db->like("email", "gmail.com", "before"); // %gmail.com%
		// $this->db->like("email", "gmail.com", "none"); //  gmail.com 
		// $this->db->like("email", "na", "both"); //  %na%
		$this->db->like("email", "ritah", "after"); //  na%
		$query = $this->db->get();
		return $result = $query->result();

	}

	public function get_user_messages()
	{
		$this->db->select("user.*,message.message");
		$this->db->from("users as user");
		// $this->db->join("messages as message", "user.id = message.user_id");
		// select user.*,message.message from users as user JOIN messages as message ON user.id = message.user_id
		// $this->db->join("messages as message", "user.id = message.user_id", "left");
		// select user.*,message.message from users as user LEFT JOIN messages as message ON user.id = message.user_id
		// $this->db->join("messages as message", "user.id = message.user_id", "right");
		// select user.*,message.message from users as user RIGHT JOIN messages as message ON user.id = message.user_id
		$this->db->join("messages as message", "user.id = message.user_id", "inner");
		// select user.*,message.message from users as user INNER JOIN messages as message ON user.id = message.user_id
		$query = $this->db->get();
		// select user.*,message.message from users as user LEFT JOIN messages as message ON user.id = message.user_id
		return $result = $query->result();
	}
}
