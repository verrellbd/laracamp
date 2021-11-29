<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@laracamp.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('password'),
            'is_admin' => 1
        ]);
    }
}
