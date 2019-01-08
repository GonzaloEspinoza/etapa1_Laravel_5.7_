
@extends('layout')



@section('content')

    <h1>Compras</h1>

    <ul>
    

            @forelse ($tipoCompras as $tipoComprasitem)

                <li> {{ $tipoComprasitem['title'] }} </li>

                
            @empty
                <li>No hay Compras para mostrar</li>
            @endforelse
           

    </ul>


@endsection 