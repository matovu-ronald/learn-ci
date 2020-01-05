<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Db_tables extends CI_Migration
{

	public function up()
	{
		// users table
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
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'address' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'status' => array(
				'type' => 'BOOL',
				'default' => 1
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');

		// studnets table
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
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'address' => array(
				'type' => 'TEXT',
				'null' => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('students');

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
		$this->dbforge->drop_table('users');
		$this->dbforge->drop_table('students');
		$this->dbforge->drop_table('faculties');
	}
}
