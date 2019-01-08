@extends('layout')


@section('content')

    <h1>PORTAFOLIO</h1>





    <ul>


        @forelse ($portafolio as $portafolioItem)
            <li>{{ $portafolioItem['title'] }}</li>

        @empty
            <li>No hay portafolio</li>
        @endforelse
        

       

    </ul>

@endsection