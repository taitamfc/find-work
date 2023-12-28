<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use Illuminate\Support\Facades\Log;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    protected $type;
    /**
     * Create a new job instance.
     */
    public function __construct($data,$type = '')
    {
        $this->data = $data;
        $this->type = $type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $data = $this->data;
        $type = $this->type;
        switch ($type) {
            case 'send_mail':
                try {
                    Mail::send('admintheme::mail.mail',compact('data'), function($email) use ($data){
                        $email->subject('Store Member');
                        $email->to($data['email'], $data['name']);
                    });
                } catch (\Exception $e) {
                    Log::error('Bug send email error : '.$e->getMessage());
                }
                break;
        }
    }
}