<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => bcrypt('admin1234'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'jeremy',
            'email' => 'jeremy@jeremy.fr',
            'password' => bcrypt('jeremy1234'),
            'role_id' => 2,
        ]);
    }
}
