<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
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
     User::truncate();
     User::create([
        'nama' => 'Admin',
        'level'=>'admin',
        'username'=> '1955201110016',
        'password'=> bcrypt('admin'),
        'remember_token' =>Str::random(60),
     ]);  
    //  [
    //     'nama' => 'Dosen',
    //     'level'=>'dosen',
    //     'username'=> '1121048902',
    //     'password'=> bcrypt('dosen'),
    //     'remember_token' =>Str::random(60),
    //  ];
    }
    
}
