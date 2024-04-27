<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTokenField extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'after' => 'image',
            ],
        ]);
    }

    public function down()
    {
        //
    }
}
