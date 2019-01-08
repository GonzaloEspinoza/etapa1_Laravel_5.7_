
@extends('layout')

@section('content')
    <h1>CIUDAD</h1>

    <ul>
        @forelse ($ciudad as $ciudadItem)
             <li>{{ $ciudadItem['title'] }}</li>
         @empty
            <h1>No hay cidades que mostrara</h1>
         @endforelse



    </ul>
      

@endsection

