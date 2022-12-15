<?php

namespace Database\Seeders;

use App\Models\User;
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
      User::create([
        'nama'=>'nadya',
        'level'=>'admin',
        'email'=>'nadya@gmail.com',
        'password'=>bcrypt('nadyacantik'),
        'no_telp'=>'0812345678',
        'address'=>'jl itu'
      ]);
    }
}
