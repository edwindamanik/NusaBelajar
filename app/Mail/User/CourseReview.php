<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseReview extends Mailable
{
    use Queueable, SerializesModels;

    private $item;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Review Baru Pada Kelas Anda')->markdown('pages.dashboard.course_review.mail', [
            'item' => $this->item,
        ]);
    }
}
