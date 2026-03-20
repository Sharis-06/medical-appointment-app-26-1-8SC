<?php
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

// Refresca la BD entre pruebas 
uses( TestCase::class, RefreshDatabase::class);

test('un usuario no puede eliminar a si mismo', function(){
    // (1) crear un usuario en la BD de pruebas 
    $user = User::factory()->create(
        [    
            'email_verified_at' => now()
        ]
    );

    // (2) Simular que el usuario está inicio sesión
    $this->actingAs($user, 'web');

    // (3) Simular que intenta borrar un usuario 
    $response = $this->delete(route('admin.users.destroy', $user));

    // (4) Esperar a que el servidor bloquee esta accción 
    // $response->assertStatus(403);

    // (5) Verificamos que el susuario siga existiendo en la BD 
    $this->assertDatabaseHas('users',[
        'id' => $user->id,
    ]);
});






// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;

// class UserSelfDeleteTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      */
//     public function test_example(): void
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
// }
