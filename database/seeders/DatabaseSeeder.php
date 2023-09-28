<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = array (
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin1234',
                'role' => '1',
            ],
            [
                'name' => 'Nguyễn Đăng Đức',
                'email' => 'duc1642001@gmail.com',
                'password' => 'duc123456',
                'role' => '1',
            ],
        );

        DB::table('users')->insert($user);
    }
}
