<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'name' => 'comment1'
            ],
            [
                'post_id' => 1,
                'name' => 'comment2'
            ],
            [
                'post_id' => 1,
                'name' => 'comment3'
            ],
            [
                'post_id' => 2,
                'name' => 'comment4'
            ],
            [
                'post_id' => 2,
                'name' => 'comment5'
            ],
            [
                'post_id' => 3,
                'name' => 'comment6'
            ],
            [
                'post_id' => 3,
                'name' => 'comment7'
            ],
            [
                'post_id' => 3,
                'name' => 'comment8'
            ],
            [
                'post_id' => 3,
                'name' => 'comment9'
            ],
            [
                'post_id' => 4,
                'name' => 'comment10'
            ],
            [
                'post_id' => 4,
                'name' => 'comment11'
            ],
            [
                'post_id' => 4,
                'name' => 'comment12'
            ],
            [
                'post_id' => 4,
                'name' => 'comment13'
            ],
            [
                'post_id' => 5,
                'name' => 'comment14'
            ],
            [
                'post_id' => 5,
                'name' => 'comment15'
            ],
            [
                'post_id' => 5,
                'name' => 'comment16'
            ],
            [
                'post_id' => 5,
                'name' => 'comment17'
            ],
            [
                'post_id' => 6,
                'name' => 'comment18'
            ],
            [
                'post_id' => 6,
                'name' => 'comment19'
            ],
            [
                'post_id' => 6,
                'name' => 'comment20'
            ],
            [
                'post_id' => 6,
                'name' => 'comment21'
            ],
            [
                'post_id' => 7,
                'name' => 'comment22'
            ],
            [
                'post_id' => 7,
                'name' => 'comment23'
            ],
            [
                'post_id' => 7,
                'name' => 'comment24'
            ],
            [
                'post_id' => 8,
                'name' => 'comment25'
            ],
            [
                'post_id' => 8,
                'name' => 'comment26'
            ],
            [
                'post_id' => 8,
                'name' => 'comment27'
            ],
            [
                'post_id' => 8,
                'name' => 'comment28'
            ],
            [
                'post_id' => 8,
                'name' => 'comment29'
            ],
            [
                'post_id' => 8,
                'name' => 'comment30'
            ]
        ]);
    }
}
