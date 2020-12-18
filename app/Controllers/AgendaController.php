<?php namespace App\Controllers;
	use App\Models\AgendaModel;

class AgendaController extends BaseController
{
	public function index()
	{
		$vistas = view('header').
				  view('inicio').
				  view('footer');
		return $vistas;
	}

	public function Contacto(){

		$Agenda = new AgendaModel();
		$datos = $Agenda->Contactos();
		$mensaje = session('mensaje');
		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];
		$vistas = view('header').
				  view('Contacto',$data);

		return $vistas;
	}

	public function Crear(){
		$datos = [
					"id_categoria" => $_POST['id_categoria'],
					"nombre" => $_POST['nombre'],
					"paterno"=> $_POST['paterno'],
					"materno"=> $_POST['materno'],
					"telefono" => $_POST['telefono'],
					"email" => $_POST['email'],
					"fecha" => $_POST['fecha']
				];
		$Agenda = new AgendaModel();
		$respuesta = $Agenda->insertar($datos);
		if($respuesta){
			return redirect()->to(base_url().'/Contacto')->with('mensaje', '0');
		}else{
			return redirect()->to(base_url().'/Contacto')->with('mensaje', '1');
		}
	}

	public function obtenerA($idAgenda){
		$data = ["id_agenda" => $idAgenda];
		$Agenda = new AgendaModel();
		$respuesta = $Agenda->Datos($data);
		$datos = [
					"datos" => $respuesta
				];
		$vistas = view('header').
				  view('actualizarA',$datos).
				  view('footer');

		return $vistas;
	}

	public function actualizar(){
		$datos = [
					"id_categoria" => $_POST['id_categoria'],
					"nombre" => $_POST['nombre'],
					"paterno"=> $_POST['paterno'],
					"materno"=> $_POST['materno'],
					"telefono" => $_POST['telefono'],
					"email" => $_POST['email'],
					"fecha" => $_POST['fecha']
				];
		$idAgenda = $_POST['idAgenda'];
		$Agenda = new AgendaModel();
		$respuesta = $Agenda->actualizar($datos, $idAgenda);
		if($respuesta){
			return redirect()->to(base_url().'/Contacto')->with('mensaje', '2');
		}else{
			return redirect() 	->to(base_url().'/Contacto')->with('mensaje', '3');
		}
	}

	
	public function eliminar($idAgenda){
		$Agenda = new AgendaModel();
		$data = ["id_agenda" => $idAgenda];
		$respuesta = $Agenda->eliminar($data);
		if($respuesta){
			return redirect()->to(base_url().'/Contacto')->with('mensaje', '4');
		}else{
			return redirect()->to(base_url().'/Contacto')->with('mensaje', '5');
		}
	}


	//Funciones para Categoría
	public function Categoria(){

		$Agenda = new AgendaModel();
		$datos = $Agenda->Categoria();
		$mensaje = session('mensaje');
		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje

				];
		$vistas = view('header').
				  view('Categoria',$data);

		return $vistas;
	}
	public function CrearC(){
		$datos = [
					"id_categoria" => $_POST['id_categoria'],
					"nombre" => $_POST['nombre'],
					"descripcion"=> $_POST['descripcion'],
					"fecha" => $_POST['fecha']
				];
		$Agenda = new AgendaModel();
		$respuesta = $Agenda->agregar($datos);
		if($respuesta){
			return redirect()->to(base_url().'/Categoria')->with('mensaje', '0');
		}else{
			return redirect()->to(base_url().'/Categoria')->with('mensaje', '1');
		}
	}

	public function obtenerC($idCategoria){
		$data = ["id_categoria" => $idCategoria];
		$Agenda = new AgendaModel();
		$respuesta = $Agenda->DatosC($data);
		$datos = [
					"datos" => $respuesta
				];
		$vistas = view('header').
				  view('actualizarC',$datos).
				  view('footer');

		return $vistas;
	}

	public function actualizarC(){
		$datos = [
					"id_categoria" => $_POST['id_categoria'],
					"nombre" => $_POST['nombre'],
					"descripcion" => $_POST['descripcion'],
					"fecha" => $_POST['fecha']
				];
		$idAgenda = $_POST['id_categoria'];
		$Agenda = new AgendaModel();
		$respuesta = $Agenda->actualizarC($datos, $idAgenda);
		if($respuesta){
			return redirect()->to(base_url().'/Categoria')->with('mensaje', '2');
		}else{
			return redirect() 	->to(base_url().'/Categoria')->with('mensaje', '3');
		}
	}

	
	public function eliminarC($idCategoria){
		$Agenda = new AgendaModel();
		$data = ["id_categoria" => $idCategoria];
		$respuesta = $Agenda->eliminarC($data);
		if($respuesta){
			return redirect()->to(base_url().'/Categoria')->with('mensaje', '4');
		}else{
			return redirect()->to(base_url().'/Categoria')->with('mensaje', '5');
		}
	}
	//--------------------------------------------------------------------

}
