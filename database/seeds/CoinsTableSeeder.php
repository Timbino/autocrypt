<?php

use Illuminate\Database\Seeder;

class CoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coins')->insert([
            'name' => 'Stratis',
            'description' => 'Blockchain in C#',
        ]);
        DB::table('coins')->insert([
            'name' => 'Bitcoin',
            'description' => 'M.O.A.C',
        ]);
    }
}
