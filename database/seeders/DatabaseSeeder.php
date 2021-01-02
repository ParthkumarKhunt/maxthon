<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => "Maxthon",
            'lastname' => "Technologies",
            'email' => "maxthon@admin.com",
            'password' => Hash::make('Maxthon@123'),
            'userimage' => 'default.jpg',
            'usertype' => 'A',
            'is_deleted' => "N",
            'email_verified' => "Y",
            'email_verified_at'=> date("Y-m-d h:i:s"),
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
