<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {

	public function inscribir()
	{
		$this->load->model('Curso');
		$data = array('datos' => $this->Curso->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('matriculas/inscribir',$data);
		$this->load->view('templates/footer');
	}

	public function cancelar()
	{
		$this->load->model('Curso');
		$data = array('datos' => $this->Curso->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('matriculas/cancelar',$data);
		$this->load->view('templates/footer');
	}

	public function asistencia()
	{
		$this->load->model('Curso');
		$data = array('datos' => $this->Curso->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('matriculas/asistencia',$data);
		$this->load->view('templates/footer');
	}

	public function inscribir_usuarios()
	{
		$this->load->model('Usuario');
		$this->session->set_flashdata('curso',$this->uri->segment(3));
		$data = array('datos' => $this->Usuario->obtener_todos());
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('matriculas/inscribir_usuarios',$data);
		$this->load->view('templates/footer');
	}

	public function cancelar_usuarios()
	{
		$this->load->model('Matricula');
		$curso = $this->uri->segment(3);
		$this->session->set_flashdata('curso',$this->uri->segment(3));
		$data = array('datos' => $this->Matricula->obtener_por_codigo($curso));
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('matriculas/cancelar_usuarios',$data);
		$this->load->view('templates/footer');
	}

	public function tomar_asistencia(){
		$this->load->model('Matricula');
		$curso = $this->uri->segment(3);
		$this->session->set_flashdata('curso',$this->uri->segment(3));
		$data = array('datos' => $this->Matricula->obtener_curso_por_codigo($curso),'asistencias' => $this->Matricula->obtener_asistencias($curso));
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('matriculas/asistencia_curso',$data);
		$this->load->view('templates/footer');
	}

	public function guardar_inscripcion(){
		$curso = $this->session->flashdata('curso');
		$inscritos = $this->input->post('inscritos[]');
		$this->load->model('Matricula');
		$this->load->model('Curso');
		$clases = $this->Curso->obtener_por_codigo($curso);
		foreach ($inscritos as $inscrito) {
			$datos = array('numero_documento' => $inscrito , 'codigo_curso' => $curso);
			$matricula = new matricula($datos);
			if($matricula->crear_inscripcion()){
				$this->session->set_flashdata('success', 'Datos insertados correctamente');
			}
			else{
				$this->session->set_flashdata('danger', 'Hubo un problema al insertar los datos');
			}
		if($matricula->crear_asistencia($clases[0]->clases)){
				$this->session->set_flashdata('success', 'Datos insertados correctamente');
			}
			else{
				$this->session->set_flashdata('danger', 'Hubo un problema al insertar los datos');
			}
		}
		redirect('matriculas/inscribir');

	}

	public function borrar_inscripcion(){
		$curso = $this->session->flashdata('curso');
		$cancelaciones = $this->input->post('cancelaciones[]');
		$this->load->model('Matricula');
		foreach ($cancelaciones as $cancelacion) {
		if($this->Matricula->borrar_asistencia($curso,$cancelacion)){
					$this->session->set_flashdata('success', 'Datos eliminados correctamente');
				}
				/*else{
					$this->session->set_flashdata('danger', 'Hubo un problema al insertar los datos');
				}*/
			if($this->Matricula->eliminar_inscripcion($curso,$cancelacion)){
				$this->session->set_flashdata('success', 'Datos eliminados correctamente');
			}
			/*else{
				$this->session->set_flashdata('danger', 'Hubo un problema al insertar los datos');
			}*/
		}
		redirect('matriculas/cancelar');
	}

	public function guardar_asistencia(){
		$asistencias = $this->input->post('asistencias[]');
		$this->load->model('Matricula');
		foreach ($asistencias as $asistencia) {
			$asistencia_separada=explode('/',$asistencia);
			if($this->Matricula->actualizar_asistencia($asistencia_separada[0],$asistencia_separada[1],$asistencia_separada[2])){
				$this->session->set_flashdata('success', 'Datos actualizados correctamente');
			}else{
				$this->session->set_flashdata('danger', 'Hubo un problema al actualizar los datos');
			}
		}
		redirect('matriculas/asistencia');
	}

	public function cerrar_curso(){
		$asistencias = $this->input->post('asistencias[]');
		$this->load->model('Matricula');
		foreach ($asistencias as $asistencia) {
			$asistencia_separada=explode('/',$asistencia);
			if($this->Matricula->actualizar_asistencia($asistencia_separada[0],$asistencia_separada[1],$asistencia_separada[2])){
				//$this->Matricula->evaluar($asistencia_separada[0],$asistencia_separada[1]);
				$this->session->set_flashdata('success', 'Datos actualizados correctamente');
			}else{
				$this->session->set_flashdata('danger', 'Hubo un problema al actualizar los datos');
			}
		}
		redirect('matriculas/asistencia');
	}

	public function exportar_matriculados()
	{
		$this->load->helper('mysql_to_excel_helper');
		$this->load->model('Matricula');
		to_excel($this->Matricula->obtener_todo_exportar(), "Usuarios por curso");
		//redirect('welcome/index');
	}
}
