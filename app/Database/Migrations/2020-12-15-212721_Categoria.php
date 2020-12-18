<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categoria extends Migration
{
	public function up()
	{
		$this->forge->addField([
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
			'descripcion'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			],
			'fecha'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '255',
			
			],
	]);
	$this->forge->addKey('id_categoria', true);
	$this->forge->createTable('t_categoria');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('t_categoria');
		
	}
}
