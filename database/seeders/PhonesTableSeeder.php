<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            [
                'user_id' => 1,
                'phone' => '0882514838'
            ],
            [
                'user_id' => 2,
                'phone' => '0865462145'
            ],  
            [
                'user_id' => 3,
                'phone' => '0856657435'
            ],
            [
                'user_id' => 4,
                'phone' => '0821893882'
            ] 
        ]);
    }
}
