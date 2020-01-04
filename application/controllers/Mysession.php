<?php

class Mysession extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
	}

	public function add_session()
	{
		$this->session->set_userdata('some_name', 'some_value');

		$this->session->set_userdata("name", "Matovu Ronald");
		
		$this->session->set_userdata("email", "maronwhite6@gmail.com");
	}

	public function get_session()
	{
		$all_session_values = $this->session->all_userdata();
		echo "<pre>";
			if ($this->session->has_userdata("email")) {
				echo $this->session->userdata("email");
			} else {
				echo "Mobile value doesnot value";
			}
			// print_r($all_session_values);
			// $name = $this->session->userdata("name");
			// echo $name;
			echo $this->session->name;
		echo "</pre>";
	}

	public function destroy_session()
	{
		$this->session->unset_userdata("email");

		$this->session->set_userdata([
			"name" => "Ronald",
			"email" => "maronwhite6@gmail.com"
		]);

		print_r($this->session->all_userdata());
	}

}
