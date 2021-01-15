<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
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
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama'  => [
				'type'           => 'VARCHAR',
				'constraint'	 => '250',
			],
			'toko'		  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			],
			'slug'	  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			],
			'harga' => [
				'type'			 => 'INT',
				'constraint'	 => '11',
			],
			'created_at'		=> [
				'type'			 => 'DATETIME',
			],
			'updated_at'		=> [
				'type'			 => 'DATETIME',
			],
			'detail'		=> [
				'type'			 => 'TEXT',
			],
			'stok'		=> [
				'type'			 => 'INT',
				'constraint'     => 5,
			]


		]);
		$this->forge->addKey('id_barang', true);
		$this->forge->createTable('barang');
	}

	public function down()
	{
		$this->forge->dropTable('barang');
	}
}
