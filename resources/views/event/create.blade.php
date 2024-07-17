@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div class="col-md-6 offset-md-3" id="event-create-container">
    <h1>Crie um evento</h1>
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="image" class="form-control-image" value="{{old('image')}}">
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
                value="{{ old('title') }}">
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
            <input type="date" name="date" class="form-control" placeholder="Data do evento" value="{{ old('date') }}">
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
            <input type="text" name="city" class="form-control" placeholder="Local do evento" value="{{ old('city') }}">
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
                placeholder="O que vai acontecer no evento ?">{{ old('description') }}</textarea>
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
                    <input type="checkbox" name="items[]" value="{{ $case->name }}">{{ $case->name }}
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
        @include('event.partials.btn-create-edit', ['name' => 'Criar Evento'])
    </form>
</div>
@endsection