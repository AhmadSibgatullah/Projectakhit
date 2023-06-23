<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //     \App\Models\User::factory(10)->create();

        $users = array(
            [
                'name' => 'Administrator',
                'email' => 'admin@email.com',
                'password' => bcrypt('123'),
                'is_admin' => 1
            ],
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
