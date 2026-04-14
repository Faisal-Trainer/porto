<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_can_be_verified_with_correct_otp(): void
    {
        $this->withoutExceptionHandling();
        Mail::fake();

        $data = [
            'username' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '08987654321',
            'category' => 'web_application',
            'message' => 'Hello, I need a website for my small business.',
        ];

        // 1. Submit form
        $response = $this->post(route('contact.store'), $data);
        $response->assertRedirect(route('otp.show', ['type' => 'contact']));

        // Get OTP from cache
        $otp = Cache::get("otp_{$data['email']}");
        $this->assertNotNull($otp);

        // 2. Verify OTP
        $response = $this->post(route('otp.verify'), [
            'otp' => $otp,
            'type' => 'contact',
        ]);

        $response->assertRedirect(route('contact.create'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('customers', [
            'email' => 'jane@example.com',
        ]);
    }
}
