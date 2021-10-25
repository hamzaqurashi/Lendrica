<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'title' => "ADMIN",
            ],
            [
                'title' => "INVESTOR",
            ],
            [
                'title' => "BORROWER",
            ],
        ];

        \App\Models\Role::truncate();
        foreach ($roles as $value) {
            \App\Models\Role::create($value);
        }
    }
}
