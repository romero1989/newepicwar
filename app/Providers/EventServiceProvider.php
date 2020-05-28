<?php

namespace App\Providers;

use App\Events\AtualizouSenha;
use App\Events\AtualizouSenhaNumerica;
use App\Events\InformarServer;
use App\Events\NovaConta;
use App\Listeners\AtualizouSenhaListener;
use App\Listeners\AtualizouSenhaNoSiteListener;
use App\Listeners\AtualizouSenhaNumericaListener;
use App\Listeners\NovaContaListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NovaConta::class => [
            NovaContaListener::class,
        ],

        AtualizouSenhaNumerica::class => [
            AtualizouSenhaNumericaListener::class,
        ],

        AtualizouSenha::class => [
            AtualizouSenhaListener::class,
        ],

        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
