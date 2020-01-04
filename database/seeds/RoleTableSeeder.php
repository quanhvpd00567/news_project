<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['role_name' => 'Admin']);
        DB::table('roles')->insert(['role_name' => 'Member']);
        DB::table('roles')->insert(['role_name' => 'Poster']);
    }
}
