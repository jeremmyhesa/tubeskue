<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keranjang extends Migration
{

	public function up()
	{
		$this->forge->addField([
			'no_keranjang'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_barang'	   => [
				'type'			 => 'INT',
				'unsigned'		 => TRUE,
			],
			'id_user'		=> [
				'type'			 => 'INT',
				'unsigned'		 => TRUE,
			],
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'harga'  => [
				'type'           => 'VARCHAR',
				'constraint'	 => '250',
			],
			'ongkir'		  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			],
			'sub_total'	  => [
				'type'			 => 'VARCHAR',
				'constraint'	 => '200',
			]


		]);
		$this->forge->addKey('no_keranjang', true);
		$this->forge->addForeignKey('id_barang', 'Barang', 'id_barang', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_user', 'User', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('keranjang');
	}

	public function down()
	{
		$this->forge->dropTable('keranjang');
	}
}
