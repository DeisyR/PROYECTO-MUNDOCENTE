@extends('layouts.default')

@section('content')

    <h1>Registro de LUGARES</h1>
    <form action="{{route('place_create_path')}}" method="post">

        <div class="form-group">
            <label for="">Nombre:</label><br>
            <input class="form-control" type="text" name="name_place" value="">
        </div>
        <div class="form-group">
            <label for="">Tipo:</label><br>
            <select name="type_place">
                <option value="D">Departamento</option>
                <option value="C">Ciudad</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ubicacion:</label><br>
            <input class="form-control" type="text" name="location_place" value="">
        </div>
        <br>
        <button class="btn btn-primary">Registrar</button>
    {!! Form::close() !!}
    </form>


@stop