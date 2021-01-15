<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{

	public function up()
	{
		$this->forge->addField([
			'no_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'no_keranjang'		=> [
				'type'			 => 'INT',
				'unsigned'		 => TRUE,
			],
			'bank'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'harga'  => [
				'type'           => 'VARCHAR',
				'constraint'	 => '250',
			],
			'kurir'		  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			],
			'status'	  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			],
			'gambar'	  => [
				'type'			 => 'VARCHAR',
				'constraint' 	 => '255'
			]


		]);
		$this->forge->addKey('no_id', true);
		$this->forge->addForeignKey('no_keranjang', 'Keranjang', 'no_keranjang', 'CASCADE', 'CASCADE');
		$this->forge->createTable('pesanan');
	}

	public function down()
	{
		$this->forge->dropTable('pesanan');
	}
}
