<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAgriculteursTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'gender' => [
                'type' => 'ENUM("Mr.","Mme.")',
                'default' => 'Mr.',
                'null' => false
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false
            ],
            'age' => [
                'type' => 'ENUM("40-50","30-40")',
                'default' => '40-50',
                'null' => false
            ]
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('agriculteurs');
    }

    public function down()
    {
        $this->forge->dropTable('agriculteurs');
    }
}
