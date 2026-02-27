<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Llamara a los seeder creados 
        $this->call(RoleSeeder::class);
        

        // Crear usuario de prueba cada vez que se ejecuten las migraciones 
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
