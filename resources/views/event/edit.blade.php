@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div class="col-md-6 offset-md-3" id="event-create-container">
    <h1>Edite seu evento</h1>
    <form action="{{route('update', ['event' => $event->id])}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="file" name="image" class="form-control-image">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
            @error('image')
                <p id="validation-error">
                    @foreach ($errors->get('image') as $message)
                        {{$message}}
                    @endforeach
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" placeholder="Nome do evento"
                value="{{ $event->title}}">
            @error('title')
                <p id="validation-error">
                    @foreach ($errors->get('title') as $message)
                        {{$message}}
                    @endforeach
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" name="date" class="form-control" placeholder="Data do evento"
                value="{{ $event->date->format('Y-m-d') }}">
            @error('date')
                <p id="validation-error">
                    @foreach ($errors->get('date') as $message)
                        {{$message}}
                    @endforeach
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" name="city" class="form-control" placeholder="Local do evento"
                value="{{ $event->city }}">
            @error('city')
                <p id="validation-error">
                    @foreach ($errors->get('city') as $message)
                        {{$message}}
                    @endforeach
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control"
                placeholder="O que vai acontecer no evento ?">{{ $event->description }}</textarea>
            @error('description')
                <p id="validation-error">
                    @foreach ($errors->get('description') as $message)
                        {{$message}}
                    @endforeach
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="items">Adicione items de infraestrutura:</label>
            @foreach (App\Enums\EventItems::cases() as $case)
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="{{ $case->name }}" @foreach ($event->items as $item)
                    @if($case->name == $item) checked @endif @endforeach>{{ $case->name }}
                </div>
            @endforeach
            @error('items')
                <p id="validation-error">
                    @foreach ($errors->get('items') as $message)
                        {{$message}}
                    @endforeach
                </p>
            @enderror
        </div>
        @include('event.partials.btn-create-edit', ['name' => 'Editar evento'])
    </form>
</div>
@endsection