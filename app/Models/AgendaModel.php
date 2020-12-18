<?php namespace App\Models;
	use CodeIgniter\Model;
	/**
	 * 
	 */
	class AgendaModel extends Model
	{
		
		public function Contactos(){
			$nombres = $this->db->query("SELECT * FROM t_agenda");
			return $nombres->getResult();
		}
		public function insertar($datos){
			$nombres = $this->db->table('t_agenda');
			$nombres ->insert($datos);
			return $this->db->insertID();
		}
		public function Datos($data){
			$nombres = $this->db->table('t_agenda');
			$nombres->where($data);
			return $nombres->get()->getResultArray();
		}
		public function actualizar($data, $idAgenda){
			$nombres = $this->db->table('t_agenda');
			$nombres->set($data);
			$nombres->where('id_agenda',$idAgenda);
			return $nombres->update();
		}
		public function eliminar($data){
			$nombres =$this->db->table('t_agenda');
			$nombres->where($data);
			return $nombres->delete();
		}

		public function Categoria(){
			$nombres = $this->db->query("SELECT * FROM t_categoria");
			return $nombres->getResult();
		}
		public function agregar($datos){
			$nombres = $this->db->table('t_categoria');
			$nombres ->insert($datos);
			return $this->db->insertID();
		}

		public function DatosC($data){
			$nombres = $this->db->table('t_categoria');
			$nombres->where($data);
			return $nombres->get()->getResultArray();
		}
		public function actualizarC($data, $idAgenda){
			$nombres = $this->db->table('t_categoria');
			$nombres->set($data);
			$nombres->where('id_categoria',$idAgenda);
			return $nombres->update();
		}
		public function eliminarC($data){
			$nombres =$this->db->table('t_categoria');
			$nombres->where($data);
			return $nombres->delete();
		}
	}