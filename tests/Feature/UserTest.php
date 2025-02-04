<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test halaman login tersedia.
     */
    public function test_index_page_is_accessible()
    {
        $response = $this->get('/index');
        $response->assertStatus(200); // Halaman tersedia
        $response->assertViewIs('index'); // View yang ditampilkan adalah "index"
    }

    /**
     * Test validasi form login tanpa input.
     */
    public function test_login_validation_without_input()
    {
        $response = $this->post('/index/login', []);
        
        $response->assertSessionHasErrors(['email', 'password']); // Validasi gagal pada email dan password
    }

    /**
     * Test validasi login dengan input kosong.
     */
    public function test_login_validation_with_empty_input()
    {
        $response = $this->post('/index/login', [
            'email' => '',
            'password' => '',
        ]);
        
        $response->assertSessionHasErrors([
            'email' => 'Email wajib diisi',
            'password' => 'Password wajib diisi',
        ]); // Cek pesan error sesuai
    }

    /**
     * Test login dengan kredensial salah.
     */
    public function test_login_with_invalid_credentials()
    {
        $response = $this->post('/index/login', [
            'email' => 'invalid@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertRedirect('/index'); // Redirect kembali ke halaman index
        $response->assertSessionHasErrors(); // Harus ada error dalam sesi
    }

    /**
     * Test login dengan kredensial benar.
     */
    public function test_login_with_valid_credentials()
    {
        // Buat user baru di database untuk pengujian
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => bcrypt('correctpassword'),
        ]);

        $response = $this->post('/index/login', [
            'email' => 'user@example.com',
            'password' => 'correctpassword',
        ]);

        $response->assertRedirect('/malang'); // Redirect ke halaman "malang"
        $response->assertSessionHas('success', 'Berhasil'); // Flash pesan sukses
        $this->assertAuthenticatedAs($user); // Cek user berhasil login
    }
}
