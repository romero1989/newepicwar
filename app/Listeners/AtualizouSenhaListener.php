<?php


namespace App\Listeners;


use App\Events\AtualizouSenha;
use App\InformacaoServer;

class AtualizouSenhaListener
{

    public function handle(AtualizouSenha $event)
    {
        $user = $event->user;

        $informacao = new InformacaoServer();
        $informacao->account = $user->name;
        $informacao->senha = $user->cavecode;
        $informacao->alteracao = 's';

        $informacao->save();
    }

}
