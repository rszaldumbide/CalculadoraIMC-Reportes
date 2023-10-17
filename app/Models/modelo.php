<?php

namespace App\Models;

use CodeIgniter\Model;

class modelo extends Model
{
    protected $table = 'datosusuario';
    protected $primaryKey = 'u_id';
    protected $allowedFields = ['u_nombre', 'u_edad', 'u_apellido', 'u_cedula',
     'u_genero', 'u_valorimc', 'u_rangoimc', 'u_estado'];

    public function insertar($datos){
        $valor=$this->db->table("datosusuario");
        $valor->insert($datos);
    
        return $this->db->insertID();
    }

    public function obtenerNombre($data){
        $valor=$this->db->table('datosusuario');
        $valor->where($data);

        return $valor->get()->getResultArray();
        
    }

    public function actualizar($data, $id){
        $valor=$this->db->table('datosusuario');
        $valor->set($data);
        $valor->where('u_id', $id);

        return $valor->update();
    }
}

