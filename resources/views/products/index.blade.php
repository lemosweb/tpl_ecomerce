@extends('_template')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Produtos</h1>
            <a href="{{ route('products.create') }}" class="btn btn-success">Cadastrar Produto</a>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>


                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td><a href="{{ route('products.images', ['id' => $product->id]) }}" class="btn btn-default">Imagens</a>
                            <a href="{{ route('products.edit', ['id' => $product->id ]) }}" class="btn btn-default">Editar</a>
                            <a href="{{ route('products.destroy', ['id' => $product->id ]) }}" class="btn btn-danger">Excluir</a></td>

                    </tr>
                @endforeach

            </table>
            {{ $products->render() }}
        </div>



    </div>
@endsection