<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cms_users')->insert([
            "email" => 'admin@test.com',
            "password" => bcrypt('password'),
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
