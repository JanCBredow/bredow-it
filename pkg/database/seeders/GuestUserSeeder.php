<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class GuestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jan Christopher Bredow - Initial Guest User',
            'email' => 'guest-agent@jan-bredow.de',
            'role' => 'guest',
            'password' => \Hash::make('IfSomeOneEverFindsThisFuckingPasswordISwearToGodIWillFuckYou')
        ]);

        DB::table('users')->insert([
            'name' => 'Jan Christopher Bredow',
            'email' => 'info@jan-bredow.de',
            'role' => 'admin',
            'password' => \Hash::make('foobar')
        ]);

    }
}
