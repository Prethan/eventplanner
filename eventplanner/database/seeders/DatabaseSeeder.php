<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        (new \App\Models\User())->create(
            [
                'name' => 'Admin',
                'email'=> 'admin@admin.com',
                'password'=>\Illuminate\Support\Facades\Hash::make('password'),
                'role'=> 'admin',
            ]
            );

            $this->call([
                CategorySeeder::class,
                EventSeeder::class,
            ]);
    }

}
