<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser=User::query()->create([
            'role_id' =>Role::query()->where('title','admin')->first()->id,
            'name' => 'admin_user',
            'email'=>'sara77nzral@gamil.com',
            'password'=> bcrypt('1234'),
        ]);

    }
}
