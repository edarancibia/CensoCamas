<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Camas_model');
		$this->load->library('Jsonwrapper');
	}

	public function index(){

		$data['sech'] = $this->Camas_model->sectorH();
		$data['secf'] = $this->Camas_model->sectorF();
		$data['sece'] = $this->Camas_model->sectorE();
		$data['secm'] = $this->Camas_model->sectorM();
		$data['secupc'] = $this->Camas_model->sectorUpc();
		$this->load->view('template/header');
		$this->load->view('index',$data);
	}

	//llama metodo que busca datos del paciente
	public function Datos(){
		$nrofi = $this->input->post('nrofi');
		$data = $this->Camas_model->getDatos($nrofi);
		echo json_encode($data);
	}
}