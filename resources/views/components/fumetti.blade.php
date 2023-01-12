@section('fumetti-content')
    {{-- <h2>Titolo: {{$title}}</h2> --}}

    <div class="album">
        <div class="contenitore">
            {{-- vvv Struttura Card vvv --}}
            @foreach ($fumetti as $elem)
                <a href="/" class="carta">
                    <img src=" {{$elem['thumb'] }}" alt="">
                    <h4>{{ $elem['series'] }}</h4>
                </a>
            @endforeach
        </div>

        {{-- Bottone "load more" --}}
        <div class="loadMore ">
            <a href="/" class="btn btn-color">LOAD MORE</a>
        </div>
    </div>

    
@endsection
