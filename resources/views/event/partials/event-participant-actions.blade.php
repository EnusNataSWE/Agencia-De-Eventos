<a href="{{route('show', ['event' => $event->id])}}" class="btn btn-primary">
    <ion-icon name="arrow-forward-outline"></ion-icon>
    Ver
</a>
<form action="{{route('leave', ['event' => $event->id])}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger delete-btn">
        <ion-icon name="trash-outline"></ion-icon>
        Sair
    </button>
</form>