<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSenhaNumerica extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = config('app.url');
        $from = config('mail.mailers.smtp.username');
        $appname = config('app.name');

        return $this->from($from,$appname)
            ->to($this->user->email)
            ->subject('Confirmação de Reset de Senha Numérica')
            ->markdown('mail.ResetSenhaNumerica')
            ->with([
                'name' => $this->user->name,
                'link' => $url.'/app/user/confirmaresetsenhanumerica/'.$this->user->senha_numerica.'/'.$this->user->email
            ]);
    }
}
