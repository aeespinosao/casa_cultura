<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matricula extends CI_Model {
	public $codigo;
	public $codigo_curso;
	public $numero_documento;
	public $estado;

  public function __construct($value = NULL) {
        parent::__construct();
        if ($value != NULL) {
            if (is_array($value))
                settype($value, 'object');

            if (is_object($value)) {
                $this->codigo = $this->obtener_codigo();
                $this->codigo_curso = isset($value->codigo_curso) ? $value->codigo_curso : NULL;
                $this->numero_documento = isset($value->numero_documento) ? $value->numero_documento : NULL;
                //$this->estado = isset($value->estado) ? $value->estado : NULL;
            }
        }
    }

		public function obtener_codigo(){
			$this->db->select_max('codigo');
    	$query = $this->db->get('matricula');
			if (!is_null($query->result()[0]->codigo)) {
				return $query->result()[0]->codigo+1;
			}
			else{
				return 1;
			}
		}

  	public function crear_inscripcion(){
          try{
              $this->db->insert("matricula", array(
                'codigo' => $this->codigo,
                'codigo_curso' => $this->codigo_curso,
                'numero_documento' => $this->numero_documento
              ));
          }catch (Exception $e){
              return false;
          }
          return true;
  	}

		public function crear_asistencia($clases){
			try{
			for ($i=0; $i < intval($clases); $i++) {
						$this->db->insert("asistencia", array(
							'codigo_matricula' => $this->codigo,
							'codigo_curso' => $this->codigo_curso,
							'numero_documento' => $this->numero_documento,
							'clase' => $i+1
						));
			}
			}catch (Exception $e){
					return false;
			}
			return true;
		}

		public function eliminar_inscripcion($curso,$cancelacion){
			echo var_dump($cancelacion);
					$this->db->delete('matricula', array(
								'codigo_curso' => $curso,
								'numero_documento' => $cancelacion,
							));
					$query = $this->db->get_where('matricula', array(
								'codigo_curso' => $curso,
								'numero_documento' => $cancelacion,
							));
					return $query->result();
			}


		public function borrar_asistencia($curso,$cancelacion){
				$this->db->delete("asistencia", array(
							'codigo_curso' => $curso,
							'numero_documento' => $cancelacion,
						));
				$query = $this->db->get_where('asistencia', array(
							'codigo_curso' => $curso,
							'numero_documento' => $cancelacion,
						));
				return $query->result();
		}

		public function obtener_curso_por_codigo($codigo_curso){
			$this->db->select('*');
      $this->db->from('matricula');
      $this->db->join('curso', 'curso.codigo = matricula.codigo_curso');
			$this->db->where(array('codigo_curso' => $codigo_curso));
      $query = $this->db->get();
      return $query->result();
    }

		public function obtener_asistencias($codigo_curso){
			$query = $this->db->get_where('asistencia', array(
						'codigo_curso' => $codigo_curso,
						'reporte' => 1
					));
			return $query->result();
		}

		public function obtener_asistentes($codigo_curso){
			$query = $this->db->get_where('asistencia', array(
						'codigo_curso' => $codigo_curso,
						'reporte' => 1
					));
			return $query->result();
		}

		public function actualizar_asistencia($numero_documento,$codigo_curso,$clase){
			try{
				$this->db->set(array(
								'reporte' => 1
							));
					$this->db->where(array('codigo_curso' => $codigo_curso,
					 											'numero_documento' => $numero_documento,
																'clase' => $clase));
					$this->db->update('asistencia');
			}catch (Exception $e){
					return false;
			}
			return true;
		}

    public function obtener_por_codigo($codigo_curso){
			$this->db->select('*');
      $this->db->from('matricula');
      $this->db->join('usuario', 'usuario.numero_documento = matricula.numero_documento');
			$this->db->where(array('codigo_curso' => $codigo_curso));
      $query = $this->db->get();
      return $query->result();
    }

    public function eliminar($codigo){
        $query = $this->db->delete('curso', array('codigo' => $codigo));
        $query = $this->db->get_where('curso', array('codigo' => $codigo));
        return $query->result();
    }

		public function contar_inscritos($codigo){
			$this->db->select('COUNT(*) as total');
			$query = $this->db->get_where('asistencia',array('codigo_curso'=> $codigo));
			//echo var_dump($query);
			return $query->result();
		}

		public function obtener_todo_exportar()
		{

			$this->db->select('curso.nombre as Nombre_curso,curso.estado as Estado_curso,usuario.numero_documento as Documento,
												usuario.nombres as Nombre,usuario.apellidos as Apellidos,matricula.estado as Estado');
      $this->db->from('matricula');
      $this->db->join('usuario', 'usuario.numero_documento = matricula.numero_documento');
			$this->db->join('curso', 'curso.codigo = matricula.codigo_curso');
      $query = $this->db->get();
			$fields = $query->field_data();
			return array("fields" => $fields, "query" => $query);
		}
} ?>
