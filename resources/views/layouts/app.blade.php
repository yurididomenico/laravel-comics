<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @yield è un segnaposto --}}
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href=" {{ asset("css/app.css") }} ">
</head>
<body>

    <header>
        @include('components.sites')
        @include('components.menu')
    </header>

    <main>
        @include('components.jumbotron')
        @include('components.fumetti')

        @yield('fumetti-content')
    </main>

    <footer>
        @include('components.linkutili')
        @include('components.contacts')
    </footer>
    
</body>
</html>