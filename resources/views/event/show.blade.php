@extends('layouts.main')

@section('title', 'Evento Generico')

@section('content')
<div class="col-md-10 offset-md-1" id="show-event-container">
    <div class="row">
        <div class="col-md-6" id="event-image-container">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">
        </div>
        <div class="col-md-6" id="event-info-container">
            <h1><ion-icon name="star-outline"></ion-icon>{{$event->title}}</h1>
            <p><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
            <p><ion-icon name="people-outline"></ion-icon>{{$event->owner->name}}</p>
            @can('isOwner', $event)
                <p id="my-event">Dono do evento</p>
            @elsecan('leave', $event)
                <form action="{{route('leave', ['event' => $event->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="Sair do evento">
                </form>
            @else
                @include('event.partials.btn-confirmar-presenca')
            @endcan
            @foreach ($event->items as $item)
                <p><ion-icon name="play-outline"></ion-icon>{{$item}}</p>
            @endforeach
        </div>
        <div class="col-md-12" id="event-description-container">
            <h2>Descrição do evento</h2>
            <p>{{$event->description}}</p>
        </div>
    </div>
</div>
@endsection