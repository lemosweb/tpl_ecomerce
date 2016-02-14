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
            {!! Form::label('category', 'Category: ') !!}
            {!! Form::select('category_id', $categories->lists('name', 'id'), ['class' => 'form-control']) !!}
        </div>

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

        <input type="hidden" value="1">

        <div class="form-group">
            {!! Form::label('description', 'Descrição: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Preço: ') !!}
            {!! Form::text('price', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('featured', 'Em destaque: ') !!}
            {!! Form::checkbox('featured', true, false) !!}
        </div>

        <div class="form-group">
            {!! Form::label('recommended', 'Recomendado: ') !!}
            {!! Form::checkbox('recommended', true, false) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Cadastrar Produto', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection