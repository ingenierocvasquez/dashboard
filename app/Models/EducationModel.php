<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table            = 'formaciones';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre_programa', 'institucion', 'tipo_programa', 'categoria_programa', 'fecha_certificacion'];

}
