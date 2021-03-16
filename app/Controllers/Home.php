<?php
namespace App\Controllers;
use App\Models\mUsuariose;

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
		return view('vRegistro');
	}
	public function actualizar()
	{
		return view('vActualizar');
	}
	public function eliminar()
	{
		return view('vEliminar');
	}
	public function insertarForm()
	{
		$mUsuariose = new mUsuariose();
		$usuarioNuevo=[
		    "nombre"=>$_POST['Nombre'],
		    "apellidos"=>$_POST['Apellidos'],
		    "correo"=>$_POST['Correo'],
		    "contrasena"=>$_POST['Contrasena'],
		    "carrera"=>$_POST['Carrera'],	
		    "telefono"=>$_POST['Telefono'],
		    "domicilio"=>$_POST['Domicilio'],
		    "residencia"=>$_POST['Residencia']		    		    	    		    		    
		];
		$mUsuariose->insert($usuarioNuevo);
		$datoId['idRegistrado'] = $mUsuariose->db->insertId();
		return view("vSuccess",$datoId);
	}
}
