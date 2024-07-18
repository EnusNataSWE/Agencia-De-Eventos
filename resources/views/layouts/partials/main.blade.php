<main>
    <div class="container-fluid">
        <div class="row">
            @if (Session()->has('success'))
                <p class="session-message">
                    {{Session('success')}}
                </p>
            @endif
            @yield('content')
        </div>
    </div>
</main>