<?php

namespace Database\Seeders;
Use App\Models\UserTask;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
         UserTask::factory(200)->create();

     //  User::factory()->create([
       //   'name' => 'Test User',
        //   'email' => 'test@example.com',
       // ]);
    }
}
