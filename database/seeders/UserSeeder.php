<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear usuario de prueba cada vez que se ejecute la migracion 
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
            'id_number' =>'123456789',
            'phone' => '9911099943',
            'address' => 'Test Address',

        ])->assignRole('Administrador');
    }
}
