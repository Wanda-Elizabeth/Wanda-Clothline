<?php

namespace App\Console\Commands;

use App\Mail\ContactFormMail;
use App\Models\ContactFormDetails;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending Emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sending emails...');

        $contacts = ContactFormDetails::all();

        foreach ($contacts as $contact) {
            try {
                Mail::to($contact->email)->send(new ContactFormMail($contact));
                $this->info('Email sent to: ' . $contact->email);
            } catch (\Exception $e) {
                Log::error('Failed to send email to: ' . $contact->email . '. Error: ' . $e->getMessage());
            }
        }

    }
}
