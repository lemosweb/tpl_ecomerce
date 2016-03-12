@extends('_template')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Editar Produto {{ $product->name }}</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::model($product,['route' => ['products.update', $product->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('category', 'Category: ') !!}
                {!! Form::select('category_id', $categories->lists('name', 'id')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description: ') !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('featured', 'Em destaque: ') !!}
                {!! Form::checkbox('featured') !!}
            </div>

            <div class="form-group">
                {!! Form::label('recommended', 'Recomendado: ') !!}
                {!! Form::checkbox('recommended') !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Preço: ') !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Product',['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@endsection