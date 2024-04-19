<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Institucion extends Migration
{
    public function up()
    {
        //crear tabla INTITUCIÓN
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 25,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nombre_institucion' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('instituciones');
    }
    

    public function down()
    {
        //
    }
}