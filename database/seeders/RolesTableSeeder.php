<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'user'
            ],
            [
                'name' => 'writer',
            ],
            [
                'name' => 'author',
            ],
            [
                'name' => 'admin',
            ]
        ]);
    }
}
