<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenda extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_agenda'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'id_categoria'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'null' => true,
			],
			'nombre'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			],
			'paterno'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			],
			'materno'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			
			],
			'telefono'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			
			],
			'email'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			
			],
			'fecha'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			
			],
	]);
	$this->forge->addKey('id_agenda', true);
	$this->forge->addForeignKey('id_categoria','t_categoria','id_categoria','CASCADE','SET NULL');
	$this->forge->createTable('t_agenda');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_agenda');
	}
}
