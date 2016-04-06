<?php

namespace CodeCommerce\Listeners;

use CodeCommerce\Events\CheckoutEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailCheckout
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CheckoutEvent  $event
     * @return void
     */
    public function handle(CheckoutEvent $event)
    {
        Mail::send('email.test', ['name' => 'Daniel'], function($message)
        {
            $message->to('doniexlemavorum@gmail.com', 'Some Guy')->from('atendimento@lemosweb.com.br')->subject('Welcome!');
        });
        echo 'Email Enviado!!';
    }
}
