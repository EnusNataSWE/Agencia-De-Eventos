<a href="{{route('show', ['event' => $event->id])}}" class="btn btn-primary">
    <ion-icon name="arrow-forward-outline"></ion-icon>
    Ver
</a>
<a href="{{route('edit', ['event' => $event->id])}}" class="btn btn-info edit-btn">
    <ion-icon name="create-outline"></ion-icon>
    Editar
</a>
<form action="{{route('destroy', ['event' => $event->id])}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger delete-btn">
        <ion-icon name="trash-outline"></ion-icon>
        Deletar
    </button>
</form>