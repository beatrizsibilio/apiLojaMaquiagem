<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'varchar',
                'constraint' =>  100
            ],
            'descricao' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'cor' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'cobertura' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'tamanho' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'valor' => [
                'type' => 'double'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}