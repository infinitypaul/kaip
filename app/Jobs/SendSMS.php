<?php

namespace App\Jobs;

use AllFunction;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class SendSMS implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     *
     */
    protected $id;
    protected $message;

    public function __construct($id, $message)
    {
        $this->message = $message;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       // AllFunction::Sms(substr_replace($this->id, '234', 0, 1), $this->message);
       // Log::info('something');
        AllFunction::Sms($this->message, $this->id);
    }
}
