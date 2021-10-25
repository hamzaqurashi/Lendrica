<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersArray = [
            [
                'role_id' => 1,
                'name' => "Admin",
                'email' => "admin@gmail.com",
                "password" => "admin123",
            ],
        ];

        App\Models\User::truncate();
        foreach ($usersArray as $value) {
            $user = new \App\Models\User($value);
            $user->save();
        }
    }
}
