<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\Logtext;

class ProcessPodcast implements ShouldQueue
{
    use Queueable;

    protected $messsage;

    /**
     * Create a new job instance.
     */
    public function __construct(String $messsage)
    {
        $this->messsage = $messsage;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $logText = new Logtext;
        $logText->message = $this->messsage;
        $logText->save();
    }
}
