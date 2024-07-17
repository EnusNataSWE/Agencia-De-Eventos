@if($search)
    <h2>Voce está buscando por:  {{$search}}</h2>
    @if(count($events) == 0)
        <p>Não há eventos de {{$search}}</p>
        <a href="{{route('index')}}">Ver todos os eventos</a>
    @endif
@else
    <h2>Próximos evento</h2>
    <p>Veja os eventos dos próximos dias</p>
    @if(count($events) == 0)
        <p>Ainda não há eventos disponíveis</p>
        <a href="{{route('create')}}">Crie um evento</a>
    @endif
@endif