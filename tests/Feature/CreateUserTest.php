<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_user_with_valid_data()
    {
        // Arrange: persiapkan data
        $data = [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123',
        ];

        // Act: kirim request
        $response = $this->post('/index/create', $data);

        // Assert: periksa apakah pengguna berhasil dibuat
        $this->assertDatabaseHas('users', [
            'email' => $data['email'],
            // Password yang tersimpan adalah hash, jadi tidak bisa langsung dibandingkan
        ]);

        // Periksa apakah diarahkan ke 'index'
        $response->assertRedirect('index');
    }

    public function test_create_user_with_missing_name()
    {
        // Arrange: persiapkan data tanpa nama
        $data = [
            'name' => '',
            'email' => 'testuser@example.com',
            'password' => 'password123',
        ];

        // Act: kirim request
        $response = $this->post('/index/create', $data);

        // Assert: periksa validasi error
        $response->assertSessionHasErrors(['name' => 'Name wajib diisi']);
    }

    public function test_create_user_with_invalid_email()
    {
        // Arrange: persiapkan data dengan email invalid
        $data = [
            'name' => 'Test User',
            'email' => 'invalid-email',
            'password' => 'password123',
        ];

        // Act: kirim request
        $response = $this->post('/index/create', $data);

        // Assert: periksa validasi error
        $response->assertSessionHasErrors(['email' => 'Silahkan masukkan email yang valid']);
    }

    public function test_create_user_with_duplicate_email()
    {
        // Arrange: buat pengguna dengan email yang sama
        User::create([
            'name' => 'Existing User',
            'email' => 'existinguser@example.com',
            'password' => Hash::make('password123'),
        ]);

        $data = [
            'name' => 'New User',
            'email' => 'existinguser@example.com', // Duplicate email
            'password' => 'password123',
        ];

        // Act: kirim request
        $response = $this->post('/index/create', $data);

        // Assert: periksa validasi error
        $response->assertSessionHasErrors(['email' => 'Email sudah ada']);
    }

    public function test_create_user_with_short_password()
    {
        // Arrange: persiapkan data dengan password kurang dari 6 karakter
        $data = [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => '123',
        ];

        // Act: kirim request
        $response = $this->post('/index/create', $data);

        // Assert: periksa validasi error
        $response->assertSessionHasErrors(['password' => 'Minimum 6 karakter']);
    }
}
