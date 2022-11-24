<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $n = new User();
        $n->name = "jojo";
        $n->email = "jokris2002@gmail.com";
        $n->email_verified_at = now();
        $n->password = "123";
        $n->role = 0;
        $n->save();
        // User::create([
        //     "name"=>"jojo",
        //     "email"=>"jokris2002@gmail.com",
        //     "email_verified_at"=>now(),
        //     "password"=>'123',
        //     "role"=>0
        // ]);
        // User::create([
        //     "name"=>"edward",
        //     "email"=>"edward@gmail.com",
        //     "email_verified_at"=>now(),
        //     "password"=>'123',
        //     "role"=>1
        // ]);
    }
}
