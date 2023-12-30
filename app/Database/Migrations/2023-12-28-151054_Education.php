<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Education extends Migration
{
    public function up()
    {
        //crear tabla FORMACIÓN
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 25,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nombre_programa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'institucion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tipo_programa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'categoria_programa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'fecha_certificacion' => [
                'type' => 'DATE',
            ],
        ]);
        
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('formaciones');
    }
    

    public function down()
    {
        //
    }
}
