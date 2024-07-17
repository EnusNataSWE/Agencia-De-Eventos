@if(count($events) == 0)
    <p>Voce ainda não possui e nem participa de nenhum evento</p>
    <a href="{{route('create')}}">Crie um evento</a>
@else
    @include('event.partials.table')
@endif