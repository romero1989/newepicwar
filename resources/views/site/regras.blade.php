@extends('layouts.site')

@section('content')
    <div class="table-responsive">
    <table class="table table-bordered table-dark rounded">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Infração</th>
            <th scope="col">Penalidade</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Aproveitamento de bugs, no jogo ou em eventos</td>
            <td>[30 Dias], dependendo Permanente</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Uso de qualquer programa que interfira no jogo ou no andamento do jogo</td>
            <td>Permanente</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Simulação de ser hacker</td>
            <td>Permanente</td>
        </tr>

        <tr>
            <th scope="row">4</th>
            <td>Criar personagens com nick clone de membros da equipe</td>
            <td>Permanente</td>
        </tr>

        <tr>
            <th scope="row">5</th>
            <td>Tentar se passar-se por membro da equipe</td>
            <td>Permanente</td>
        </tr>

        <tr>
            <th scope="row">6</th>
            <td>Proibido divulgação de outros sites/servidores</td>
            <td>Permanente</td>
        </tr>

        <tr>
            <th scope="row">7</th>
            <td>Tentar difamar o servidor, mesmo que com mensagens que seja subjetivo</td>
            <td>Permanente</td>
        </tr>

        <tr>
            <th scope="row">8</th>
            <td>Proibido qualquer forma de discriminação ou preconceito</td>
            <td>Permanente</td>
        </tr>
        </tbody>
    </table>
</div>

<div class="bd-callout bd-callout-warning">
    <h5 id="conveying-meaning-to-assistive-technologies">Observações</h5>
    <p>Essa grade de punição serve apenas como referência e todos os casos serão analisados pelo [ADM] que então, tomará a decisão da punição. As punições sendo menor de  <code class="highlighter-rouge"> [07/15/30 Dias] ou Permanente </code>, inclusive para denúncias não citadas nas regras.</p>
</div>
@endsection

