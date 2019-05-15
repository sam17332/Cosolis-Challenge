<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Welcome_model");
		$this->load->helper('form');
		$this->load->database();
	}

	function index()
	{
		$this->load->view('Challenge');
	}

	public function recibir()
	{
		$nombres = $this->db->escape($_POST["nombres"]);
		$apellidos = $this->db->escape($_POST["apellidos"]);
		$apodo = $this->db->escape($_POST["apodo"]);
		$fecha = $this->db->escape($_POST["fecha"]);
		$talla = $this->db->escape($_POST["talla"]);
		$this->Welcome_model->setRecibir($nombres, $apellidos, $apodo, $fecha, $talla);
	}

	public function recibir1()
	{
		$fechaP = $this->db->escape($_POST["fechaP"]);
		$horaI = $this->db->escape($_POST["horaI"]);
		$horaF = $this->db->escape($_POST["horaF"]);
		$resultado = $this->db->escape($_POST["resultado"]);
		$this->Welcome_model->setRecibir1($fechaP, $horaI, $horaF, $resultado);
	}


}

