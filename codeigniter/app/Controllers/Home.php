<?php

namespace App\Controllers;

use App\Models\mEstudiantes;
use CodeIgniter\Exceptions\AlertError;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenida()
	{
		return view('vBienvenida');
	}
	public function registro()
	{
		return view('FormRegistroE');
	}
	public function Acceso()
	{
		return view('FormAcceso');
	}
	public function actualizar()
	{
		return view('FormActualizar');
	}
	// Funciones
	public function insertarEstudiantes()
	{
		$mEstudiantes = new mEstudiantes();
		$nEstudiante = [
			"NoControl" => $_POST['control'],
			"Nombre" => $_POST['nombre'],
			"Apellidos" => $_POST['apellidos'],
			"Grado" => $_POST['grado'],
			"Grupo" => $_POST['grupo'],
			"Carrera" => $_POST['carrera']
		];
		$mEstudiantes->insert($nEstudiante);
		return view("vInserted");
	}
	public function mostrarEstudiante()
	{
		// $mEstudiantes = new mEstudiantes();
		// $todos = $mEstudiantes->getAllE();
		// //$todos = $mEstudiantes->findAll();
		// $Estudiantes = array("Estudiantes" => $todos);

		//return view("vEstudiantes", $Estudiantes);
		return view("vEstudiantes");
	}
	public function buscarRegistro()
	{
		$mEstudiantes = new mEstudiantes();
		$NoControl = $_POST['control'];
		$estudiante = $mEstudiantes->find($NoControl);
		return view("vEstudianteEncontrado",$estudiante);
	}
	public function actualizarRegistro()
	{
		$mEstudiantes = new mEstudiantes();
		$NoControl = $_POST['control'];
		$estudianteactualizado = [
			"Nombre" => $_POST['nombre'],
			"Apellidos" => $_POST['apellido'],
			"Grado" => $_POST['grado'],
			"Grupo" => $_POST['grupo'],
			"Carrera" => $_POST['carrera']
		];
		$mEstudiantes->update($NoControl, $estudianteactualizado);
		$usuario = $mEstudiantes->find($NoControl);
		return $this->mostrarEstudiante();
	}
	public function eliminarEstudiantes($id)
	{
		$mEstudiantes = new mEstudiantes();
		$id_Usuario = $id;
		$mEstudiantes->delete($id_Usuario);
		return $this->mostrarEstudiante();
	}
}
