<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemUnit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('item_unit', TRUE);
    
    }

    public function down()
    {
        $this->forge->dropTable('item_unit');
    }
}
