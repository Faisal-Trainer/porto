<?php

namespace Tests\Feature;

use App\Models\Talent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TalentVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_talent_can_be_verified_with_correct_otp(): void
    {
        $this->withoutExceptionHandling();
        Storage::fake('local');
        Mail::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '08123456789',
            'skill' => 'backend',
            'experience' => 'junior',
            'availability' => 'fulltime',
            'bio' => 'I am a backend developer with 2 years experience.',
        ];

        // 1. Submit form
        $response = $this->post(route('talent.store'), $data);
        $response->assertRedirect(route('otp.show', ['type' => 'talent']));

        // Get OTP from cache
        $otp = Cache::get("otp_{$data['email']}");
        $this->assertNotNull($otp);

        // 2. Verify OTP
        $response = $this->post(route('otp.verify'), [
            'otp' => $otp,
            'type' => 'talent',
        ]);

        // Check for 500 error or validation error
        if ($response->status() === 500) {
            $this->fail('Talent verification returned status 500');
        }

        $response->assertRedirect(route('talent.create'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('talent', [
            'email' => 'john@example.com',
        ]);
    }
}
