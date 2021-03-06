@section('title', 'Nollningar')
@extends('layouts.app')
@section('content')

    <h1>Nollningar</h1>
    <hr>
    <div class="col-12">
        <p>
            Här är alla våra nollningar och deras scheman.
            <br><br>
            Antal nollningar: {{ $initiations->count() }}
        </p>
    </div>
    <hr>
    <div class="d-block row d-md-flex flex-md-row-reverse py-4">
        <div class="col-12 text-center">
            @if( $initiations->isEmpty() )
                <p class="text-center">Inga nollningar tillagda.</p>
            @endif
            <ul class="list-group col-md-8 offset-md-2">
                @foreach( $initiations as $initiation )
                    <a href="{{ route( 'initiation.show', $initiation->year ) }}" class="list-group-item bg-dark">
                        {{ $initiation->year }}
                    </a>
                @endforeach
            </ul>
        </div>
    </div>

@endsection