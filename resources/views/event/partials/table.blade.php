<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Status</th>
            <th>Titulo</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                @can('isOwner', $event)
                    <td>Dono</td>
                @else
                    <td>Participante</td>
                @endcan
                <td>{{$event->title}}</td>
                <td>{{$event->city}}</td>

                <td>
                    @can('isOwner', $event)
                        @include('event.partials.event-owner-actions')
                    @else
                        @include('event.partials.event-participant-actions')
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>