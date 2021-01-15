<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{

	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kata_sandi'  => [
				'type'           => 'VARCHAR',
				'constraint'	 => '250',
			],
			'nama'		  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			],
			'no_telp'	  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '20',
			],
			'tanggal_lahir' => [
				'type'			 => 'DATE',
			],
			'alamat'		=> [
				'type'			 => 'VARCHAR',
				'constraint'	 => '300',
			],
			'kode_pos'		=> [
				'type'			 => 'VARCHAR',
				'constraint'	 => '6',
			],
			'level'		=> [
				'type'			 => 'VARCHAR',
				'constraint'	 => '20',
			]


		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
