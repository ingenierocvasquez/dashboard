<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table            = 'formaciones';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre_programa', 'institucion', 'tipo_programa', 'categoria_programa', 'fecha_certificacion'];

    public function listar_td_programas()
    {
        $query = $this->db->query('
        SELECT  f.id, f.nombre_programa, i.nombre_institucion,tp.tipo_programa,  cat.nombre_categoria,  f.fecha_certificacion
        FROM formaciones f
        LEFT JOIN instituciones i ON i.id = f.institucion
        LEFT JOIN pformacion tp ON tp.id = f.tipo_programa
        LEFT JOIN cat_pformacion cat ON cat.id = f.categoria_programa
        ORDER BY f.fecha_certificacion ASC;
        ');
        return $query->getResultArray();
    }

    public function listar_form_complementaria()
    {
        $query = $this->db->query('
        SELECT f.nombre_programa, i.nombre_institucion, pf.tipo_programa, cat.nombre_categoria, f.fecha_certificacion FROM formaciones f
        LEFT JOIN instituciones i ON i.id = f.institucion
        LEFT JOIN pformacion pf ON pf.id = f.tipo_programa
        LEFT JOIN cat_pformacion cat ON cat.id = f.categoria_programa
        WHERE pf.tipo_programa NOT IN ("PRIMARIA","SECUNDARIA", "PREGRADO", "POSTGRADO") AND cat.nombre_categoria IS NOT NULL
        ORDER BY cat.nombre_categoria, f.fecha_certificacion ASC;
        ');
        return $query->getResultArray();
    }

    public function listar_form_academicas()
    {
        $query = $this->db->query('
        SELECT f.nombre_programa, i.nombre_institucion,tp.tipo_programa,  cat.nombre_categoria,  f.fecha_certificacion
        FROM formaciones f
        LEFT JOIN instituciones i ON i.id = f.institucion
        LEFT JOIN pformacion tp ON tp.id = f.tipo_programa
        LEFT JOIN cat_pformacion cat ON cat.id = f.categoria_programa
        WHERE tp.tipo_programa IN ("PRIMARIA","SECUNDARIA","PREGRADO", "POSTGRADO")
        ORDER BY fecha_certificacion ASC
        ');
        return $query->getResultArray();
    }
    
    
    
    public function education_year()
    {
        $query = $this->db->query('
        SELECT YEAR(fecha_certificacion) as "year", COUNT(id) AS "counter"
        FROM formaciones
        GROUP BY YEAR(fecha_certificacion)
        ORDER BY fecha_certificacion ASC;
        ');
        return $query->getResultArray();
    }

    public function type_course()
    {
        $query = $this->db->query('
        SELECT categoria_programa, COUNT(categoria_programa) AS total 
        FROM formaciones
        GROUP BY categoria_programa
        ORDER BY total DESC;
        ');
        return $query->getResultArray();
    }


    public function listar_instituciones()
    {
        $query = $this->db->query('
        SELECT id, nombre_institucion
        FROM instituciones
        ORDER BY ord_ins;
        ');
        return $query->getResultArray();
    }

    public function listar_tipo_programas()
    {
        $query = $this->db->query('
        SELECT id, tipo_programa
        FROM pformacion
        ORDER BY ord_pf ASC;
        ');
        return $query->getResultArray();
    }

    public function listar_cat_pformacion()
    {
        $query = $this->db->query('
        SELECT id, nombre_categoria
        FROM `cat_pformacion`
        ORDER BY ord_cat;
        ');
        return $query->getResultArray();
    }

    public function contar_cat_pformacion()
    {
        $query = $this->db->query('
        SELECT  cat.nombre_categoria, COUNT(f.nombre_programa) AS Total
        FROM formaciones f
        LEFT JOIN instituciones i ON i.id = f.institucion
        LEFT JOIN pformacion tp ON tp.id = f.tipo_programa
        LEFT JOIN cat_pformacion cat ON cat.id = f.categoria_programa
        WHERE tp.tipo_programa NOT IN ("PRIMARIA","SECUNDARIA", "PREGRADO", "POSTGRADO") AND cat.nombre_categoria IS NOT NULL
        GROUP BY cat.nombre_categoria
        ORDER BY Total DESC;
        ');
        return $query->getResultArray();
    }
}