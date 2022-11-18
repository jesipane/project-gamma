<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PurchaseItems extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'quantity' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'drug_id' => [
                'type' => 'int',
            ],
            'sub_total' => [
                'type' => 'int'
            ],
            'purchase_id' => [
                'type' => 'int',
            ]
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('purchase_items', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('purchase_items');
    }
}
