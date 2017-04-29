<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	 public function validar(){
		 $config = array(
 			array(
 							'field' => 'doc',
 							'label' => 'Número de documento	',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'nombres',
 							'label' => 'Nombres',
 							'rules' => 'required',
 			),
 			array(
 							'field' => 'apellidos',
 							'label' => 'Apellidos',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'municipio',
 							'label' => 'municipio de nacimiento',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'fecha_nacimiento',
 							'label' => 'Fecha de nacimiento',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'barrio',
 							'label' => 'Barrio',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'edad',
 							'label' => 'Edad',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'genero',
 							'label' => 'Género',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'direccion',
 							'label' => 'Dirección',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'telefono',
 							'label' => 'Telefono fijo',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'celular',
 							'label' => 'Celular',
 							'rules' => 'required'
 			),
 			array(
 							'field' => 'diversidad',
 							'label' => 'Diversidad sexual',
 							'rules' => 'required'
 			)
 			);

 			$this->form_validation->set_rules($config);
			return $this->form_validation->run();
	 }

	 public function leer_datos(){
		 $tipo_documento=$this->input->post('tipo_doc');
		 $documento=$this->input->post('doc');
		 if(empty($documento)){$documento=NULL;}
		 $nombres=$this->input->post('nombres');
		 $apellidos=$this->input->post('apellidos');
		 $municipio=$this->input->post('municipio');
		 $fecha_nacimiento=$this->input->post('fecha_nacimiento');
		 $comuna=$this->input->post('comuna');
		 $barrio=$this->input->post('barrio');
		 $edad=$this->input->post('edad');
		 $genero=$this->input->post('genero');
		 $direccion=$this->input->post('direccion');
		 $telefono=$this->input->post('telefono');
		 $celular=$this->input->post('celular');
		 $correo=$this->input->post('correo');
		 if(empty($correo)){$correo=NULL;}
		 $tipo_sanguineo=$this->input->post('tipo_sanguineo');
		 $eps=$this->input->post('eps');
		 if(empty($eps)){$eps=NULL;}
		 $etnia=$this->input->post('etnia');
		 if(empty($etnia)){$etnia='ninguna';}
		 $discapacidad=$this->input->post('discapacidad');
		 if(empty($discapacidad)){$discapacidad='ninguna';}
		 $diversidad_sexual=$this->input->post('diversidad');
		 $intereses=$this->input->post('intereses');
		 $documento_acudiente=$this->input->post('doc_acudiente');
		 if(empty($documento_acudiente)){$documento_acudiente=NULL;}
		 $parentesco_acudiente=$this->input->post('parentesco');
		 if(empty($parentesco_acudiente)){$parentesco_acudiente=NULL;}
		 return array('tipo_documento' => $tipo_documento ,
	  							'documento' => $documento,
									'nombres' => $nombres,
									'apellidos' => $apellidos,
									'municipio' => $municipio,
									'fecha_nacimiento' => $fecha_nacimiento,
									'comuna' => $comuna,
									'barrio' => $barrio,
									'edad' => $edad,
									'genero' => $genero,
									'direccion' => $direccion,
									'telefono' => $telefono,
									'celular' => $celular,
									'correo' => $correo,
									'tipo_sanguineo' => $tipo_sanguineo,
									'eps' => $eps,
									'etnia' => $etnia,
									'discapacidad' => $discapacidad,
									'diversidad_sexual' => $diversidad_sexual,
									'intereses' => $intereses,
									'documento_acudiente' => $documento_acudiente,
									'parentesco_acudiente' => $parentesco_acudiente);
	 }

	 public function array_vacio(){
		 return array('tipo_documento' => '' ,
	  							'documento' => '',
									'nombres' => '',
									'apellidos' => '',
									'municipio' => '',
									'fecha_nacimiento' => '',
									'comuna' => '',
									'barrio' => '',
									'edad' => '',
									'genero' => '',
									'direccion' => '',
									'telefono' => '',
									'celular' => '',
									'correo' => '',
									'tipo_sanguineo' => '',
									'eps' => '',
									'etnia' => '',
									'discapacidad' => '',
									'diversidad_sexual' => '',
									'intereses' => '',
									'documento_acudiente' => '',
									'parentesco_acudiente' => '');
	 }

	public function crear()
	{
		if ($this->validar() == FALSE)
    {
			$datos = $this->leer_datos();
			$data = array('datos' => $datos);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('usuarios/crear_usuario',$data);
			$this->load->view('templates/footer');
    }
    else
    {
				$datos = $this->leer_datos();
				$datos['fecha_nacimiento'] = date("Y-m-d",strtotime($datos['fecha_nacimiento']));
				$this->load->model('Usuario');
				$usuario = new usuario($datos);
				if($usuario->crear_usuario()){
					$this->session->set_flashdata('success', 'Datos insertados correctamente');
				}
				else{
					$this->session->set_flashdata('danger', 'Hubo un problema al insertar los datos');
				}
				$data = array('datos' => $this->array_vacio());
				$this->load->view('templates/header');
				$this->load->view('templates/menu');
				$this->load->view('usuarios/crear_usuario',$data);
				$this->load->view('templates/footer');
				$this->session->unset_userdata('success','danger');
    }

	}

	public function editar()
	{
		$this->load->model('Usuario');
		$data = array('datos' => $this->Usuario->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('usuarios/editar_usuarios',$data);
		$this->load->view('templates/footer');
		$this->session->unset_userdata('success','danger');
	}

	public function eliminar()
	{
		$this->load->model('Usuario');
		$data = array('datos' => $this->Usuario->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('usuarios/eliminar_usuarios',$data);
		$this->load->view('templates/footer');
	}

	public function buscar()
	{
		$this->load->model('Usuario');
		$data = array('datos' => $this->Usuario->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('usuarios/buscar_usuarios',$data);
		$this->load->view('templates/footer');
	}

	public function editar_usuario()
	{
		if($this->validar()==FALSE){
			$documento = $this->uri->segment(3);
			$this->load->model('Usuario');
			if(isset($documento)){
				$datos = $this->Usuario->obtener_por_documento($documento);
			}else{
				$datos = $this->Usuario->obtener_por_documento($this->session->flashdata('documento'));
			}
			//echo var_dump($this->session->flashdata('documento'));
			$data = array('datos' => $datos);
			//echo var_dump($data);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('usuarios/editar_usuario',$data);
			$this->load->view('templates/footer');
			$this->session->set_flashdata('documento', $documento);
		}
		else{
			$datos = $this->leer_datos();
			$this->load->model('Usuario');
			$usuario = new usuario($datos);
			if($usuario->actualizar()){
				$this->session->set_flashdata('success', 'Datos actualizados correctamente');
			}
			else{
				$this->session->set_flashdata('danger', 'Hubo un problema al actualizar los datos');
			}
			redirect('usuarios/editar');
		}
	}

	public function eliminar_usuario()
	{
		$documento = $this->uri->segment(3);
		$this->load->model('Usuario');
		if (!$this->Usuario->eliminar($documento)){
			$this->session->set_flashdata('success', 'Usuario eliminado correctamente');
		}
		else {
			$this->session->set_flashdata('danger', 'Hubo un problema al eliminar los datos');
		}
		redirect('usuarios/eliminar');
	}

	public function buscar_usuario()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('usuarios/buscar_usuarios');
		$this->load->view('templates/footer');
	}
}
