@extends('layouts.default')

@section('content')

        <!--Route::resource('task','PlaceController/'64'/create');-->
    <h1>Registro de LUGARES</h1>
    <br>

    @foreach($lareas as $area)
        {{$area->name_place}}
    @endforeach

@stop



