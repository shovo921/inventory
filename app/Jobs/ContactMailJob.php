<?php

namespace App\Jobs;

use App\Mail\Contactmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public  $data;
    public $adminuser;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($conatct,$admin)
    {
        $this->data=$conatct;
        $this->adminuser=$admin;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data->email)->send(new Contactmail($this->data));
        foreach ($this->adminuser as $user)
        {
            Mail::to($user->email)->send(new Contactmail($this->data));
        }
    }
}
