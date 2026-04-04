<?php

namespace App\Mail;

use App\Models\Talent;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewTalentMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Talent $talent) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🎯 Pendaftaran Talent Baru: '.$this->talent->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-talent',
        );
    }

    /**
     * @return array<int, mixed>
     */
    public function attachments(): array
    {
        return [];
    }
}
