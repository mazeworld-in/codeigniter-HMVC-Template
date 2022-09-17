<?php

namespace Modules\Admin\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Modules\Admin\Models\Admin as AdminModel;
class Admin extends Seeder
{
    public function run()
    {

        $user = new AdminModel();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $user->save(
                [
                    'name'        =>    $faker->name,
                    'email'       =>    $faker->email,
                    'password'    =>    password_hash($faker->password, PASSWORD_DEFAULT),
                    'created_at'  =>    Time::createFromTimestamp($faker->unixTime()),
                    'updated_at'  =>    Time::now()
                ]
            );
        }
    }
}
