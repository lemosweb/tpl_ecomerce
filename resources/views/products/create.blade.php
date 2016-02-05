@extends('_template')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Cadastrar Produto</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => 'products.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

        <div class="form-group">
            {!! Form::label('description', 'Descrição: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Preço: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar Produto',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection