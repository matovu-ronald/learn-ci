<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library('form_validation');
	}

	public function form_helper_study()
	{
		// echo base_url();
		// echo "<br>";
		// echo site_url();
		$this->load->view("user/form");
	}

	public function form_submit_method()
	{
		// $this->form_validation->set_rules("name", "Name", "required|min_length[6]|max_length[255]|trim");
		// $this->form_validation->set_rules("email", "Email", "required|min_length[10]|callback_is_email_exists");
		// $this->form_validation->set_rules("phone", "Phone", "required");
		// $this->form_validation->set_rules("salary", "Salary", "required");
		$config_rules = [
			[
				"field" => "name",
				"label" => "Name",
				"rules" => "required|min_length[6]|max_length[255]|trim"
			],
			[
				"field" => "email",
				"label" => "Email",
				"rules" => "required|min_length[10]|callback_is_email_exists"
			],
			[
				"field" => "phone",
				"label" => "Phone",
				"rules" => "required"
			],
			[
				"field" => "salary",
				"label" => "Salary",
				"rules" => "required"
			],
				
		];

		$this->form_validation->set_rules($config_rules);

		if ($this->form_validation->run() == FALSE) {
			$this->form_helper_study();
		} else {
			// Get data from the form
			$data = $this->input->post();
			// $data = $this->input->get();
			// echo $data['name']. ", ". $data["email"]. ", ". $data["phone"]. ", ". $data["salary"];
			echo "<pre>";
				print_r($data);
			echo "</pre>";
		}
		
	}

	public function is_email_exists($value)
	{
		$valid_emails = [
			'matovuronald997@gmail.com',
			'maronwhite6@gmail.com',
			'business.matovu@gmail.com',
			'ritahnakibirige@gmail.com',
			'ronald.matovu@wfp.org',
			'ronald.matovu@tollandhaben.com'
		];

		if (!empty($value)) {
			if (in_array($value, $valid_emails)) {
				$this->form_validation->set_message("is_email_exists", "The {field} already taken, try another email ID");
				return false;
			} else {
				return true;
			}
		} else {
			$this->form_validation->set_message("is_email_exists", "The Email address is required");
			return false;
		}
	}
}
