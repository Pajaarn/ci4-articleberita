<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();

        $model->save([
        'name' => 'Administrator',
        'email' => 'admin@mail.com',
        'password' => password_hash('123456', PASSWORD_DEFAULT),
        'role' => 'admin'
        ]);
    }
}
