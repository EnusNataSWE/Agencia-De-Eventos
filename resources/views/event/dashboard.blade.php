@extends('layouts.main')

@section('title', 'Meus eventos')

@section('content')

<div class="col-md-8 offset-md-2" id="dashboard-title-container">
    <h1 class="title">Meus Eventos</h1>
</div>
<div class="col-md-8 offset-md-2" id="dashboard-container">
    @include('event.partials.dashboard-condicional')
</div>

@endsection