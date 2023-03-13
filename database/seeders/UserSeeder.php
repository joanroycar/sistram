<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Joan Roy Carlos Vasquez',
            'email'=> 'admin@gmail.com',
            'password'=>('123456789')


        ])->assignRole('Admin');

        User::create([

            'name' => 'Bruno Aguirre',
            'email'=> 'bagui@gmail.com',
            'password'=>('123456789')
        ]);

        User::factory(1)->create();
    }
}
