<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    public $mail ;
    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $this->mail = $request;
    }

    public function build() {
        return $this->from($this->mail->mail);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mail->subject,
        );
    }

    // /**
    //  * Get the message content definition.
    //  */
    public function content(): Content
    {
        return new Content(
            view: 'mails.mail',
        );
    }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
