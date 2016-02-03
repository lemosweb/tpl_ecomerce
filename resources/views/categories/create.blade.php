@extends('_template')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Criar Categoria</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('description', 'Description: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Category',['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection