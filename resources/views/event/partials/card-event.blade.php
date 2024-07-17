<div class="col-md-3 card" id="card-event">
    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
    <div class="card-body">
        <p>{{$event->title}}</p>
        <p>{{$event->date->format('d/m/Y')}}</p>
        <p>{{count($event->participants)}} Participantes</p>
        <a href="{{  route('show', ['event' => $event->id])  }}" class="btn btn-primary">Saber Mais</a>
    </div>
</div>