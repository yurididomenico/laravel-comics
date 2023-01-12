@extends('layouts.app')

@section('page-title', "Prodotti")

@section('main-content')
    
    {{-- <h2>Titolo: {{$title}}</h2> --}}

    <ul>
        <li>Prodotto 1</li>
        <li>Prodotto 2</li>
        <li>Prodotto 3</li>
        <li>Prodotto 4</li>
    </ul>

    <div class="bg-image-prodotti">
        
        {{-- vvv Struttura Card vvv --}}
        @foreach ($fumetti as $elem)
            
            <div>
                <h5>{{$elem['series']}}</h5>
            </div>

        @endforeach
    </div>

@endsection
