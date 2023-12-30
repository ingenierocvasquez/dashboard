<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table            = 'formaciones';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre_programa', 'institucion', 'tipo_programa', 'categoria_programa', 'fecha_certificacion'];



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
}
