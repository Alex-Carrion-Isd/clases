<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Cuenta");
		$this->load->model("Persona");
		$this->load->model("Rol");
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function listarCuentas(){
		$lista = Cuenta::all();
		foreach ($lista as $cu) {
			echo $cu->usuario.' '.$cu->clave.' '.$cu->persona;
		}
		echo "<br><br>";
		$lista1 = Persona::all();
		foreach ($lista1 as $pe) {
			echo $pe->nombre.' '.$pe->apellido_paterno.' '.$pe->correo.' '.$pe->cuenta.' '.$pe->rol;
		}
		echo "<br><br>";
		$lista2 = Rol::all();
		foreach ($lista2 as $ro) {
			echo $ro->nombre.' '.$ro->personas;
		}
		//var_dump($lista);
	}
}
