@extends('_template')
@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Upload Image</h1>
        </div>
        @include('error_template')
    </div>

    <div class="container">
        {!! Form::open(['route' => ['products.images.store', $product->id], 'method' => 'post', 'enctype' => "multipart/form-data"]) !!}


        <div class="form-group">
            {!! Form::label('image', 'Image: ') !!}
            {!! Form::file('image', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Cadastrar Imagem',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

@endsection