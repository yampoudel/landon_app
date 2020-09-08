<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
            'title' => 'Mr',
            'name' => 'Hari',
            'last_name' => 'Sharma',
            'address' => 'Pokhara',
            'zip_code' => '2000',
            'city' => 'Pokhara',
            'state' => 'Gandaki',
            'email' => 'hari@gmail.com',
        ]);

        DB::table('clients')->insert([
            'title' => 'Mrs',
            'name' => 'Rupa',
            'last_name' => 'Sharma',
            'address' => 'Pokhara-10',
            'zip_code' => '2001',
            'city' => 'Pokhara1',
            'state' => 'Gandaki1',
            'email' => 'rupa@gmail.com',
        ]);
    }
}
