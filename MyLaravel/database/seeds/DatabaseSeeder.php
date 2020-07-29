<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(TinSeeder::class);
    }
}

// class UserSeeder extends Seeder{
//     public function run(){
//         DB::table('users')->insert([
//             ['name'=>'zxc','email'=>Str::random(5).'@gmai.com','password'=>bcrypt('matkhau')],
//             ['name'=>'nhung','email'=>Str::random(5).'@gmai.com','password'=>bcrypt('matkhau')],
//             ['name'=>'tung','email'=>Str::random(5).'@gmai.com','password'=>bcrypt('matkhau')]
//         ]);
//     }
// }

class TinSeeder extends Seeder{
    public function run(){
        DB::table('tin')->insert([
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1],
            ['tieude'=>Str::random(15),'soluong'=>1]
        ]);
    }
}

