@extends('layouts.app')

@section('style')

    .margenUp {
        margin-top: 2em;
    }

@endsection

@section('content')

<div class="container">
    <h1>Editar perfil</h1>

    {!! Form::open(['url' => '/user/update/' . $user->id]) !!}
    <div class="form-group">
        <h4> <span class="label label-primary">Nombre</span></h4>
        {!! Form::text('name', $user->name, ['class' => 'field', 'placeholder' => 'Nombre',
            'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Apellidos</span></h4>
        {!! Form::text('surname', $user->surname, ['class' => 'field', 'placeholder' => 'Nombre',
            'autofocus' => 'autofocus', 'required' => 'required']) !!}
        
        <h4><label for="bdate" class="label label-primary">Fecha</label></h4>
        <input type="date" name="bdate" id="bdate">
        
        <h4> <span class="label label-primary">Pais</span></h4>
        {!! Form::text('country', $user->country, ['class' => 'field', 'placeholder' => 'Nombre',
            'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Ciudad</span></h4>
        {!! Form::text('poblation', $user->poblation, ['class' => 'field', 'placeholder' => 'Nombre',
            'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <div class="margenUp"></div>

        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Confirmar',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
    </div>
    {!! Form::close() !!}
</div>

@endsection