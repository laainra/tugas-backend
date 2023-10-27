<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MusicMigration extends Migration
{
    protected $DBGroup = 'default';
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'title'       => ['type' => 'varchar', 'constraint' => 255],
            'singer'        => ['type' => 'varchar', 'constraint' => 255],
            'album'      => ['type' => 'varchar', 'constraint' => 255],
            'cover'       => ['type' => 'varchar', 'constraint' => 255],
            'length'    => ['type' => 'varchar', 'constraint' => 10],
            'created_at' => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('music');
    }
    
    public function down()
    {
        
                $this->forge->dropTable('music');
        // 
    }
}
