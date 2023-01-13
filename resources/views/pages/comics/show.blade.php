{{-- Estendo la pagina "app" contenuta nella cartella "layouts" --}}
@extends('layouts.app')

@section('page-title', "Prodotto")


@section('fumetti-content')
    
    <h2>Prodotto: {{ $fumetto_singolo['title'] }}</h2>

@endsection
