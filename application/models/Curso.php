<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Model {
	public $nombre;
	public $cupos;
	public $clases;
	public $horas;
  //public $fechas;
  public $fecha_inicio;
  public $fecha_final;
  public $fecha_limite;
  public $entidad;
  public $doc_encargado;

  public function __construct($value = NULL) {
        parent::__construct();
        if ($value != NULL) {
            if (is_array($value))
                settype($value, 'object');

            if (is_object($value)) {
                $this->nombre = isset($value->nombre) ? $value->nombre : NULL;
                $this->cupos = isset($value->cupos) ? $value->cupos : NULL;
                $this->clases = isset($value->clases) ? $value->clases : NULL;
                $this->horas = isset($value->horas) ? $value->horas : NULL;
                $this->fecha_inicio = isset($value->fecha_inicio) ? $value->fecha_inicio : NULL;
                $this->fecha_final = isset($value->fecha_final) ? $value->fecha_final : NULL;
                $this->fecha_limite = isset($value->fecha_limite) ? $value->fecha_limite : NULL;
                $this->entidad = isset($value->entidad) ? $value->entidad : NULL;
                $this->doc_encargado = isset($value->doc_encargado) ? $value->doc_encargado : NULL;
            }
        }
    }

  	public function crear_curso(){
          try{
              $this->db->insert("curso", array(
                'nombre' => $this->nombre,
                'cupos' => $this->cupos,
                'clases' => $this->clases,
                'horas' => $this->horas,
                'fecha_inicio' => $this->fecha_inicio,
                'fecha_final' => $this->fecha_final,
                'fecha_limite' => $this->fecha_limite,
                'entidad' => $this->entidad,
                'doc_encargado' => $this->doc_encargado
              ));
          }catch (Exception $e){
              return false;
          }
          return true;
  	}

    public function actualizar($codigo){
        try{
          $this->db->set(array(
                  'nombre' => $this->nombre,
                  'cupos' => $this->cupos,
                  'clases' => $this->clases,
                  'horas' => $this->horas,
                  'fecha_inicio' => $this->fecha_inicio,
                  'fecha_final' => $this->fecha_final,
                  'fecha_limite' => $this->fecha_limite,
                  'entidad' => $this->entidad,
                  'doc_encargado' => $this->doc_encargado
                ));
            $this->db->where('codigo', $codigo);
            $this->db->update('curso');
        }catch (Exception $e){
            return false;
        }
        return true;
    }

    public function obtener_todos(){
      $this->db->select('*');
      $this->db->from('curso');
      $this->db->join('usuario', 'usuario.numero_documento = curso.doc_encargado');
      $query = $this->db->get();
      return $query->result();
    }

    public function obtener_por_codigo($codigo){
        $query = $this->db->get_where('curso', array('codigo' => $codigo));
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
