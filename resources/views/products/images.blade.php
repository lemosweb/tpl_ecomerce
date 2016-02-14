@extends('_template')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Produtos</h1>
            <a href="{{ route('products.images.create',['id' => $product->id]) }}" class="btn btn-success">Cadastrar Imagem</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Extension</th>
                    <th>Ações</th>
                </tr>


                @foreach($product->images as $image)
                    <tr>

                        <td>{{ $image->id }}</td>
                        <td><img src="{{ url('uploads/'.$image->id.'.'.$image->extension) }}" alt="" width="84px"></td>
                        <td>{{ $image->extension }}</td>
                        <td><a href="{{ route('products.images.destroy', ['id' => $image->id]) }}" class="btn-default">Excluir</a></td>

                    </tr>
                @endforeach

            </table>

            <a href="{{ route('products.index') }}" class="btn btn-default">Voltar</a>

        </div>



    </div>
@endsection