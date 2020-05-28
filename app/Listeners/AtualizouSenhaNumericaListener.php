<?php


namespace App\Listeners;


use App\Events\AtualizouSenhaNumerica;
use App\InformacaoServer;

class AtualizouSenhaNumericaListener
{

    public function handle(AtualizouSenhaNumerica $event)
    {
        $user = $event->user;

        $informacao = new InformacaoServer();
        $informacao->account = $user->name;
        $informacao->senha = $user->cavecode;
        $informacao->alteracao = 'n';

        $informacao->save();
    }

}
