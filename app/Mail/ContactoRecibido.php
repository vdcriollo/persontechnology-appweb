<?php

namespace App\Mail;

use App\Models\Contacto;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;
    public Contacto $contacto;
    public bool $paraUsuario;

    /**
     * Create a new message instance.
     */
    public function __construct(Contacto $contacto, bool $paraUsuario = false)
    {
        $this->contacto = $contacto;
        $this->paraUsuario = $paraUsuario;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->paraUsuario
                ? 'Gracias por contactarnos - Person Technology'
                : 'Nuevo mensaje desde Person Technology'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->paraUsuario
                ? 'emails.contacto_usuario'
                : 'emails.contacto_admin'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
