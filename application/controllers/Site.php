<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('site_model');
	}

	public function index()
	{
		$message = $this->site_model->run_my_query();
		// $this->load->view('includes/header');
		// $this->load->view('site/site_index');
		// $this->load->view('includes/footer');
		$this->load->view('home_page', compact('message'));
	}

	public function pass_var()
	{
		$information = [
			'organization_name' => 'Hackshade Techs',
			'organization_email' => 'hackshadetechs@gmail.com',
			'tutor_name' => 'Matovu Ronald'
		];
		$this->load->view('site/pass_variable', $information);
	}

	public function about()
	{
		$this->load->view('site/site_about');
	}

	public function contact_info()
	{
		echo "<h1>This is the contact us information</h1>";
	}

	public function product($name = '')
	{
		echo "<h1>This product is called {$name}</h1>";
	}

	public function service($id = '', $name = '')
	{
		echo "<h1>This is our service page {$id} and the service is {$name}</h1>";
	}

	public function insert_data_into_table()
	{
		$data = [
			'name' => 'Matovu Ronald',
			'email' => 'maronwhite6@gmail.com',
			'phone' => 756999607
		];

		$this->site_model->insert_table_data($data);
	}
}
