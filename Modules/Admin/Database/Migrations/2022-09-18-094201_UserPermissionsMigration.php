<?php

namespace Modules\Admin\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserPermissionsMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'permission_id' => [
                'type' => 'INT',
            ],
            'user_id' => [
                'type' => 'INT',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('permission_id', true);
        $this->forge->addKey('user_id', true);
        $this->forge->addForeignKey('permission_id','permissions','id');
        $this->forge->addForeignKey('user_id','users','id');
        $this->forge->createTable('user_permissions');
    }

    public function down()
    {
        $this->forge->dropForeignKey('user_permissions','user_permissions_permissions_foreign');
        $this->forge->dropForeignKey('user_permissions','user_permissions_users_foreign');
        $this->forge->dropTable('permissions');
    }
}
