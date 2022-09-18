<?php

namespace Modules\Admin\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id','users','role_id');
        $this->forge->createTable('roles');

    }

    public function down()
    {
        $this->forge->dropForeignKey('roles','roles_users_foreign');
        $this->forge->dropTable('roles');
    }
}
