<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Agenda extends Seeder
{
	public function run()
	{
		$data = [
					"id_categoria"	=> 	'1',
					"nombre"	=> 	'Guillermo',
					"paterno"	=>	'Hernández',
					"materno"	=>	'Castro',
					"telefono"	=>	'5518158743',
					"email"		=>	'hguillermo@gmail.com',
					"fecha"		=>	'15/12/2020'
				];
		$this->db->table('t_agenda')->insert($data);
	}
}
