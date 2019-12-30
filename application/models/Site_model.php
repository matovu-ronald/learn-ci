<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Site_Model extends CI_Model
{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function run_my_query()
	{
		return "This is a message from the site model";
	}

	function insert_table_data($data)
	{
		// if ($data) {

		// 	$this->db->insert('users', $data);
		// }
		return $this->db->query("insert into users (name, email, phone) values ('Test', 'business.matovu@gmail.com', '786600426')");
	}
}
