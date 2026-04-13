<?php

namespace Tests\Feature;

use App\Mail\OtpMail;
use App\Models\Talent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class OtpVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_sends_otp_and_redirects(): void
    {
        Mail::fake();

        $response = $this->post('/contact', [
            'username' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '08123456789',
            'category' => 'web_application',
            'message' => 'Hello, I need a website.',
        ]);

        $response->assertRedirect(route('otp.show', ['type' => 'contact']));
        $this->assertEquals('John Doe', session('pending_contact_data.username'));

        Mail::assertSent(OtpMail::class, function ($mail) {
            return $mail->hasTo('john@example.com');
        });

        $otp = Cache::get('otp_john@example.com');
        $this->assertNotNull($otp);
    }

    public function test_otp_verification_saves_contact_data(): void
    {
        Mail::fake();

        $data = [
            'username' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '08123456789',
            'category' => 'web_application',
            'message' => 'Hello, I need a website.',
        ];

        session(['pending_contact_data' => $data]);
        Cache::put('otp_john@example.com', '123456', now()->addMinutes(10));

        $response = $this->post('/verify-otp', [
            'otp' => '123456',
            'type' => 'contact',
        ]);

        $response->assertRedirect(route('contact.create'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('customers', [
            'username' => 'John Doe',
            'email' => 'john@example.com',
        ]);
    }

    public function test_talent_form_sends_otp_and_stores_temp_cv(): void
    {
        Mail::fake();
        Storage::fake('local');

        $file = UploadedFile::fake()->create('cv.pdf', 100);

        $response = $this->post('/talent', [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '08987654321',
            'skill' => 'frontend',
            'experience' => 'junior',
            'availability' => 'fulltime',
            'bio' => 'I am a passionate frontend developer with 2 years of experience.',
            'cv' => $file,
        ]);

        $response->assertRedirect(route('otp.show', ['type' => 'talent']));

        $tempPath = session('pending_talent_data.cv_path');
        $this->assertNotNull($tempPath);
        Storage::disk('local')->assertExists($tempPath);

        Mail::assertSent(OtpMail::class);
    }

    public function test_talent_otp_verification_moves_cv_and_saves_data(): void
    {
        Storage::fake('local');

        // Prepare temp file
        $tempPath = 'talents/temp/test_cv.pdf';
        Storage::disk('local')->put($tempPath, 'fake content');

        $data = [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '08987654321',
            'skill' => 'frontend',
            'experience' => 'junior',
            'availability' => 'fulltime',
            'bio' => 'I am a passionate frontend developer with 2 years of experience.',
            'cv_path' => $tempPath,
        ];

        session(['pending_talent_data' => $data]);
        Cache::put('otp_jane@example.com', '654321', now()->addMinutes(10));

        $response = $this->post('/verify-otp', [
            'otp' => '654321',
            'type' => 'talent',
        ]);

        $response->assertRedirect(route('talent.create'));

        $this->assertDatabaseHas('talent', [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
        ]);

        $talent = Talent::where('email', 'jane@example.com')->first();
        $this->assertStringContainsString('talents/cv/', $talent->cv_path);
        Storage::disk('local')->assertExists($talent->cv_path);
        Storage::disk('local')->assertMissing($tempPath);
    }
}
