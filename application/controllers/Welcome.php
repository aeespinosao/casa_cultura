<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Usuario');
		$this->load->model('Curso');
		$hombres_mujeres=$this->Usuario->hombres_mujeres();
		if(empty($hombres_mujeres)){
			$hombres_mujeres = array('0' => array('total' =>'0'),'1' => array('total' =>'0'));
		}
		$menores= $this->Usuario->menores_edad();
		$mayores=$this->Usuario->tercera_edad();
		$total=$this->Usuario->total_usuarios();
		$diversidad_sexual = $this->Usuario->obtener_por_diversidad_sexual();
		$etnia = $this->Usuario->obtener_por_etnia();
		$discapacidad = $this->Usuario->obtener_por_discapacidad();
		//$comuna11 = $this->Usuario->obtener_por_comuna11();
		$grafica2 = array('menores' => (int)$menores[0]->total,'adultos'=> (float)$total[0]->total-(int)$menores[0]->total-(int)$mayores[0]->total,'mayores'=>(int)$mayores[0]->total);
		$data = array('usuarios' => $total,
									'hombres' => is_object($hombres_mujeres[1]) ? $hombres_mujeres[1]->total : '0',
									'mujeres' => is_object($hombres_mujeres[0]) ? $hombres_mujeres[0]->total : '0',
									'menores' => $menores,
									'mayores' => $mayores,
									'cursos' => $this->Curso->total_cursos(),
									'grafica1' => $hombres_mujeres,
									'grafica2' => $grafica2,
									'grafica3' => $diversidad_sexual,
									'grafica4' => $etnia,
									'grafica5' => $discapacidad);
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
}
?>
