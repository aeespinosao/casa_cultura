<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	 public function validar(){
		 $config = array(
       array(
 							'field' => 'nombre',
 							'label' => 'Nombre del curso',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'cupos',
 							'label' => 'Cupos',
 							'rules' => 'required',
 			),
 			array(
 							'field' => 'clases',
 							'label' => 'Cantidad de clases',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'horas',
 							'label' => 'Horas por clase',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'fechas',
 							'label' => 'Fecha de inicio y finalización',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'fecha_limite',
 							'label' => 'Fecha limite de inscripción',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'entidad',
 							'label' => 'Entidad encargada del curso',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'doc_encargado',
 							'label' => 'Número de documento del responsable',
 							'rules' => 'required'
 			)
 			);

 			$this->form_validation->set_rules($config);
			return $this->form_validation->run();
	 }

	 public function leer_datos(){
		 $nombre=$this->input->post('nombre');
		 if(empty($nombre)){$nombre=NULL;}
		 $cupos=$this->input->post('cupos');
		 if(empty($cupos)){$cupos=NULL;}
		 $clases=$this->input->post('clases');
		 if(empty($clases)){$clases=NULL;}
		 $horas=$this->input->post('horas');
		 if(empty($horas)){$horas=NULL;}
		 $fechas=$this->input->post('fechas');
		 if(empty($fechas)){
			 $fechas=NULL;
			 $fecha_inicio=NULL;
			 $fecha_final=NULL;
		 }else{
			 $fecha_inicio=date("Y-m-d",strtotime(explode(' - ',$fechas)[0]));
			 $fecha_final=date("Y-m-d",strtotime(explode(' - ',$fechas)[1]));
		 }
		 $fecha_limite=$this->input->post('fecha_limite');
		 if(empty($fecha_limite)){
			 $fecha_limite=NULL;
		 }else{
			 $fecha_limite=date("Y-m-d",strtotime($fecha_limite));
		 }
		 $entidad=$this->input->post('entidad');
		 if(empty($entidad)){$entidad=NULL;}
		 $doc_encargado=$this->input->post('doc_encargado');
		 if(empty($doc_encargado)){$doc_encargado=NULL;}
		 return array('nombre' => $nombre ,
	  							'cupos' => $cupos,
									'clases' => $clases,
									'horas' => $horas,
									'fechas' => $fechas,
									'fecha_inicio' => $fecha_inicio,
									'fecha_final' => $fecha_final,
									'fecha_limite' => $fecha_limite,
									'entidad' => $entidad,
									'doc_encargado' => $doc_encargado);
	 }

	 public function array_vacio(){
		 return array('nombre' => '',
	  							'cupos' => '',
									'clases' => '',
									'horas' => '',
									'fechas' => '',
									'fecha_inicio' => '',
									'fecha_final' => '',
									'fecha_limite' => '',
									'entidad' => '',
									'doc_encargado' => '');
	 }

	public function crear()
	{
		if ($this->validar() == FALSE)
	   {
			$datos = $this->leer_datos();
			$data = array('datos' => $datos);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cursos/crear_curso',$data);
			$this->load->view('templates/footer');
	   }
	   else
	   {
			$datos = $this->leer_datos();
			$this->load->model('Curso');
			$curso = new curso($datos);
			if($curso->crear_curso()){
				$this->session->set_flashdata('success', 'Datos insertados correctamente');
			}
			else{
				$this->session->set_flashdata('danger', 'Hubo un problema al insertar los datos');
			}
			$data = array('datos' => $this->array_vacio());
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cursos/crear_curso',$data);
			$this->load->view('templates/footer');
			$this->session->unset_userdata('success','danger');
	    }
		}

	public function editar()
	{
		$this->load->model('Usuario');
		$this->load->model('Curso');
		$data = array('datos' => $this->Curso->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('cursos/editar_cursos',$data);
		$this->load->view('templates/footer');
	}

	public function eliminar()
	{
		$this->load->model('Curso');
		$data = array('datos' => $this->Curso->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('cursos/eliminar_cursos',$data);
		$this->load->view('templates/footer');
	}

	public function buscar()
	{
		$this->load->model('Curso');
		$data = array('datos' => $this->Curso->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('cursos/buscar_cursos',$data);
		$this->load->view('templates/footer');
	}

	public function editar_curso()
	{
		if($this->validar()==FALSE){
			$codigo = $this->uri->segment(3);
			$this->load->model('Curso');
			if(!isset($codigo)){
				$datos = $this->Curso->obtener_por_codigo($this->session->flashdata('codigo'));
				echo var_dump($this->session->flashdata('codigo'));
			}else{
				$datos = $this->Curso->obtener_por_codigo($codigo);
			}
			//echo var_dump($this->session->flashdata('documento'));
			$data = array('datos' => $datos);
			//echo var_dump($data);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('cursos/editar_curso',$data);
			$this->load->view('templates/footer');
			$this->session->set_flashdata('codigo', $codigo);
		}
		else{
			$datos = $this->leer_datos();
			$this->load->model('Curso');
			$curso = new curso($datos);
			echo var_dump($curso);
			if($curso->actualizar($this->session->flashdata('codigo'))){
				$this->session->set_flashdata('success', 'Datos actualizados correctamente');
			}
			else{
				$this->session->set_flashdata('danger', 'Hubo un problema al actualizar los datos');
			}
			redirect('cursos/editar');
		}
	}

	public function eliminar_curso()
	{
		$codigo = $this->uri->segment(3);
		$this->load->model('Curso');
		if (!$this->Curso->eliminar($codigo)){
			$this->session->set_flashdata('success', 'Curso eliminado correctamente');
		}
		else {
			$this->session->set_flashdata('danger', 'Hubo un problema al eliminar los datos');
		}
		redirect('cursos/eliminar');
	}

	public function buscar_curso()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('cursos/buscar_cursos');
		$this->load->view('templates/footer');
	}
}
