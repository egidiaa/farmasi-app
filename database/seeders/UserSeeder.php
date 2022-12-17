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
      User::create([
        'nama'=>'egidiaaa',
        'level'=>'user',
        'email'=>'egii@gmail.com',
        'password'=>bcrypt('egiimut'),
        'no_telp'=>'0812345678',
        'address'=>'jl itu'
      ]);
    }

    public function pelanggan()
    {
      User::create([
        'nama'=>'dyaya',
        'level'=>'user level 1',
        'email'=>'nadndyaa@gmail.com',
        'password'=>bcrypt('nadyabaikhati'),
        'no_telp'=>'085253816933',
        'address'=>'jl cerita yang telah usai'
      ]);
    }
}
