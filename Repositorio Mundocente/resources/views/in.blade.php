@extends('layouts.default')

@section('content')
@include('alerts.errors')
    <h1>Login</h1>

    <div class="header-info">
        <h1>BIG HERO 6</h1>
        {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('correo','Correo:')!!}
            {!!Form::email('mail',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('contrasena','Contraseña:')!!}
            {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
        </div>
        {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
    </div>

@stop

