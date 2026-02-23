<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToArticles extends Migration
{
    public function up()
    {
        $this->forge->addColumn('articles', [
    'user_id' => ['type'=>'INT','after'=>'id']
    ]);
    }

    public function down()
    {
        $this->forge->dropColumn('articles', 'user_id');
    }
}
