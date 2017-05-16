<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
	public $tipo_documento;
	public $documento;
	public $nombres;
	public $apellidos;
  public $municipio;
  public $fecha_nacimiento;
  public $comuna;
  public $barrio;
  public $edad;
  public $genero;
  public $direccion;
  public $telefono;
  public $celular;
  public $correo;
  public $tipo_sanguineo;
  public $eps;
  public $etnia;
  public $discapacidad;
  public $diversidad_sexual;
  public $intereses;
  public $documento_acudiente;
  public $parentesco_acudiente;

  public function __construct($value = NULL) {
        parent::__construct();
        if ($value != NULL) {
            if (is_array($value))
                settype($value, 'object');

            if (is_object($value)) {
                $this->tipo_documento = isset($value->tipo_documento) ? $value->tipo_documento : NULL;
                $this->documento = isset($value->documento) ? $value->documento : NULL;
                $this->nombres = isset($value->nombres) ? $value->nombres : NULL;
                $this->apellidos = isset($value->apellidos) ? $value->apellidos : NULL;
                $this->municipio = isset($value->municipio) ? $value->municipio : NULL;
                $this->fecha_nacimiento = isset($value->fecha_nacimiento) ? $value->fecha_nacimiento : NULL;
                $this->comuna = isset($value->comuna) ? $value->comuna : NULL;
                $this->barrio = isset($value->barrio) ? $value->barrio : NULL;
                $this->edad = isset($value->edad) ? $value->edad : NULL;
                $this->genero = isset($value->genero) ? $value->genero : NULL;
                $this->direccion = isset($value->direccion) ? $value->direccion : NULL;
                $this->telefono = isset($value->telefono) ? $value->telefono : NULL;
                $this->celular = isset($value->celular) ? $value->celular : NULL;
                $this->correo = isset($value->correo) ? $value->correo : NULL;
                $this->tipo_sanguineo = isset($value->tipo_sanguineo) ? $value->tipo_sanguineo : NULL;
                $this->eps = isset($value->eps) ? $value->eps : NULL;
                $this->etnia = isset($value->etnia) ? $value->etnia : NULL;
                $this->discapacidad = isset($value->discapacidad) ? $value->discapacidad : NULL;
                $this->diversidad_sexual = isset($value->diversidad_sexual) ? $value->diversidad_sexual : NULL;
                $this->intereses = isset($value->intereses) ? $value->intereses : NULL;
                $this->documento_acudiente = isset($value->documento_acudiente) ? $value->documento_acudiente : NULL;
                $this->parentesco_acudiente = isset($value->parentesco_acudiente) ? $value->parentesco_acudiente : NULL;
            }
        }
    }

		public function total_usuarios(){
			 $this->db->select('COUNT(*) as total');
			 $query=$this->db->get('usuario');
			 return $query->result();
		}

		public function hombres_mujeres(){
			 $this->db->select('genero,COUNT(*) as total');
			 $this->db->group_by('genero');
			 $this->db->order_by('genero');
			 $query=$this->db->get('usuario');
			 return $query->result();
		}

		public function menores_edad(){
			 $this->db->select('COUNT(*) as total');
			 $this->db->where('edad <',18);
			 $query=$this->db->get('usuario');
			 return $query->result();
		}

		public function tercera_edad(){
			 $this->db->select('COUNT(*) as total');
			 $this->db->where('edad >',60);
			 $query=$this->db->get('usuario');
			 return $query->result();
		}

  	public function crear_usuario(){
          try{
              $this->db->insert("usuario", array(
                'tipo_documento' => $this->tipo_documento,
                'numero_documento' => $this->documento,
                'nombres' => $this->nombres,
                'apellidos' => $this->apellidos,
                'municipio' => $this->municipio,
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'comuna' => $this->comuna,
                'barrio' => $this->barrio,
                'edad' => $this->edad,
                'genero' => $this->genero,
                'direccion' => $this->direccion,
                'telefono' => $this->telefono,
                'celular' => $this->celular,
                'correo' => $this->correo,
                'tipo_sanguineo' => $this->tipo_sanguineo,
                'eps' => $this->eps,
                'etnia' => $this->etnia,
                'discapacidad' => $this->discapacidad,
                'diversidad_sexual' => $this->diversidad_sexual,
                'intereses' => $this->intereses,
                'documento_acudiente' => $this->documento_acudiente,
                'parentesco_acudiente' => $this->parentesco_acudiente
              ));
          }catch (Exception $e){
              return false;
          }
          return true;
  	}

    public function actualizar(){
        try{
          $this->db->set(array(
                      'tipo_documento' => $this->tipo_documento,
                      'numero_documento' => $this->documento,
                      'nombres' => $this->nombres,
                      'apellidos' => $this->apellidos,
                      'municipio' => $this->municipio,
                      'fecha_nacimiento' => $this->fecha_nacimiento,
                      'comuna' => $this->comuna,
                      'barrio' => $this->barrio,
                      'edad' => $this->edad,
                      'genero' => $this->genero,
                      'direccion' => $this->direccion,
                      'telefono' => $this->telefono,
                      'celular' => $this->celular,
                      'correo' => $this->correo,
                      'tipo_sanguineo' => $this->tipo_sanguineo,
                      'eps' => $this->eps,
                      'etnia' => $this->etnia,
                      'discapacidad' => $this->discapacidad,
                      'diversidad_sexual' => $this->diversidad_sexual,
                      'intereses' => $this->intereses,
                      'documento_acudiente' => $this->documento_acudiente,
                      'parentesco_acudiente' => $this->parentesco_acudiente
                    ));
            $this->db->where('numero_documento', $this->documento);
            $this->db->update('usuario');
        }catch (Exception $e){
            return false;
        }
        return true;
    }

    public function obtener_todos(){
        $query = $this->db->get("usuario");
        return $query->result();
    }

    public function obtener_por_documento($documento){
        $query = $this->db->get_where('usuario', array('numero_documento' => $documento));
        return $query->result();
    }

		public function obtener_mis_cursos($documento){
			$this->db->from('matricula');
			$this->db->order_by('matricula.estado');
			$this->db->where('matricula.numero_documento',$documento);
      $this->db->select('matricula.estado as estado, curso.nombre as nombre,curso.entidad as entidad ');
      $this->db->join('curso', 'curso.codigo = matricula.codigo_curso');
      $query = $this->db->get();
      return $query->result();
    }


    public function eliminar($documento){
			try{
        $query = $this->db->delete('usuario', array('numero_documento' => $documento));
        $query = $this->db->get_where('usuario', array('numero_documento' => $documento));
        return $query->result();
			}catch(Exception $e){
				return false;
			}
    }

		public function obtener_todo_exportar()
		{
			$this->db->select('*');
			$query = $this->db->get('usuario');
			$fields = $query->field_data();
			return array("fields" => $fields, "query" => $query);
		}

			public function obtener_por_diversidad_sexual()
			{
				$this->db->select('diversidad_sexual,COUNT(*) as total');
				$this->db->group_by('diversidad_sexual');
				$this->db->order_by('diversidad_sexual');
 			  $query=$this->db->get('usuario');
 			  return $query->result();

			}

			public function obtener_por_etnia()
			{
				$this->db->select('etnia,COUNT(*) as total');
				$this->db->group_by('etnia');
				$this->db->order_by('etnia');
 			  $query=$this->db->get('usuario');
 			  return $query->result();

			}

			public function obtener_por_discapacidad()
			{
				$this->db->select('discapacidad,COUNT(*) as total');
				$this->db->group_by('discapacidad');
				$this->db->order_by('discapacidad');
 			  $query=$this->db->get('usuario');
 			  return $query->result();

			}

} ?>
