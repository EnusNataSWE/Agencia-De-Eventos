<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/style.css">

    @include('layouts.partials.headCdn')
</head>

<body>
    @include('layouts.partials.header')

    @include('layouts.partials.main')

    @include('layouts.partials.footer')

    @include('layouts.partials.bodyCdn')
</body>

</html>