@extends('_template')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Categoria {{ $category->name }}</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('description', 'Description: ') !!}
            {!! Form::text('description', $category->description, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Category',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection