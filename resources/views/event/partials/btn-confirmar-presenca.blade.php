<form action="{{route('participate', ['event' => $event->id])}}" method="post">
    @csrf
    <input type="submit" class="btn btn-primary" value="Confirmar Presença">
</form>