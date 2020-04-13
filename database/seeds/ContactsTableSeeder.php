<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Diego Mengarda', 
            'phone' => '912341234',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('contacts')->insert([
            'name' => 'Julio Maraschin', 
            'phone' => '943214321',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('contacts')->insert([
            'name' => 'Fernando Fagonde', 
            'phone' => '999998888',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
