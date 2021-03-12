<?php

namespace App\Controllers;
use App\Models\mEstudiantes;

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
}
