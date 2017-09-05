<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Censo extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Censo_model');
		$this->load->library('Jsonwrapper');
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('censo/censo');
	}

	public function Egresos(){
		$this->load->view('template/header');
		$this->load->view('censo/censoEgresos');
	}

	public function Info(){
		$request = $this->input->post('request');
		$desde = $this->input->post('desde');
		$hasta = $this->input->post('hasta');

		if ($request == 'dia') {
			$data = $this->Censo_model->getDia($desde);
			echo json_encode($data);
		}elseif ($request == 'entre') {
			$data = $this->Censo_model->getAll($desde,$hasta);
			echo json_encode($data);
		}elseif ($request == 'allEgre') {
			$data = $this->Censo_model->getAllEgresos($desde,$hasta);
			echo json_encode($data);
		}elseif ($request == 'diaEgre') {
			$data = $this->Censo_model->getEgresosDia($desde);
			echo json_encode($data);
		}

	}

}