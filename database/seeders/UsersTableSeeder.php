<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'john',
                'email' => 'john@demo.com',     
                'password' => Hash::make('11111111')
            ],
            [
                'name' => 'jane',
                'email' => 'jane@demo.com',           
                'password' => Hash::make('11111111')
            ],
            [
                'name' => 'joe',
                'email' => 'joe@demo.com',     
                'password' => Hash::make('11111111')
            ],
            [
                'name' => 'jim',
                'email' => 'jim@demo.com',           
                'password' => Hash::make('11111111')
            ]
        ]);
    }
}
