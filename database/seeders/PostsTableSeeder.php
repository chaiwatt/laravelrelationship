<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'name' => 'post1'
            ],
            [
                'user_id' => 1,
                'name' => 'post2'
            ],
            [
                'user_id' => 1,
                'name' => 'post3'
            ],
            [
                'user_id' => 2,
                'name' => 'post4'
            ],
            [
                'user_id' => 2,
                'name' => 'post5'
            ],
            [
                'user_id' => 3,
                'name' => 'post6'
            ],
            [
                'user_id' => 3,
                'name' => 'post7'
            ],
            [
                'user_id' => 4,
                'name' => 'post8'
            ]
        ]);
    }
}
