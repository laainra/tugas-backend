<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RestoreMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],
        ]);
    }

    public function down()
    {
        //
    }
}
