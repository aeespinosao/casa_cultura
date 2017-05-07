<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuario');
		$this->load->model('Curso');
		$hombres_mujeres=$this->Usuario->hombres_mujeres();
		$data = array('usuarios' => $this->Usuario->total_usuarios(),
									'hombres' => $hombres_mujeres[1]->total,
									'mujeres' => $hombres_mujeres[0]->total,
									'menores' => $this->Usuario->menores_edad(),
									'mayores' => $this->Usuario->tercera_edad(),
									'cursos' => $this->Curso->total_cursos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
}
?>
