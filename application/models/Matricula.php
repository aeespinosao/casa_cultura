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
/*
    public function get_mis_cursos($jugador){
        $this->load->database();
        $this->db->select('codigo_curso');
        $query = $this->db->get_where('matricula', array(
            'cedula_jugador' => $jugador->cedula
        ));

        $mis_cursos = [];
        foreach($query->result() as $row)
            $mis_cursos[] = $row->codigo_curso;

        return $mis_cursos;
    }

    public function get_curso($cod){
        $this->load->database();
        $query = $this->db->get_where('curso', array('codigo' => $cod));
        return $query->result();
    }

    public function get_horario($cod){
        $this->load->database();
        $this->db->select('horario');
        $query = $this->db->get_where('curso', array('codigo' => $cod));
        return $query->result();
    }

    public function get_nivel($cod){
        $this->load->database();
        $this->db->select('nivel');
        $query = $this->db->get_where('curso', array('codigo' => $cod));
        return $query->result();
    }

		public function delete($cod){
        $this->load->database();
        $query = $this->db->delete('curso', array('codigo' => $cod));
        $query = $this->db->get_where('curso', array('codigo' => $cod));
        return $query->result();
    }

    public function get_current_jugador(){
        $this->load->database();
        $query = $this->db->get('jugador');
        $jugadores = $query->result();
        if(count($jugadores) > 0) return $jugadores[0];
        return false;
    }*/
} ?>
