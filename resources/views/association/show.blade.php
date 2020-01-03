@section('title', $association->name)
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{ $association->name }}</h1>
        <h3>{{ $association->nickname }}</h3>
    </div>
    <hr>
    <div class="d-block row d-md-flex flex-md-row-reverse">
        <div class="col-md-5 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="https://admin.lindacarlstad.se/{{ $association->image }}" alt="{{ $association->name }} logga">
            {{-- <img class="img-fluid" src="http://admin.lindacarlstad.se.test/{{ $association->image }}" alt="{{ $association->name }} logga"> --}}
        </div>
        <br class="d-block d-md-none">
        <div class="col-md-7 d-flex">
            <div class="text-block">
                <h4>Beskrivning:</h4>
                @if( $association->description )
                    <p>
                        {!! nl2br( $association->description ) !!}
                    </p>
                @else
                    <p>Ingen beskrivning.</p>
                @endif
                @if( $association->link )
                    <a target="_blank" class="btn btn-grey" href="{{ $association->link }}">{{ $association->name }}</a>
                @endif
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <p>Klicka nedan för att gå tillbaka.</p>
        <a class="btn btn-grey" href="{{ route( 'association' ) }}">Föreningar</a>
    </div>
@endsection