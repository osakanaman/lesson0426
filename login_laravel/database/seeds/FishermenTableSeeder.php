<?php

use Illuminate\Database\Seeder;

class FishermenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('fishermen')->insert([
            'name' => 'Shogo',
            'fish' => 'ブリ',
            'date' => '20200520',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
