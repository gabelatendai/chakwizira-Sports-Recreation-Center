<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=> 'Gabriel Musodza',
            'email'=> 'gabrielmusodza@gmail.com',
            'password'=>bcrypt('admin123'),
            'admin'=> 1
        ]);
    }
}
