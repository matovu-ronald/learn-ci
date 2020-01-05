<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Tbl_faculties extends CI_Migration
{

	public function up()
	{
		// faculties table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'designation' => array(
				'type' => 'VARCHAR',
				'constraint' => '120'
			),
			'phone' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('faculties');
	}

	public function down()
	{
		$this->dbforge->drop_table('faculties');
	}
}
