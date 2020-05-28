@component('mail::message')
    Olá **{{$name}}**,  {{-- use double space for line break --}}
    Você solicitou reset da sua senha numérica no NewEpicWar!
    Clique no botão abaixo para finalizar o processo de reset de senha!
    @component('mail::button', ['url' => $link])
        Continuar processo
    @endcomponent
    Saudações,

    Equipe NewEpicWar.
@endcomponent
