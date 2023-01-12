@section('fumetti-content')
    {{-- <h2>Titolo: {{$title}}</h2> --}}

    <div class="album">
        <div class="contenitore">
            {{-- vvv Struttura Card vvv --}}
            @foreach ($fumetti as $elem)
                <div class="carta">
                    <img src=" {{$elem['thumb'] }}" alt="">
                    <h4>{{ $elem['series'] }}</h4>
                </div>
            @endforeach
        </div>
    </div>
@endsection
