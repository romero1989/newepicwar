<?php


namespace App\Listeners;


use App\Events\NovaConta;
use App\InformacaoServer;

class NovaContaListener
{

    public function handle(NovaConta $event)
    {
        $user = $event->user;

        $informacao = new InformacaoServer();
        $informacao->account = $user->name;
        $informacao->senha = $user->cavecode;
        $informacao->alteracao = 's';

        $informacao->save();

    }

}
