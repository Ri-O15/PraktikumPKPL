<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Pelanggan;

class PelangganControllerTest extends TestCase
{
    use RefreshDatabase; // Membersihkan database setelah setiap test

    /**
     * Test form creation route.
     */
    public function test_create_form_displays_correctly()
    {
        $response = $this->get('/malang/mealmaljogputih6'); // Sesuaikan URL sesuai rute
        $response->assertStatus(200); // Pastikan halaman bisa diakses
        $response->assertViewIs('form'); // Pastikan view yang digunakan benar
    }

    /**
     * Test form submission with valid data.
     */
    public function test_store_valid_data()
    {
        // Kirim permintaan POST dengan data valid
        $response = $this->post('/save-data', [
            'Nama' => 'John Doe',
            'Email' => 'johndoe@example.com',
            'Message' => 'Test message',
        ]);

        // Pastikan data disimpan di database
        $this->assertDatabaseHas('pelanggan', [
            'Nama' => 'John Doe',
            'Email' => 'johndoe@example.com',
            'Message' => 'Test message',
        ]);

        // Pastikan redirect bekerja dengan benar
        $response->assertRedirect('/malang');
        $response->assertSessionHas('success', 'Data Tersimpan');
    }

    /**
     * Test form submission with invalid data.
     */
    public function test_store_invalid_data()
    {
        // Kirim permintaan POST tanpa data
        $response = $this->post('/save-data', []);

        // Pastikan validasi gagal
        $response->assertSessionHasErrors(['Nama', 'Email']);
        $this->assertDatabaseMissing('pelanggan', [
            'Nama' => 'John Doe',
        ]);
    }
}
