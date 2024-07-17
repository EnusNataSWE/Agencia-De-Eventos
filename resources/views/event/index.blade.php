@extends('layouts.main')

@section('title', 'Agencia de Eventos')

@section('content')

@include('event.partials.banner')

<div class="col-md-12" id="events-container">

    @include('event.partials.index-condicional')
    <div class="row" id="cards-container">

        @foreach($events as $event)
            @include('event.partials.card-event')
        @endforeach

    </div>

</div>
@endsection