<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MentorVerification extends Mailable
{
    use Queueable, SerializesModels;

    private $hash, $item;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($hash, $item)
    {
        $this->hash = $hash;
        $this->item = $item;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Peninjauan Verifikasi Mentor Anda')->markdown('pages.dashboard.mentor_verification.mail', [
            'hash' => $this->hash,
            'item' => $this->item,
        ]);
    }
}
